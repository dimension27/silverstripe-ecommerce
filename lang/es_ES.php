<?php

/**
 * Spanish (Spain) language pack
 * @package modules: ecommerce
 * @subpackage i18n
 */

i18n::include_locale_file('modules: ecommerce', 'en_US');

global $lang;

if(array_key_exists('es_ES', $lang) && is_array($lang['es_ES'])) {
	$lang['es_ES'] = array_merge($lang['en_US'], $lang['es_ES']);
} else {
	$lang['es_ES'] = $lang['en_US'];
}

$lang['es_ES']['AccountPage.ss']['COMPLETED'] = 'Ordenes Completadas';
$lang['es_ES']['AccountPage.ss']['HISTORY'] = 'Su Historial de Ordenes';
$lang['es_ES']['AccountPage.ss']['INCOMPLETE'] = 'Ordenes Incompletas';
$lang['es_ES']['AccountPage.ss']['Message'] = 'Porfavor ingrese sus datos para ingresar a la página de tu cuenta. <br/> Esta página solo es accesible después de tu primera compra, cuando asignes una contraseña';
$lang['es_ES']['AccountPage.ss']['NOCOMPLETED'] = 'No se encontraron ordenes completadas';
$lang['es_ES']['AccountPage.ss']['NOINCOMPLETE'] = 'No se encontraron ordenes incompletas';
$lang['es_ES']['AccountPage.ss']['ORDER'] = 'Orden Nro';
$lang['es_ES']['AccountPage.ss']['READMORE'] = 'Leer más sobre la Orden #%s';
$lang['es_ES']['AccountPage_order.ss']['ADDRESS'] = 'Dirección';
$lang['es_ES']['AccountPage_order.ss']['AMOUNT'] = 'Cantidad';
$lang['es_ES']['AccountPage_order.ss']['CITY'] = 'Ciudad';
$lang['es_ES']['AccountPage_order.ss']['COUNTRY'] = 'País';
$lang['es_ES']['AccountPage_order.ss']['DATE'] = 'Fecha';
$lang['es_ES']['AccountPage_order.ss']['DETAILS'] = 'Detalles';
$lang['es_ES']['AccountPage_order.ss']['NAME'] = 'Nombre';
$lang['es_ES']['AccountPage_order.ss']['PAYMENTMETHOD'] = 'Forma de pago';
$lang['es_ES']['AccountPage_order.ss']['PAYMENTSTATUS'] = 'Estado del Pago';
$lang['es_ES']['Cart.ss']['CheckoutClick'] = 'click aquí para chequearte';
$lang['es_ES']['Cart.ss']['CheckoutGoTo'] = 'chequearse';
$lang['es_ES']['Cart.ss']['HEADLINE'] = 'Mi Carro';
$lang['es_ES']['Cart.ss']['NOITEMS'] = 'No hay items en su carro';
$lang['es_ES']['Cart.ss']['PRICE'] = 'Precio';
$lang['es_ES']['Cart.ss']['READMORE'] = 'Clic aquí para leer más sobre &quot;%s&quot;';
$lang['es_ES']['Cart.ss']['Remove'] = 'Quitar &quot;%s&quot; de su carro';
$lang['es_ES']['Cart.ss']['REMOVE'] = 'Eliminar &quot;%s&quot; de tu pedido';
$lang['es_ES']['Cart.ss']['RemoveAlt'] = 'Remover';
$lang['es_ES']['Cart.ss']['SHIPPING'] = 'Envio';
$lang['es_ES']['Cart.ss']['SUBTOTAL'] = 'Subtotal';
$lang['es_ES']['Cart.ss']['TOTAL'] = 'Total';
$lang['es_ES']['CheckoutPage']['NOPAGE'] = 'No existe una página para chequearse en este sitio, porfavor crear una!';
$lang['es_ES']['CheckoutPage.ss']['CHECKOUT'] = 'chequearse';
$lang['es_ES']['CheckoutPage.ss']['ORDERSTEP'] = 'Orden Status';
$lang['es_ES']['CheckoutPage.ss']['PROCESS'] = 'Proceso';
$lang['es_ES']['CheckoutPage_OrderIncomplete.ss']['BACKTOCHECKOUT'] = 'click aquí para volver a la página de chequeo';
$lang['es_ES']['CheckoutPage_OrderIncomplete.ss']['CHECKOUT'] = 'chequearse';
$lang['es_ES']['CheckoutPage_OrderIncomplete.ss']['CHEQUEINSTRUCTIONS'] = 'Si ha ordenado por Cheque recibirá un correo con instrucciones.';
$lang['es_ES']['CheckoutPage_OrderIncomplete.ss']['DETAILSSUBMITTED'] = 'Estos son los detalles que ha enviado';
$lang['es_ES']['CheckoutPage_OrderIncomplete.ss']['INCOMPLETE'] = 'Orden Incompleta';
$lang['es_ES']['CheckoutPage_OrderIncomplete.ss']['ORDERSTEP'] = 'Orden Status';
$lang['es_ES']['CheckoutPage_OrderIncomplete.ss']['PROCESS'] = 'Proceso';
$lang['es_ES']['CheckoutPage_OrderSuccessful.ss']['BACKTOCHECKOUT'] = 'click aquí para volver a la página de chequeo';
$lang['es_ES']['CheckoutPage_OrderSuccessful.ss']['CHECKOUT'] = 'chequearse';
$lang['es_ES']['CheckoutPage_OrderSuccessful.ss']['EMAILDETAILS'] = 'Una copia de esto ha sido enviado a su email confirmando los detalles de la orden.';
$lang['es_ES']['CheckoutPage_OrderSuccessful.ss']['ORDERSTEP'] = 'Orden Status';
$lang['es_ES']['CheckoutPage_OrderSuccessful.ss']['PROCESS'] = 'Proceso';
$lang['es_ES']['CheckoutPage_OrderSuccessful.ss']['SUCCESSFULl'] = 'Orden exitosa';
$lang['es_ES']['ChequePayment']['MESSAGE'] = 'Pago aceptado vía Cheque. Tenga en cuenta: los productos no serán enviados hasta que el pago sea recibido.';
$lang['es_ES']['DataReport']['EXPORTCSV'] = 'Exportar a CSV';
$lang['es_ES']['FindOrderReport']['DATERANGE'] = 'Rango de Fechas';
$lang['es_ES']['MemberForm']['DETAILSSAVED'] = 'Su información ha sido guardada';
$lang['es_ES']['MemberForm']['LOGGEDIN'] = 'Actualmente ingresado como';
$lang['es_ES']['OrderInformation.ss']['ADDRESS'] = 'Dirección';
$lang['es_ES']['OrderInformation.ss']['AMOUNT'] = 'Importe';
$lang['es_ES']['OrderInformation.ss']['BUYERSADDRESS'] = 'Dirección del comprador';
$lang['es_ES']['OrderInformation.ss']['CITY'] = 'Ciudad';
$lang['es_ES']['OrderInformation.ss']['COUNTRY'] = 'País';
$lang['es_ES']['OrderInformation.ss']['CUSTOMERDETAILS'] = 'Información del cliente';
$lang['es_ES']['OrderInformation.ss']['DATE'] = 'Fecha';
$lang['es_ES']['OrderInformation.ss']['DETAILS'] = 'Detalles';
$lang['es_ES']['OrderInformation.ss']['EMAIL'] = 'Email';
$lang['es_ES']['OrderInformation.ss']['MOBILE'] = 'Movil';
$lang['es_ES']['OrderInformation.ss']['NAME'] = 'Nombre';
$lang['es_ES']['OrderInformation.ss']['ORDERSUMMARY'] = 'Resumen de la orden';
$lang['es_ES']['OrderInformation.ss']['PAYMENTID'] = 'Nro de Pago';
$lang['es_ES']['OrderInformation.ss']['PAYMENTINFORMATION'] = 'Información de pago';
$lang['es_ES']['OrderInformation.ss']['PAYMENTMETHOD'] = 'Método';
$lang['es_ES']['OrderInformation.ss']['PAYMENTSTATUS'] = 'Estado del pago';
$lang['es_ES']['OrderInformation.ss']['PHONE'] = 'Teléfono';
$lang['es_ES']['OrderInformation.ss']['PRICE'] = 'Precio';
$lang['es_ES']['OrderInformation.ss']['PRODUCT'] = 'Producto';
$lang['es_ES']['OrderInformation.ss']['QUANTITY'] = 'Cantidad';
$lang['es_ES']['OrderInformation.ss']['SHIPPING'] = 'Envio';
$lang['es_ES']['OrderInformation.ss']['SHIPPINGTO'] = 'a';
$lang['es_ES']['OrderInformation.ss']['SUBTOTAL'] = 'Sub-Total';
$lang['es_ES']['OrderInformation.ss']['TABLESUMMARY'] = 'El contenido de tu carro aparece en este formulario con un resumen de todos los costos asociados y con una lista de formas de pago';
$lang['es_ES']['OrderInformation.ss']['TOTAL'] = 'Total';
$lang['es_ES']['OrderInformation.ss']['TOTALl'] = 'Total';
$lang['es_ES']['OrderInformation.ss']['TOTALOUTSTANDING'] = 'Total pendiente';
$lang['es_ES']['OrderInformation.ss']['TOTALPRICE'] = 'Precio Total';
$lang['es_ES']['OrderInformation_Editable.ss']['ADDONE'] = 'Agregar una o más &quot;%s&quot; a su carro';
$lang['es_ES']['OrderInformation_Editable.ss']['NOITEMS'] = '<strong>No</strong> hay items en su carro.';
$lang['es_ES']['OrderInformation_Editable.ss']['ORDERINFORMATION'] = 'Información de la orden';
$lang['es_ES']['OrderInformation_Editable.ss']['PRICE'] = 'Precio';
$lang['es_ES']['OrderInformation_Editable.ss']['PRODUCT'] = 'Producto';
$lang['es_ES']['OrderInformation_Editable.ss']['QUANTITY'] = 'Cantidad';
$lang['es_ES']['OrderInformation_Editable.ss']['READMORE'] = 'Clic aquí para leer más sobre &quot;%s&quot;';
$lang['es_ES']['OrderInformation_Editable.ss']['REMOVE'] = 'Eliminar &quot;%s&quot; de tu pedido';
$lang['es_ES']['OrderInformation_Editable.ss']['REMOVEONE'] = 'Quitar uno de &quot;%s&quot; de su carro';
$lang['es_ES']['OrderInformation_Editable.ss']['SHIPPING'] = 'Envio';
$lang['es_ES']['OrderInformation_Editable.ss']['SHIPPINGTO'] = 'a';
$lang['es_ES']['OrderInformation_Editable.ss']['SUBTOTAL'] = 'Sub-total';
$lang['es_ES']['OrderInformation_Editable.ss']['TABLESUMMARY'] = 'El contenido de tu carro aparece en este formulario con un resumen de todos los costos asociados y con una lista de formas de pago';
$lang['es_ES']['OrderInformation_Editable.ss']['TOTAL'] = 'Total';
$lang['es_ES']['OrderInformation_Editable.ss']['TOTALPRICE'] = 'Precio Total';
$lang['es_ES']['OrderInformation_NoPricing.ss']['ADDRESS'] = 'Dirección';
$lang['es_ES']['OrderInformation_NoPricing.ss']['BUYERSADDRESS'] = 'Dirección del comprador';
$lang['es_ES']['OrderInformation_NoPricing.ss']['CITY'] = 'Ciudad';
$lang['es_ES']['OrderInformation_NoPricing.ss']['COUNTRY'] = 'País';
$lang['es_ES']['OrderInformation_NoPricing.ss']['CUSTOMERDETAILS'] = 'Información del Cliente';
$lang['es_ES']['OrderInformation_NoPricing.ss']['EMAIL'] = 'Email';
$lang['es_ES']['OrderInformation_NoPricing.ss']['MOBILE'] = 'Movil';
$lang['es_ES']['OrderInformation_NoPricing.ss']['NAME'] = 'Nombre';
$lang['es_ES']['OrderInformation_NoPricing.ss']['ORDERINFO'] = 'Información de la Orden Nro';
$lang['es_ES']['OrderInformation_NoPricing.ss']['PHONE'] = 'Teléfono';
$lang['es_ES']['OrderInformation_NoPricing.ss']['TABLESUMMARY'] = 'El contenido de tu carro aparece en este formulario con un resumen de todos los costos asociados y con una lista de formas de pago';
$lang['es_ES']['OrderInformation_PackingSlip.ss']['DESCRIPTION'] = 'Descripción';
$lang['es_ES']['OrderInformation_PackingSlip.ss']['ITEM'] = 'Item';
$lang['es_ES']['OrderInformation_PackingSlip.ss']['ORDERDATE'] = 'Fecha de la Orden';
$lang['es_ES']['OrderInformation_PackingSlip.ss']['ORDERNUMBER'] = 'Número de la Orden';
$lang['es_ES']['OrderInformation_PackingSlip.ss']['PAGETITLE'] = 'Comprar ordenes impresas';
$lang['es_ES']['OrderInformation_PackingSlip.ss']['QUANTITY'] = 'Cantidad';
$lang['es_ES']['OrderInformation_PackingSlip.ss']['TABLESUMMARY'] = 'El contenido de tu carro aparece en este formulario con un resumen de todos los costos asociados y con una lista de formas de pago';
$lang['es_ES']['OrderInformation_Print.ss']['PAGETITLE'] = 'Imprimir Ordenes';
$lang['es_ES']['OrderReport']['CHANGESTATUS'] = 'Cambiar el estado de la orden';
$lang['es_ES']['OrderReport']['NOTEEMAIL'] = 'Nota/Email';
$lang['es_ES']['OrderReport']['PRINTEACHORDER'] = 'Imprimir todas las ordenes mostradas';
$lang['es_ES']['OrderReport']['SENDNOTETO'] = 'Enviar esta nota a  %s (%s)';
$lang['es_ES']['Order_Content.ss']['NOITEMS'] = '<strong>No</strong> hay productos en tu pedido.';
$lang['es_ES']['Order_Content.ss']['PRICE'] = 'Precio';
$lang['es_ES']['Order_Content.ss']['PRODUCT'] = 'Producto';
$lang['es_ES']['Order_Content.ss']['QUANTITY'] = 'Cantidad';
$lang['es_ES']['Order_Content.ss']['READMORE'] = 'Haz clic aquí para leer más de &quot;%s&quot;';
$lang['es_ES']['Order_Content.ss']['SUBTOTAL'] = 'Subtotal';
$lang['es_ES']['Order_Content.ss']['TOTAL'] = 'Total';
$lang['es_ES']['Order_Content.ss']['TOTALPRICE'] = 'Precio Total';
$lang['es_ES']['Order_Member.ss']['ADDRESS'] = 'Dirección';
$lang['es_ES']['Order_Member.ss']['CITY'] = 'Ciudad';
$lang['es_ES']['Order_Member.ss']['COUNTRY'] = 'País';
$lang['es_ES']['Order_Member.ss']['EMAIL'] = 'Correo electrónico';
$lang['es_ES']['Order_Member.ss']['MOBILE'] = 'Móvil';
$lang['es_ES']['Order_Member.ss']['NAME'] = 'Nombre';
$lang['es_ES']['Order_Member.ss']['PHONE'] = 'Teléfono';
$lang['es_ES']['Order_receiptEmail.ss']['HEADLINE'] = 'Recibo de la Orden de Compra';
$lang['es_ES']['Order_receiptEmail.ss']['TITLE'] = 'Recibo de la Compra';
$lang['es_ES']['Order_ReceiptEmail.ss']['TITLE'] = 'Recibo de compra';
$lang['es_ES']['Order_statusEmail.ss']['HEADLINE'] = 'El estado de la compra ha cambiado';
$lang['es_ES']['Order_statusEmail.ss']['STATUSCHANGE'] = 'El estado de la compra ha cambiado a "%s" para la Orden #';
$lang['es_ES']['Order_statusEmail.ss']['TITLE'] = 'El estado de la compra ha cambiado';
$lang['es_ES']['PaymentInformation.ss']['AMOUNT'] = 'Importe';
$lang['es_ES']['PaymentInformation.ss']['DATE'] = 'Fecha';
$lang['es_ES']['PaymentInformation.ss']['DETAILS'] = 'Detalles';
$lang['es_ES']['PaymentInformation.ss']['PAYMENTID'] = 'Número de Pago';
$lang['es_ES']['PaymentInformation.ss']['PAYMENTINFORMATION'] = 'Información de Pago';
$lang['es_ES']['PaymentInformation.ss']['PAYMENTMETHOD'] = 'Método';
$lang['es_ES']['PaymentInformation.ss']['PAYMENTSTATUS'] = 'Estado del Pago';
$lang['es_ES']['PaymentInformation.ss']['TABLESUMMARY'] = 'El contenido de tu carro aparece en este formulario con un resumen de todos los costos asociados y con una lista de formas de pago';
$lang['es_ES']['Product.ss']['ADD'] = 'Agregar &quot;%s&quot; a tu carro';
$lang['es_ES']['Product.ss']['ADDLINK'] = 'Agregar este ítem a tu carro';
$lang['es_ES']['Product.ss']['ADDONE'] = 'agrega uno más de &quot;%s&quot; de tu carro';
$lang['es_ES']['Product.ss']['AUTHOR'] = 'Autor';
$lang['es_ES']['Product.ss']['FEATURED'] = 'este es un producto destacado';
$lang['es_ES']['Product.ss']['GOTOCHECKOUT'] = 'chequearse ahora';
$lang['es_ES']['Product.ss']['GOTOCHECKOUTLINK'] = '&raquo; ir a chequearse';
$lang['es_ES']['Product.ss']['IMAGE'] = 'Imagen';
$lang['es_ES']['Product.ss']['ItemID'] = 'Item Nro';
$lang['es_ES']['Product.ss']['NOIMAGE'] = 'Disulpe, no hay imagen del producto para &quot;%s&quot;';
$lang['es_ES']['Product.ss']['QUANTITYCART'] = 'Cantidad en el carro';
$lang['es_ES']['Product.ss']['REMOVE'] = 'remover uno de &quot;%s&quot; de tu carro';
$lang['es_ES']['Product.ss']['REMOVEALL'] = 'remover uno de &quot;%s&quot; de tu carro';
$lang['es_ES']['Product.ss']['REMOVELINK'] = '&raquo; Borrar de tu carro';
$lang['es_ES']['Product.ss']['SIZE'] = 'Tamaño';
$lang['es_ES']['ProductGroup.ss']['FEATURED'] = 'Productos destacados';
$lang['es_ES']['ProductGroup.ss']['OTHER'] = 'Otros Productos';
$lang['es_ES']['ProductGroup.ss']['VIEWGROUP'] = 'Ver el grupo de productos &quot;%s&quot;';
$lang['es_ES']['ProductGroupItem.ss']['ADD'] = 'Agregar &quot;%s&quot; a su carro';
$lang['es_ES']['ProductGroupItem.ss']['ADDLINK'] = 'Agregar este item al carro';
$lang['es_ES']['ProductGroupItem.ss']['ADDONE'] = 'Agregar uno más de &quot;%s&quot; a su carro';
$lang['es_ES']['ProductGroupItem.ss']['AUTHOR'] = 'Autor';
$lang['es_ES']['ProductGroupItem.ss']['IMAGE'] = '%s imagen';
$lang['es_ES']['ProductGroupItem.ss']['NOIMAGE'] = 'Disculpas, no hay imagen para &quot;%s&quot;';
$lang['es_ES']['ProductGroupItem.ss']['QUANTITY'] = 'Cantidad';
$lang['es_ES']['ProductGroupItem.ss']['READMORE'] = 'Click aquí para leer más sobre &quot;%s&quot;';
$lang['es_ES']['ProductGroupItem.ss']['READMORECONTENT'] = 'Clic para leer más &raquo;';
$lang['es_ES']['ProductGroupItem.ss']['REMOVE'] = 'Quitar  &quot;%s&quot; desde su carro';
$lang['es_ES']['ProductGroupItem.ss']['REMOVELINK'] = '&raquo; Quitar del carro';
$lang['es_ES']['ProductGroupItem.ss']['REMOVEONE'] = 'Quitar uno de &quot;%s&quot; de su carro';
$lang['es_ES']['ProductMenu.ss']['GOTOPAGE'] = 'Ir a %s página';
$lang['es_ES']['SSReport']['ALLCLICKHERE'] = 'Click aquí para ver todos los productos';
$lang['es_ES']['SSReport']['INVOICE'] = 'Factura';
$lang['es_ES']['SSReport']['PRINT'] = 'Imprimir';
$lang['es_ES']['SSReport']['VIEW'] = 'Ver';
$lang['es_ES']['ViewAllProducts.ss']['AUTHOR'] = 'Autor';
$lang['es_ES']['ViewAllProducts.ss']['CATEGORIES'] = 'Categorías';
$lang['es_ES']['ViewAllProducts.ss']['IMAGE'] = '%s imagen';
$lang['es_ES']['ViewAllProducts.ss']['LASTEDIT'] = 'Último editado';
$lang['es_ES']['ViewAllProducts.ss']['LINK'] = 'Link';
$lang['es_ES']['ViewAllProducts.ss']['NOCONTENT'] = 'No hay contenido asignado.';
$lang['es_ES']['ViewAllProducts.ss']['NOIMAGE'] = 'Disculpe, no hay imagen para &quot;%s&quot;';
$lang['es_ES']['ViewAllProducts.ss']['NOSUBJECTS'] = 'No hay asunto';
$lang['es_ES']['ViewAllProducts.ss']['PRICE'] = 'Precio';
$lang['es_ES']['ViewAllProducts.ss']['PRODUCTID'] = 'ID del Producto';
$lang['es_ES']['ViewAllProducts.ss']['WEIGHT'] = 'Peso';

?>
