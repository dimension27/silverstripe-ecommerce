<?php
/**
 * @description: Account page shows order history and a form to allow the member to edit his/her details.
 *
 *
 *
 * @authors: Silverstripe, Jeremy, Nicolaas
 *
 * @package: ecommerce
 * @sub-package: pages
 *
 **/

class AccountPage extends Page {

	public static $icon = 'ecommerce/images/icons/account';

	/**
	 *@return Boolean
	 **/
	function canCreate($member = null) {
		return !DataObject::get_one("AccountPage");
	}

	/**
	 * Returns the link or the Link to the account page on this site
	 * @return String (URLSegment)
	 */
	public static function find_link() {
		if($page = self::get_if_account_page_exists()) {
			return $page->Link();
		}
	}

	/**
	 * Return a link to view the order on this page.
	 * @return String (URLSegment)
	 * @param int|string $orderID ID of the order
	 */
	public static function get_order_link($orderID) {
		return self::find_link(). 'showorder/' . $orderID . '/';
	}

	/**
	 *@return Object(AccountPage)
	 **/
	protected static function get_if_account_page_exists() {
		if($page = DataObject::get_one('AccountPage')) {
			return $page;
		}
		user_error('No AccountPage was found. Please create one in the CMS!', E_USER_WARNING);
	}

	/**
	 *@return DataObjectSet or Null
	 **/
	function AllMemberOrders() {
		$dos = new DataObjectSet();
		$doIncompleteOrders = new DataObject();
		$doIncompleteOrders->Orders = $this->IncompleteOrders();
		if($doIncompleteOrders->Orders) {
			$doIncompleteOrders->Heading = _t("Account.INCOMPLETEORDERS", "Incomplete Orders");
			$dos->push($doIncompleteOrders);
		}
		$doInProcessOrders = new DataObject();
		$doInProcessOrders->Orders = $this->InProcessOrders();
		if($doInProcessOrders->Orders) {
			$doInProcessOrders->Heading = _t("Account.INPROCESSORDERS", "In Process Orders");
			$dos->push($doInProcessOrders);
		}
		$doCompleteOrders = new DataObject();
		$doCompleteOrders->Orders = $this->CompleteOrders();
		if($doCompleteOrders->Orders) {
			$doCompleteOrders->Heading = _t("Account.COMPLETEORDERS", "Complete Orders");
			$dos->push($doCompleteOrders);
		}
		if($dos->count()) {
			return $dos;
		}
		return null;
	}

	/**
	 * Returns all {@link Order} records for this
	 * member that are incomplete.
	 *
	 * @return DataObjectSet
	 */
	function IncompleteOrders() {
		$statusFilter = "\"OrderStep\".\"ShowAsUncompletedOrder\" = 1 ";
		return $this->otherOrderSQL($statusFilter);
	}

	/**
	 * Returns all {@link Order} records for this
	 * member that are completed.
	 *
	 * @return DataObjectSet
	 */
	function InProcessOrders() {
		$statusFilter = "\"OrderStep\".\"ShowAsInProcessOrder\" = 1";
		return $this->otherOrderSQL($statusFilter);
	}

	/**
	 * Returns all {@link Order} records for this
	 * member that are completed.
	 *
	 * @return DataObjectSet
	 */
	function CompleteOrders() {
		$statusFilter = "\"OrderStep\".\"ShowAsCompletedOrder\" = 1";
		return $this->otherOrderSQL($statusFilter);
	}

	/**
	 *@return DataObjectSet or Null
	 **/
	protected function otherOrderSQL ($statusFilter) {
		$memberID = Member::currentUserID();
		if($memberID) {
			$orders = DataObject::get(
				$className = 'Order',
				$where = "\"Order\".\"MemberID\" = '$memberID' AND $statusFilter AND \"CancelledByID\" = 0",
				$sort = "\"Created\" DESC",
				$join = "INNER JOIN \"OrderStep\" ON \"Order\".\"StatusID\" = \"OrderStep\".\"ID\""
			);
			if($orders) {
				foreach($orders as $order) {
					if(!$order->Items() || !$order->canView()) {
						$orders->remove($order);
					}
					elseif($order->IsPastCart())  {
						$order->tryToFinaliseOrder();
					}
				}
				return $orders;
			}
		}
		return null;
	}


}

class AccountPage_Controller extends Page_Controller {

	static $allowed_actions = array(
		'showorder',
		'sendreceipt',
		'CancelForm',
		'PaymentForm',
		'MemberForm'
	);

	protected $currentOrder = null;

	protected $orderID = 0;

	protected $memberID = 0;

	protected $message = "";

