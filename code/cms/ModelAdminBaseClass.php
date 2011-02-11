<?php
/**
 * Common functionality for ModelAdmin
 * @authors: Silverstripe, Jeremy, Nicolaas
 */

class ModelAdminEcommerceClass_CollectionController extends ModelAdmin_CollectionController {


	function search($request, $form) {
		// Get the results form to be rendered
		$query = $this->getSearchQuery(array_merge($form->getData(), $request));
		$resultMap = new SQLMap($query, $keyField = "ID", $titleField = "Title");
		$items = $resultMap->getItems();
		$array = array();
		if($items && $items->count()) {
			foreach($items as $item) {
				$array[] = $item->ID;
			}
		}
		Session::set("ModelAdminEcommerceClass".$this->modelClass,serialize($array));
		return parent::search($request, $form);
	}

	function urlSegmenter() {
		return self::$url_segment;
	}
}

class ModelAdminEcommerceClass_RecordController extends ModelAdmin_RecordController {


	protected static $actions_to_keep = array(
		"Back",
		"doDelete",
		"doSave"
	);


	/**
	 * Returns a form for editing the attached model
	 */
	public function EditForm() {
		$form = parent::EditForm();
		if($this->currentRecord instanceof SiteTree){
			$oldActions = $form->Actions();
			//in order of appearance
			//$form->unsetActionByName("action_doDelete"); - USEFUL TO KEEP
			$form->unsetActionByName("action_unpublish");
			$form->unsetActionByName("action_delete");
			$form->unsetActionByName("action_save");
			$form->unsetActionByName("action_publish");
			//$form->unsetActionByName("action_doSave"); - USEFUL TO KEEP
			$actions = $form->Actions();
			$actions->push(new FormAction("doGoto", "go to page"));
			$form->setActions($actions);
		}

		if($this->parentController) {
			$array = unserialize(Session::get("ModelAdminEcommerceClass".$this->parentController->getModelClass()));
			if(is_array($array)) {
				if(count($array) && count($array) > 1) {
					foreach($array as $key => $id) {
						if($id == $this->currentRecord->ID) {
							if(isset($array[$key + 1]) && $array[$key + 1]) {
								$nextRecordID = $array[$key + 1];
								$nextRecordURL = $this->parentController->Link(Controller::join_links($nextRecordID, "edit"));
								$form->Actions()->push(new FormAction("goNext", "Next Record"));
								$form->Fields()->push(new HiddenField("nextRecordURL", null, $nextRecordURL));
							}
							if(isset($array[$key - 1]) && $array[$key - 1]) {
								$prevRecordID = $array[$key - 1];
								$nextRecordURL = $this->parentController->Link(Controller::join_links($prevRecordID, "edit"));
								$form->Actions()->insertFirst(new FormAction("goPrev", "Previous Record"));
								$form->Fields()->push(new HiddenField("prevRecordURL", null, $nextRecordURL));
							}
						}
					}
				}
			}
		}
		return $form;
	}

	function doSave($data, $form, $request) {
		$form->saveInto($this->currentRecord);
		if($this->currentRecord instanceof SiteTree){
			$this->currentRecord->writeToStage("Stage");
			$this->currentRecord->publish("Stage", "Live");
		}
		else{
			$this->currentRecord->write();
		}
		$this->currentRecord->flushCache();
		if(Director::is_ajax()) {
			return $this->edit($request);
		}
		else {
			Director::redirectBack();
		}
	}

	function doGoto($data, $form, $request) {
		Director::redirect($this->currentRecord->Link());
	}


	function doDelete() {
		user_error("this function has not been implemented yet", E_USER_NOTICE);
		//might be prudent not to allow deletions as products should not be deleted, but rather be made "not for sale"
	}


}
