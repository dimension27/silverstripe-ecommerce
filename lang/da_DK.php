<?php

/**
 * Danish (Denmark) language pack
 * @package modules: ecommerce
 * @subpackage i18n
 */

i18n::include_locale_file('modules: ecommerce', 'en_US');

global $lang;

if(array_key_exists('da_DK', $lang) && is_array($lang['da_DK'])) {
	$lang['da_DK'] = array_merge($lang['en_US'], $lang['da_DK']);
} else {
	$lang['da_DK'] = $lang['en_US'];
}

$lang['da_DK']['AccountPage']['NOPAGE'] = 'Ingen kontoside på dette site. Opret venligst en!';
$lang['da_DK']['AccountPage.ss']['COMPLETED'] = 'Fuldførte ordrer';
$lang['da_DK']['AccountPage.ss']['HISTORY'] = 'Din ordrehistorie';
$lang['da_DK']['AccountPage.ss']['INCOMPLETE'] = 'Mangelfuld ordre';
$lang['da_DK']['AccountPage.ss']['Message'] = 'Indtast venligst dine loginoplysninger for at logge ind på din konto. <br /> Denne side er kun tilgængeliglig efter din første ordre, hvis du er blevet tildelt et kodeord';
$lang['da_DK']['AccountPage.ss']['NOCOMPLETED'] = 'Ingen fuldførte ordrer blev fundet.';
$lang['da_DK']['AccountPage.ss']['NOINCOMPLETE'] = 'Ingen mangelfulde ordre blev fundet.';
$lang['da_DK']['AccountPage.ss']['ORDER'] = 'Ordre #';
$lang['da_DK']['AccountPage.ss']['READMORE'] = 'Læs mere om ordre #%s';
$lang['da_DK']['AccountPage_order.ss']['BACKTOCHECKOUT'] = 'Klik her for at gå til checkout';
$lang['da_DK']['AccountPage_order.ss']['EMAILDETAILS'] = 'En bekræftende kopi er blevet sendt til din emailadresse';
$lang['da_DK']['Cart.ss']['ADDONE'] = 'Tilføj endnu en &quot;%s&quot; til din kurv';
$lang['da_DK']['Cart.ss']['CheckoutClick'] = 'Klik her for at gå til kassen';
$lang['da_DK']['Cart.ss']['CheckoutGoTo'] = 'Gå til kassen';
$lang['da_DK']['Cart.ss']['HEADLINE'] = 'Min indkøbsvogn';
$lang['da_DK']['Cart.ss']['NOITEMS'] = 'Der er ingen varer i indkøbskurven';
$lang['da_DK']['Cart.ss']['PRICE'] = 'Pris';
$lang['da_DK']['Cart.ss']['READMORE'] = 'Klik her for at læse mere om &quot;%s&quot;';
$lang['da_DK']['Cart.ss']['Remove'] = 'Fjern &quot;%s&quot; fra indkøbskurven';
$lang['da_DK']['Cart.ss']['REMOVEALL'] = 'Fjern alle &quot;%s&quot; fra din kurv';
$lang['da_DK']['Cart.ss']['RemoveAlt'] = 'Fjern';
$lang['da_DK']['Cart.ss']['REMOVEONE'] = 'Fjern &quot;%s&quot; fra din kurv';
$lang['da_DK']['Cart.ss']['SHIPPING'] = 'Levering';
$lang['da_DK']['Cart.ss']['SUBTOTAL'] = 'Subtotal';
$lang['da_DK']['Cart.ss']['TOTAL'] = 'Total';
$lang['da_DK']['CheckoutPage']['NOPAGE'] = 'Ingen Checkout Side på dette site - Lav venligst en!';
$lang['da_DK']['CheckoutPage.ss']['CHECKOUT'] = 'Check ud';
$lang['da_DK']['CheckoutPage.ss']['ORDERSTEP'] = 'Ordrestatus';
$lang['da_DK']['CheckoutPage.ss']['PROCESS'] = 'Proces';
$lang['da_DK']['CheckoutPage_OrderIncomplete.ss']['BACKTOCHECKOUT'] = 'Klik her for at gå tilbage til Check ud';
$lang['da_DK']['CheckoutPage_OrderIncomplete.ss']['CHECKOUT'] = 'Check ud';
$lang['da_DK']['CheckoutPage_OrderIncomplete.ss']['CHEQUEINSTRUCTIONS'] = 'This du valgte check som betalingsmåde vil du modtage en email med nærmere instruktioner';
$lang['da_DK']['CheckoutPage_OrderIncomplete.ss']['DETAILSSUBMITTED'] = 'Her er de informationer vi har modtaget';
$lang['da_DK']['CheckoutPage_OrderIncomplete.ss']['INCOMPLETE'] = 'Ordreinformationerne er utilstrækkelige';
$lang['da_DK']['CheckoutPage_OrderIncomplete.ss']['ORDERSTEP'] = 'Ordrestatus';
$lang['da_DK']['CheckoutPage_OrderIncomplete.ss']['PROCESS'] = 'Proces';
$lang['da_DK']['CheckoutPage_OrderSuccessful.ss']['BACKTOCHECKOUT'] = 'Klik her for at gå tilbage til checkout';
$lang['da_DK']['CheckoutPage_OrderSuccessful.ss']['CHECKOUT'] = 'Checkout';
$lang['da_DK']['CheckoutPage_OrderSuccessful.ss']['EMAILDETAILS'] = 'En bekræftende kopi er sent til din emailadresse';
$lang['da_DK']['CheckoutPage_OrderSuccessful.ss']['ORDERSTEP'] = 'Ordrestatus';
$lang['da_DK']['CheckoutPage_OrderSuccessful.ss']['PROCESS'] = 'Proces';
$lang['da_DK']['CheckoutPage_OrderSuccessful.ss']['SUCCESSFULl'] = 'Ordren er modtaget succesfuldt';
$lang['da_DK']['ChequePayment']['MESSAGE'] = 'Betaling med check mulig. Bemærk: din ordre vil ikke blive sendt før betalingen er modtaget.';
$lang['da_DK']['FindOrderReport']['DATERANGE'] = 'Dato interval';
$lang['da_DK']['MemberForm']['DETAILSSAVED'] = 'Dine detajler er blevet gemt';
$lang['da_DK']['MemberForm']['LOGGEDIN'] = 'Du er i øjeblikket logget ind som ';
$lang['da_DK']['Order']['INCOMPLETE'] = 'Ordren er ikke komplet';
$lang['da_DK']['Order']['SUCCESSFULL'] = 'Ordre modtaget succesfuldt';
$lang['da_DK']['OrderInformation.ss']['ADDRESS'] = 'Adresse';
$lang['da_DK']['OrderInformation.ss']['AMOUNT'] = 'Antal';
$lang['da_DK']['OrderInformation.ss']['BUYERSADDRESS'] = 'Købers adresse';
$lang['da_DK']['OrderInformation.ss']['CITY'] = 'By';
$lang['da_DK']['OrderInformation.ss']['COUNTRY'] = 'Land';
$lang['da_DK']['OrderInformation.ss']['CUSTOMERDETAILS'] = 'Kundedetaljer';
$lang['da_DK']['OrderInformation.ss']['DATE'] = 'Dato';
$lang['da_DK']['OrderInformation.ss']['DETAILS'] = 'Detaljer';
$lang['da_DK']['OrderInformation.ss']['EMAIL'] = 'Email';
$lang['da_DK']['OrderInformation.ss']['MOBILE'] = 'Mobil';
$lang['da_DK']['OrderInformation.ss']['NAME'] = 'Navn';
$lang['da_DK']['OrderInformation.ss']['ORDERSUMMARY'] = 'Ordresammendrag';
$lang['da_DK']['OrderInformation.ss']['PAYMENTID'] = 'Betalingsid';
$lang['da_DK']['OrderInformation.ss']['PAYMENTINFORMATION'] = 'Betalingsinformationer';
$lang['da_DK']['OrderInformation.ss']['PAYMENTMETHOD'] = 'Metode';
$lang['da_DK']['OrderInformation.ss']['PAYMENTSTATUS'] = 'Betalingsstatus';
$lang['da_DK']['OrderInformation.ss']['PHONE'] = 'Telefon';
$lang['da_DK']['OrderInformation.ss']['PRICE'] = 'Pris';
$lang['da_DK']['OrderInformation.ss']['PRODUCT'] = 'Produkt';
$lang['da_DK']['OrderInformation.ss']['QUANTITY'] = 'Antal';
$lang['da_DK']['OrderInformation.ss']['READMORE'] = 'Klik her for at læse mere om &quot;%s&quot;';
$lang['da_DK']['OrderInformation.ss']['SHIPPING'] = 'Levering';
$lang['da_DK']['OrderInformation.ss']['SHIPPINGDETAILS'] = 'Leveringsinformation';
$lang['da_DK']['OrderInformation.ss']['SHIPPINGTO'] = 'til';
$lang['da_DK']['OrderInformation.ss']['SUBTOTAL'] = 'Subtotal';
$lang['da_DK']['OrderInformation.ss']['TABLESUMMARY'] = 'Indholdet af din indkøbsvogn vises i denne form og resumé af alle gebyrer i forbindelse med en ordre og et sammendrag af betalingsmuligheder.ne';
$lang['da_DK']['OrderInformation.ss']['TOTAL'] = 'Total';
$lang['da_DK']['OrderInformation.ss']['TOTALl'] = 'Total';
$lang['da_DK']['OrderInformation.ss']['TOTALOUTSTANDING'] = 'Udestående totalt';
$lang['da_DK']['OrderInformation.ss']['TOTALPRICE'] = 'Total pris';
$lang['da_DK']['OrderInformation_Editable.ss']['ADDONE'] = 'Tilføj en &quot;%s&quot; mere til indkøbskurven';
$lang['da_DK']['OrderInformation_Editable.ss']['NOITEMS'] = 'Der er <strong>ingen</strong> varer i indkøbskurven';
$lang['da_DK']['OrderInformation_Editable.ss']['ORDERINFORMATION'] = 'Ordreinformation';
$lang['da_DK']['OrderInformation_Editable.ss']['PRICE'] = 'Pris';
$lang['da_DK']['OrderInformation_Editable.ss']['PRODUCT'] = 'Produkt';
$lang['da_DK']['OrderInformation_Editable.ss']['QUANTITY'] = 'Antal';
$lang['da_DK']['OrderInformation_Editable.ss']['READMORE'] = 'Klik her for at læse mere om &quot;%s&quot;';
$lang['da_DK']['OrderInformation_Editable.ss']['REMOVEALL'] = 'Fjern alle &quot;%s&quot; fra din kurv';
$lang['da_DK']['OrderInformation_Editable.ss']['REMOVEONE'] = 'Fjern en af &quot;%s&quot; fra indkøbskurven';
$lang['da_DK']['OrderInformation_Editable.ss']['SHIPPING'] = 'Levering';
$lang['da_DK']['OrderInformation_Editable.ss']['SHIPPINGTO'] = 'til';
$lang['da_DK']['OrderInformation_Editable.ss']['SUBTOTAL'] = 'Subtotal';
$lang['da_DK']['OrderInformation_Editable.ss']['TABLESUMMARY'] = 'Indholdet af din indkøbsvogn vises i denne form og resumé af alle gebyrer i forbindelse med en ordre og et sammendrag af betalingsmulighederne.';
$lang['da_DK']['OrderInformation_Editable.ss']['TOTAL'] = 'Total';
$lang['da_DK']['OrderInformation_Editable.ss']['TOTALPRICE'] = 'Total pris';
$lang['da_DK']['OrderInformation_NoPricing.ss']['ADDRESS'] = 'Adresse';
$lang['da_DK']['OrderInformation_NoPricing.ss']['BUYERSADDRESS'] = 'Købers adresse';
$lang['da_DK']['OrderInformation_NoPricing.ss']['CITY'] = 'By';
$lang['da_DK']['OrderInformation_NoPricing.ss']['COUNTRY'] = 'Land';
$lang['da_DK']['OrderInformation_NoPricing.ss']['CUSTOMERDETAILS'] = 'Kundedetaljer';
$lang['da_DK']['OrderInformation_NoPricing.ss']['EMAIL'] = 'Email';
$lang['da_DK']['OrderInformation_NoPricing.ss']['MOBILE'] = 'Mobil';
$lang['da_DK']['OrderInformation_NoPricing.ss']['NAME'] = 'Navn';
$lang['da_DK']['OrderInformation_NoPricing.ss']['ORDERINFO'] = 'Information tilhørende ordre #';
$lang['da_DK']['OrderInformation_NoPricing.ss']['PHONE'] = 'Telefon';
$lang['da_DK']['OrderInformation_NoPricing.ss']['TABLESUMMARY'] = 'Indholdet af din indkøbsvogn vises i denne form og resumé af alle gebyrer i forbindelse med en ordre og et sammendrag af betalingsmulighederne.';
$lang['da_DK']['OrderInformation_PackingSlip.ss']['DESCRIPTION'] = 'Beskrivelse';
$lang['da_DK']['OrderInformation_PackingSlip.ss']['ITEM'] = 'Artikel';
$lang['da_DK']['OrderInformation_PackingSlip.ss']['ORDERDATE'] = 'Ordredato';
$lang['da_DK']['OrderInformation_PackingSlip.ss']['ORDERNUMBER'] = 'Ordre nummer';
$lang['da_DK']['OrderInformation_PackingSlip.ss']['QUANTITY'] = 'Antal';
$lang['da_DK']['OrderInformation_PackingSlip.ss']['TABLESUMMARY'] = 'Indholdet af din indkøbsvogn vises i denne form og resumé af alle gebyrer i forbindelse med en ordre og et sammendrag af betalingsmulighederne.';
$lang['da_DK']['OrderInformation_Print.ss']['PAGETITLE'] = 'Print  ordrer';
$lang['da_DK']['OrderReport']['CHANGESTATUS'] = 'Ændr ordrestatus';
$lang['da_DK']['OrderReport']['NOTEEMAIL'] = 'Note/Email';
$lang['da_DK']['OrderReport']['PRINTEACHORDER'] = 'Print alle viste ordrer';
$lang['da_DK']['OrderReport']['SENDNOTETO'] = 'Send denne note til %s (%s)';
$lang['da_DK']['Order_receiptEmail.ss']['HEADLINE'] = 'Ordremodtagelse';
$lang['da_DK']['Order_ReceiptEmail.ss']['HEADLINE'] = 'Ordrekvittering';
$lang['da_DK']['Order_receiptEmail.ss']['TITLE'] = 'Kvittering';
$lang['da_DK']['Order_ReceiptEmail.ss']['TITLE'] = 'Kvittering';
$lang['da_DK']['Order_statusEmail.ss']['HEADLINE'] = 'Status';
$lang['da_DK']['Order_statusEmail.ss']['STATUSCHANGE'] = 'Status ændret til "%s" for ordre #';
$lang['da_DK']['Order_statusEmail.ss']['TITLE'] = 'Status';
$lang['da_DK']['PaymentInformation.ss']['AMOUNT'] = 'Antal';
$lang['da_DK']['PaymentInformation.ss']['DATE'] = 'Dato';
$lang['da_DK']['PaymentInformation.ss']['DETAILS'] = 'Detaljer';
$lang['da_DK']['PaymentInformation.ss']['PAYMENTID'] = 'Betalingsid';
$lang['da_DK']['PaymentInformation.ss']['PAYMENTINFORMATION'] = 'Betalingsinformationer';
$lang['da_DK']['PaymentInformation.ss']['PAYMENTMETHOD'] = 'Metode';
$lang['da_DK']['PaymentInformation.ss']['PAYMENTSTATUS'] = 'Betalingsstatus';
$lang['da_DK']['PaymentInformation.ss']['TABLESUMMARY'] = 'Indholdet af din indkøbsvogn vises i denne form og resumé af alle gebyrer i forbindelse med en ordre og et sammendrag af betalingsmulighederne.';
$lang['da_DK']['Product.ss']['ADD'] = 'Tilføj &quot;%s&quot; til din indkøbsvogn';
$lang['da_DK']['Product.ss']['ADDLINK'] = 'Læg denne vare i indkøbsvognen';
$lang['da_DK']['Product.ss']['ADDONE'] = 'Tilføj en af &quot;%s&quot; fra din kurv';
$lang['da_DK']['Product.ss']['AUTHOR'] = 'Forfatter';
$lang['da_DK']['Product.ss']['GOTOCHECKOUT'] = 'Gå til Checkout';
$lang['da_DK']['Product.ss']['GOTOCHECKOUTLINK'] = '&raquo; gå til Checkout';
$lang['da_DK']['Product.ss']['IMAGE'] = '%s billede';
$lang['da_DK']['Product.ss']['ItemID'] = 'Produkt  #';
$lang['da_DK']['Product.ss']['NOIMAGE'] = 'Desværre, intet produktbillede af &quot;%s&quot;';
$lang['da_DK']['Product.ss']['QUANTITYCART'] = 'Antal i kurv';
$lang['da_DK']['Product.ss']['REMOVE'] = 'Fjern &quot;%s&quot; fra din kurv';
$lang['da_DK']['Product.ss']['REMOVEALL'] = 'Fjern en af &quot;%s&quot; fra din kurv';
$lang['da_DK']['Product.ss']['REMOVELINK'] = '&raquo; Fjern fra kurv';
$lang['da_DK']['Product.ss']['SIZE'] = 'Størrelse';
$lang['da_DK']['ProductGroup.ss']['VIEWGROUP'] = 'Vis produktgruppen;%s&quot;';
$lang['da_DK']['ProductGroupItem.ss']['ADD'] = 'Tilføj &quot;%s&quot; til indkøbskurven';
$lang['da_DK']['ProductGroupItem.ss']['ADDLINK'] = 'Tilføj til indkøbskurven';
$lang['da_DK']['ProductGroupItem.ss']['ADDONE'] = 'Tilføj en &quot;%s&quot; mere til indkøbskurven';
$lang['da_DK']['ProductGroupItem.ss']['AUTHOR'] = 'Forfatter';
$lang['da_DK']['ProductGroupItem.ss']['GOTOCHECKOUT'] = 'Gå til checkout nu';
$lang['da_DK']['ProductGroupItem.ss']['GOTOCHECKOUTLINK'] = '&raquo; Gå til checkout nu';
$lang['da_DK']['ProductGroupItem.ss']['IMAGE'] = '%s billede';
$lang['da_DK']['ProductGroupItem.ss']['NOIMAGE'] = 'Desværre, intet billede af &quot;%s&quot;';
$lang['da_DK']['ProductGroupItem.ss']['QUANTITY'] = 'Antal';
$lang['da_DK']['ProductGroupItem.ss']['QUANTITYCART'] = 'Antal i kurv';
$lang['da_DK']['ProductGroupItem.ss']['READMORE'] = 'Klik her for at læse mere om &quot;%s&quot;';
$lang['da_DK']['ProductGroupItem.ss']['READMORECONTENT'] = 'Klik for at læse mere &raquo';
$lang['da_DK']['ProductGroupItem.ss']['REMOVE'] = 'Fjern &quot;%s&quot; fra indkøbskurven';
$lang['da_DK']['ProductGroupItem.ss']['REMOVEALL'] = 'Fjern én af &quot;%s&quot; fra din kurv';
$lang['da_DK']['ProductGroupItem.ss']['REMOVELINK'] = '&raquo; Fjern fra indkøbskurven';
$lang['da_DK']['ProductGroupItem.ss']['REMOVEONE'] = 'Fjern en af &quot;%s&quot; fra indkøbskurven';
$lang['da_DK']['ProductMenu.ss']['GOTOPAGE'] = 'Gå til %s side';
$lang['da_DK']['SSReport']['ALLCLICKHERE'] = 'Klik her for at se alle produkter';
$lang['da_DK']['SSReport']['INVOICE'] = 'Faktura';
$lang['da_DK']['SSReport']['PRINT'] = 'Print';
$lang['da_DK']['SSReport']['VIEW'] = 'Vis';
$lang['da_DK']['ViewAllProducts.ss']['AUTHOR'] = 'Forfatter';
$lang['da_DK']['ViewAllProducts.ss']['CATEGORIES'] = 'Kategorier';
$lang['da_DK']['ViewAllProducts.ss']['IMAGE'] = '%s billede';
$lang['da_DK']['ViewAllProducts.ss']['LASTEDIT'] = 'Sidst ændret';
$lang['da_DK']['ViewAllProducts.ss']['LINK'] = 'Link';
$lang['da_DK']['ViewAllProducts.ss']['NOCONTENT'] = 'Intet indhold tilføjet.';
$lang['da_DK']['ViewAllProducts.ss']['NOIMAGE'] = 'Desværre, intet billedet for &quot;%s&quot;';
$lang['da_DK']['ViewAllProducts.ss']['NOSUBJECTS'] = 'Intet emne tilføjet.';
$lang['da_DK']['ViewAllProducts.ss']['PRICE'] = 'Pris';
$lang['da_DK']['ViewAllProducts.ss']['PRODUCTID'] = 'Produktid';
$lang['da_DK']['ViewAllProducts.ss']['WEIGHT'] = 'Vægt';

?>