	protected static $session_code = "AccountPageMessage";
		static function set_session_code($s) {self::$session_code = $s;}
		static function get_session_code() {return self::$session_code;}

	public static function set_message($s) {Session::set(self::get_session_code(), $s);}

	function init() {
		parent::init();
		Requirements::themedCSS('AccountPage');
		
		//WE HAVE THIS FOR SUBMITTING FORMS!
		if(isset($_POST['OrderID'])) {
			$this->orderID = intval($_POST['OrderID']);
		}elseif(Director::urlParam('ID')){
			$this->orderID = Director::urlParam('ID');
		}
			
		if(!$this->CurrentOrder()) {
			$messages = array(
				'default' => '<p class="message good">' . _t('Account.MESSAGE', 'You\'ll need to login before you can access the account page. If you are not registered, you won\'t be able to access it until you place your first order, otherwise please enter your details below.') . '</p>',
				'logInAgain' => _t('Account.LOGINAGAIN', 'You have been logged out. If you would like to log in again, please do so below.')
			);
			Security::permissionFailure($this, $messages);
			return false;
		}
		
	}

	/**
	 *@return DataObject (Order)
	 **/
	function CurrentOrder() {
		if(!$this->currentOrder) {
			$this->currentOrder = Order::get_by_id_if_can_view($this->orderID);
			if($this->currentOrder) {
				if(!$this->currentOrder->canEdit())  {
					$this->currentOrder->tryToFinaliseOrder();
				}
			}
		}
		return $this->currentOrder;
	}

	/**
	 *@return String
	 **/
	function Message() {
		if($sessionMessage = Session::get(self::get_session_code())) {
			$this->message .= $sessionMessage;
			Session::set(self::get_session_code(), "");
			Session::clear(self::get_session_code());
		}
		return $this->message;
	}

	/**
	 * Return the {@link Order} details for the current
	 * Order ID that we're viewing (ID parameter in URL).
	 *
	 * @return array
	 */
	function showorder($request) {
		Requirements::themedCSS('Order');
		Requirements::themedCSS('Order_print', 'print');
		$this->orderID = intval($request->param("ID"));
		if(!$this->CurrentOrder()) {
			$this->message = _t('Account.ORDERNOTFOUNDGOTO', 'Order can not be found. Go to '). '<a href="' . $this->Link() . '">'.$this->Title.'</a> '._t('Account.FORMOREOPTIONS', 'for more options').'.';
		}
		return array();
	}

	/**
	 *@return Array - just so the template is still displayed
	 **/
	function sendreceipt($request) {
		$this->orderID = intval($request->param("ID"));
		if($o = $this->CurrentOrder()) {
			if($m = $o->Member()) {
				if($m->Email) {
					$o->sendReceipt(_t("Account.COPYONLY", "--- COPY ONLY ---"), true);
					$this->message = _t('Account.RECEIPTSENT', 'An order receipt has been sent to: ').$m->Email.'.';
				}
				else {
					$this->message = _t('Account.RECEIPTNOTSENTNOEMAIL', 'No email could be found for sending this receipt.');
				}
			}
			else {
				$this->message = _t('Account.RECEIPTNOTSENTNOEMAIL', 'No email could be found for sending this receipt.');
			}
			Director::redirect($o->Link());
		}
		else {
			$this->message = _t('Account.RECEIPTNOTSENTNOORDER', 'Order could not be found.');
		}
		return array();
	}

	/**
	 * Return a form allowing the user to edit
	 * their details with the shop.
	 *
	 * @return ShopAccountForm
	 */
	function MemberForm() {
		if(!$this->CurrentOrder()) {
			return new ShopAccountForm($this, 'MemberForm');
		}
	}

	/**
	 * Returns the form to cancel the current order,
	 * checking to see if they can cancel their order
	 * first of all.
	 *
	 * @return OrderForm_Cancel
	 */
	function CancelForm() {
		if($this->CurrentOrder()) {
			if($this->currentOrder->canCancel()) {
				return new OrderForm_Cancel($this, 'CancelForm', $this->currentOrder);
			}
		}
		//once cancelled, you will be redirected to main page - hence we need this...
		if(isset($_REQUEST["OrderID"])) {
			return array();
		}
	}


	/**
	 *@return Form (OrderForm_Payment) or Null
	 **/
	function PaymentForm(){
		if($this->CurrentOrder()){
			if($this->currentOrder->canPay()) {
				Requirements::javascript("ecommerce/javascript/EcomPayment.js");
				return $form = new OrderForm_Payment($this, 'PaymentForm', $this->currentOrder);
			}
		}
	}


}
