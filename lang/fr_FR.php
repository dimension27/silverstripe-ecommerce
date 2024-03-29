<?php

/**
 * French (France) language pack
 * @package modules: ecommerce
 * @subpackage i18n
 */

i18n::include_locale_file('modules: ecommerce', 'en_US');

global $lang;

if(array_key_exists('fr_FR', $lang) && is_array($lang['fr_FR'])) {
	$lang['fr_FR'] = array_merge($lang['en_US'], $lang['fr_FR']);
} else {
	$lang['fr_FR'] = $lang['en_US'];
}

$lang['fr_FR']['AccountPage']['Message'] = 'Vous devez avoir un login avant d\'avoir accès à votre page de profile. Si vous n\'êtes pas enregistré, vous ne pourrez avoir accès qu\'à partir du moment ou vous ferez votre première commande, sinon veuillez écrire vos renseignements ci-dessous.';
$lang['fr_FR']['AccountPage']['NOPAGE'] = 'Aucun compte sur ce site - créez-en un s\'il vous plaît!';
$lang['fr_FR']['AccountPage.ss']['COMPLETED'] = 'Commandes terminées';
$lang['fr_FR']['AccountPage.ss']['HISTORY'] = 'Historique de vos commandes';
$lang['fr_FR']['AccountPage.ss']['INCOMPLETE'] = 'Commandes incomplètes';
$lang['fr_FR']['AccountPage.ss']['Message'] = 'Veuillez entrer vos coordonnées pour vous connecter au compte.<br />Cette page est uniquement accessible après votre première commande, lorsque qu\' un mot de passe vous êtes affecté.';
$lang['fr_FR']['AccountPage.ss']['NOCOMPLETED'] = 'Aucune commande n\'a été trouvée.';
$lang['fr_FR']['AccountPage.ss']['NOINCOMPLETE'] = 'Aucune commande incomplète n\'a été trouvée';
$lang['fr_FR']['AccountPage.ss']['ORDER'] = 'Commande #';
$lang['fr_FR']['AccountPage.ss']['READMORE'] = 'En savoir plus sur la commande #%s';
$lang['fr_FR']['AccountPage_order.ss']['ADDRESS'] = 'Adresse';
$lang['fr_FR']['AccountPage_order.ss']['AMOUNT'] = 'Somme';
$lang['fr_FR']['AccountPage_order.ss']['BACKTOCHECKOUT'] = 'Cliquer ici pour vous rendre à la page de la caisse';
$lang['fr_FR']['AccountPage_order.ss']['CITY'] = 'Ville';
$lang['fr_FR']['AccountPage_order.ss']['COUNTRY'] = 'Pays';
$lang['fr_FR']['AccountPage_order.ss']['DATE'] = 'Date';
$lang['fr_FR']['AccountPage_order.ss']['DETAILS'] = 'Détails';
$lang['fr_FR']['AccountPage_order.ss']['EMAILDETAILS'] = 'Une copie confirmant les détails a été envoyé  vers votre adresse email.';
$lang['fr_FR']['AccountPage_order.ss']['NAME'] = 'Nom';
$lang['fr_FR']['AccountPage_order.ss']['PAYMENTMETHOD'] = 'Methode';
$lang['fr_FR']['AccountPage_order.ss']['PAYMENTSTATUS'] = 'Statut du payement';
$lang['fr_FR']['Cart.ss']['ADDONE'] = 'Ajouter un ou plusieurs &quot;%s&quot; à votre panier';
$lang['fr_FR']['Cart.ss']['CheckoutClick'] = 'Cliquez ici pour passer au paiement';
$lang['fr_FR']['Cart.ss']['CheckoutGoTo'] = 'Passer au paiement';
$lang['fr_FR']['Cart.ss']['HEADLINE'] = 'Mon Panier';
$lang['fr_FR']['Cart.ss']['NOITEMS'] = 'Il ya aucun article dans votre panier';
$lang['fr_FR']['Cart.ss']['PRICE'] = 'Prix';
$lang['fr_FR']['Cart.ss']['READMORE'] = 'Cliquez ici pour en savoir plus sur &quot;%s&quot;';
$lang['fr_FR']['Cart.ss']['Remove'] = 'Enlever &quot;%s&quot; de votre panier';
$lang['fr_FR']['Cart.ss']['REMOVE'] = 'Enlève &quot;%s&quot; de votre commande';
$lang['fr_FR']['Cart.ss']['REMOVEALL'] = 'Supprimer tous les &quot;%s&quot; de votre panier';
$lang['fr_FR']['Cart.ss']['RemoveAlt'] = 'Enlever';
$lang['fr_FR']['Cart.ss']['REMOVEONE'] = 'Supprimer un des  &quot;%s&quot; de votre panier';
$lang['fr_FR']['Cart.ss']['SHIPPING'] = 'Expédition';
$lang['fr_FR']['Cart.ss']['SUBTOTAL'] = 'Sous-Total';
$lang['fr_FR']['Cart.ss']['TOTAL'] = 'Total';
$lang['fr_FR']['CheckoutPage']['NOPAGE'] = 'Pas de paiement sur la page de ce site, veuillez en créer un!';
$lang['fr_FR']['CheckoutPage.ss']['CHECKOUT'] = 'Commander';
$lang['fr_FR']['CheckoutPage.ss']['ORDERSTEP'] = 'Etat de la commande';
$lang['fr_FR']['CheckoutPage.ss']['PROCESS'] = 'Processus';
$lang['fr_FR']['CheckoutPage_OrderIncomplete.ss']['BACKTOCHECKOUT'] = 'Cliquez ici pour retourner au paiement';
$lang['fr_FR']['CheckoutPage_OrderIncomplete.ss']['CHECKOUT'] = 'Commande';
$lang['fr_FR']['CheckoutPage_OrderIncomplete.ss']['CHEQUEINSTRUCTIONS'] = 'Si vous avez commandé avec le paiement par chèque, vous recevrez un email avec des instructions.';
$lang['fr_FR']['CheckoutPage_OrderIncomplete.ss']['DETAILSSUBMITTED'] = 'Voici les détails que vous nous avez soumis';
$lang['fr_FR']['CheckoutPage_OrderIncomplete.ss']['INCOMPLETE'] = 'Commande Incomplète';
$lang['fr_FR']['CheckoutPage_OrderIncomplete.ss']['ORDERSTEP'] = 'Etat de la commande';
$lang['fr_FR']['CheckoutPage_OrderIncomplete.ss']['PROCESS'] = 'Processus';
$lang['fr_FR']['CheckoutPage_OrderSuccessful.ss']['BACKTOCHECKOUT'] = 'Cliquez ici pour retourner au paiement';
$lang['fr_FR']['CheckoutPage_OrderSuccessful.ss']['CHECKOUT'] = 'Commander';
$lang['fr_FR']['CheckoutPage_OrderSuccessful.ss']['EMAILDETAILS'] = 'Une copie vous a a été envoyée à votre adresse électronique confirmant les détails de votre commande.';
$lang['fr_FR']['CheckoutPage_OrderSuccessful.ss']['ORDERSTEP'] = 'État de la commande';
$lang['fr_FR']['CheckoutPage_OrderSuccessful.ss']['PROCESS'] = 'Processus';
$lang['fr_FR']['CheckoutPage_OrderSuccessful.ss']['SUCCESSFULl'] = 'Commande passée avec succès';
$lang['fr_FR']['ChequePayment']['MESSAGE'] = 'Paiement par Chèque. Veuillez prendre note que les produits ne seront expédiés qu\'après réception de votre paiement.';
$lang['fr_FR']['DataReport']['EXPORTCSV'] = 'Exporte en CSV';
$lang['fr_FR']['FindOrderReport']['DATERANGE'] = 'Période';
$lang['fr_FR']['MemberForm']['DETAILSSAVED'] = 'Vos coordonnées ont été enregistrées';
$lang['fr_FR']['MemberForm']['LOGGEDIN'] = 'Vous êtes actuellement connecté en tant que';
$lang['fr_FR']['Order']['INCOMPLETE'] = 'Commande incomplète';
$lang['fr_FR']['Order']['SUCCESSFULL'] = 'Commande réussie';
$lang['fr_FR']['OrderInformation.ss']['ADDRESS'] = 'Adresse';
$lang['fr_FR']['OrderInformation.ss']['AMOUNT'] = 'Quantité';
$lang['fr_FR']['OrderInformation.ss']['BUYERSADDRESS'] = 'Adresse de l\'acheteur';
$lang['fr_FR']['OrderInformation.ss']['CITY'] = 'Ville';
$lang['fr_FR']['OrderInformation.ss']['COUNTRY'] = 'Pays';
$lang['fr_FR']['OrderInformation.ss']['CUSTOMERDETAILS'] = 'Détails du Client';
$lang['fr_FR']['OrderInformation.ss']['DATE'] = 'Date';
$lang['fr_FR']['OrderInformation.ss']['DETAILS'] = 'Détails';
$lang['fr_FR']['OrderInformation.ss']['EMAIL'] = 'Courrier électronique';
$lang['fr_FR']['OrderInformation.ss']['MOBILE'] = 'GSM';
$lang['fr_FR']['OrderInformation.ss']['NAME'] = 'Nom';
$lang['fr_FR']['OrderInformation.ss']['ORDERSUMMARY'] = 'Récapitulatif des commandes';
$lang['fr_FR']['OrderInformation.ss']['PAYMENTID'] = 'ID du Paiement';
$lang['fr_FR']['OrderInformation.ss']['PAYMENTINFORMATION'] = 'Information de Paiement';
$lang['fr_FR']['OrderInformation.ss']['PAYMENTMETHOD'] = 'Méthode';
$lang['fr_FR']['OrderInformation.ss']['PAYMENTSTATUS'] = 'Statut du Paiement';
$lang['fr_FR']['OrderInformation.ss']['PHONE'] = 'Téléphone';
$lang['fr_FR']['OrderInformation.ss']['PRICE'] = 'Prix';
$lang['fr_FR']['OrderInformation.ss']['PRODUCT'] = 'Produit';
$lang['fr_FR']['OrderInformation.ss']['QUANTITY'] = 'Quantité';
$lang['fr_FR']['OrderInformation.ss']['READMORE'] = 'Cliquez ici pour lire plus de &quot;%s&quot;';
$lang['fr_FR']['OrderInformation.ss']['SHIPPING'] = 'Expédition';
$lang['fr_FR']['OrderInformation.ss']['SHIPPINGDETAILS'] = 'Détails des achats';
$lang['fr_FR']['OrderInformation.ss']['SHIPPINGTO'] = 'à';
$lang['fr_FR']['OrderInformation.ss']['SUBTOTAL'] = 'Sous-Total';
$lang['fr_FR']['OrderInformation.ss']['TABLESUMMARY'] = 'Le contenu de votre panier est affiché dans ce formulaire ainsi que le résumé de tous les frais associés à une commande, et un aperçu des options de paiements.';
$lang['fr_FR']['OrderInformation.ss']['TOTAL'] = 'Total';
$lang['fr_FR']['OrderInformation.ss']['TOTALl'] = 'Total';
$lang['fr_FR']['OrderInformation.ss']['TOTALOUTSTANDING'] = 'Total encours';
$lang['fr_FR']['OrderInformation.ss']['TOTALPRICE'] = 'Prix Total';
$lang['fr_FR']['OrderInformation_Editable.ss']['ADDONE'] = 'Ajoutez un &quot;%s&quot; à votre panier';
$lang['fr_FR']['OrderInformation_Editable.ss']['NOITEMS'] = 'Il n\'y a <strong>pas</strong> d\'article dans votre panier.';
$lang['fr_FR']['OrderInformation_Editable.ss']['ORDERINFORMATION'] = 'Information Pour commander';
$lang['fr_FR']['OrderInformation_Editable.ss']['PRICE'] = 'Prix';
$lang['fr_FR']['OrderInformation_Editable.ss']['PRODUCT'] = 'Produit';
$lang['fr_FR']['OrderInformation_Editable.ss']['QUANTITY'] = 'Quantité';
$lang['fr_FR']['OrderInformation_Editable.ss']['READMORE'] = 'Cliquez ici pour lire la suite sur &quot;%s&quot;';
$lang['fr_FR']['OrderInformation_Editable.ss']['REMOVE'] = 'Enlève &quot;%s&quot; de votre commande';
$lang['fr_FR']['OrderInformation_Editable.ss']['REMOVEALL'] = 'Supprimer tous les &quot;%s&quot; du panier';
$lang['fr_FR']['OrderInformation_Editable.ss']['REMOVEONE'] = 'Supprimez un &quot;%s&quot; de votre panier';
$lang['fr_FR']['OrderInformation_Editable.ss']['SHIPPING'] = 'Expédition';
$lang['fr_FR']['OrderInformation_Editable.ss']['SHIPPINGTO'] = 'à';
$lang['fr_FR']['OrderInformation_Editable.ss']['SUBTOTAL'] = 'Sous-Total';
$lang['fr_FR']['OrderInformation_Editable.ss']['TABLESUMMARY'] = 'Le contenu de votre panier est affiché dans ce formulaire, ainsi qu\'un résumé de tous les frais associés à cet achat et un aperçu des options de paiements.';
$lang['fr_FR']['OrderInformation_Editable.ss']['TOTAL'] = 'Total';
$lang['fr_FR']['OrderInformation_Editable.ss']['TOTALPRICE'] = 'Prix Total';
$lang['fr_FR']['OrderInformation_NoPricing.ss']['ADDRESS'] = 'Adresse';
$lang['fr_FR']['OrderInformation_NoPricing.ss']['BUYERSADDRESS'] = 'Adresse de l\'acheteur';
$lang['fr_FR']['OrderInformation_NoPricing.ss']['CITY'] = 'Ville';
$lang['fr_FR']['OrderInformation_NoPricing.ss']['COUNTRY'] = 'Pays';
$lang['fr_FR']['OrderInformation_NoPricing.ss']['CUSTOMERDETAILS'] = 'Détails du Client';
$lang['fr_FR']['OrderInformation_NoPricing.ss']['EMAIL'] = 'Courrier électronique';
$lang['fr_FR']['OrderInformation_NoPricing.ss']['MOBILE'] = 'GSM';
$lang['fr_FR']['OrderInformation_NoPricing.ss']['NAME'] = 'Nom';
$lang['fr_FR']['OrderInformation_NoPricing.ss']['ORDERINFO'] = 'Information pour Commander #';
$lang['fr_FR']['OrderInformation_NoPricing.ss']['PHONE'] = 'Téléphone';
$lang['fr_FR']['OrderInformation_NoPricing.ss']['TABLESUMMARY'] = 'Le contenu de votre panier est affiché dans ce formulaire, ainsi qu\'un résumé de tous les frais associés à cet achat et un aperçu des options de paiements.';
$lang['fr_FR']['OrderInformation_PackingSlip.ss']['DESCRIPTION'] = 'Description';
$lang['fr_FR']['OrderInformation_PackingSlip.ss']['ITEM'] = 'Article';
$lang['fr_FR']['OrderInformation_PackingSlip.ss']['ORDERDATE'] = 'Date de la commande';
$lang['fr_FR']['OrderInformation_PackingSlip.ss']['ORDERNUMBER'] = 'Numéro de Commande';
$lang['fr_FR']['OrderInformation_PackingSlip.ss']['PAGETITLE'] = 'Imprimer la commande';
$lang['fr_FR']['OrderInformation_PackingSlip.ss']['QUANTITY'] = 'Quantité';
$lang['fr_FR']['OrderInformation_PackingSlip.ss']['TABLESUMMARY'] = 'Le contenu de votre panier est affiché dans ce formulaire, ainsi qu\'un résumé de tous les frais associés à cet achat et un aperçu des options de paiements.';
$lang['fr_FR']['OrderInformation_Print.ss']['PAGETITLE'] = 'Imprimez votre commande';
$lang['fr_FR']['OrderReport']['CHANGESTATUS'] = 'Changement d\'état des commandes';
$lang['fr_FR']['OrderReport']['NOTEEMAIL'] = 'Note/Courrier électronique';
$lang['fr_FR']['OrderReport']['PRINTEACHORDER'] = 'Imprimer toutes les commandes affichées';
$lang['fr_FR']['OrderReport']['SENDNOTETO'] = 'Envoyer cette note à %s (%s)';
$lang['fr_FR']['Order_Content.ss']['NOITEMS'] = 'Il n\'y a aucun article dans votre ordre.';
$lang['fr_FR']['Order_Content.ss']['PRICE'] = 'Prix';
$lang['fr_FR']['Order_Content.ss']['PRODUCT'] = 'Produit';
$lang['fr_FR']['Order_Content.ss']['QUANTITY'] = 'Quantité';
$lang['fr_FR']['Order_Content.ss']['READMORE'] = 'Clique ici pour lire plus sur &quot;%s&quot;';
$lang['fr_FR']['Order_Content.ss']['SUBTOTAL'] = 'Sous-total';
$lang['fr_FR']['Order_Content.ss']['TOTAL'] = 'Total';
$lang['fr_FR']['Order_Content.ss']['TOTALPRICE'] = 'Prix Total';
$lang['fr_FR']['Order_Member.ss']['ADDRESS'] = 'Adresse';
$lang['fr_FR']['Order_Member.ss']['CITY'] = 'Ville';
$lang['fr_FR']['Order_Member.ss']['COUNTRY'] = 'Pays';
$lang['fr_FR']['Order_Member.ss']['EMAIL'] = 'Email';
$lang['fr_FR']['Order_Member.ss']['MOBILE'] = 'Mobile';
$lang['fr_FR']['Order_Member.ss']['NAME'] = 'Nom';
$lang['fr_FR']['Order_Member.ss']['PHONE'] = 'Téléphone';
$lang['fr_FR']['Order_receiptEmail.ss']['HEADLINE'] = 'Reçu de paiement';
$lang['fr_FR']['Order_ReceiptEmail.ss']['HEADLINE'] = 'Reçu pour votre commande sur ce magasin';
$lang['fr_FR']['Order_receiptEmail.ss']['TITLE'] = 'Reçu';
$lang['fr_FR']['Order_ReceiptEmail.ss']['TITLE'] = 'Réception de la boutique';
$lang['fr_FR']['Order_statusEmail.ss']['HEADLINE'] = 'Changement de statut de la boutique';
$lang['fr_FR']['Order_StatusEmail.ss']['HEADLINE'] = 'Changement du statut du magasin';
$lang['fr_FR']['Order_statusEmail.ss']['STATUSCHANGE'] = 'Status changé à "%s" pour la commande #';
$lang['fr_FR']['Order_StatusEmail.ss']['STATUSCHANGE'] = 'Status modifié à "%s" pour la commande #';
$lang['fr_FR']['Order_statusEmail.ss']['TITLE'] = 'Changement de statut de la boutique';
$lang['fr_FR']['Order_StatusEmail.ss']['TITLE'] = 'Changement du statut du magasin';
$lang['fr_FR']['PaymentInformation.ss']['AMOUNT'] = 'Montant';
$lang['fr_FR']['PaymentInformation.ss']['DATE'] = 'Date';
$lang['fr_FR']['PaymentInformation.ss']['DETAILS'] = 'Détails';
$lang['fr_FR']['PaymentInformation.ss']['PAYMENTID'] = 'ID du Paiement';
$lang['fr_FR']['PaymentInformation.ss']['PAYMENTINFORMATION'] = 'Information sur le paiement';
$lang['fr_FR']['PaymentInformation.ss']['PAYMENTMETHOD'] = 'Méthode';
$lang['fr_FR']['PaymentInformation.ss']['PAYMENTSTATUS'] = 'Etat du paiement';
$lang['fr_FR']['PaymentInformation.ss']['TABLESUMMARY'] = 'Le contenu de votre panier est affiché dans ce formulaire, ainsi qu\'un résumé de tous les frais associés à cet achat et un aperçu des options de paiements.';
$lang['fr_FR']['Product.ss']['ADD'] = 'Ajouter &quot;%s&quot; dans votre panier';
$lang['fr_FR']['Product.ss']['ADDLINK'] = 'Ajouter un article à votre panier';
$lang['fr_FR']['Product.ss']['ADDONE'] = 'Ajouter un ou plusieurs &quot;%s&quot; de votre panier';
$lang['fr_FR']['Product.ss']['AUTHOR'] = 'Auteur';
$lang['fr_FR']['Product.ss']['FEATURED'] = 'Il s\'agit d\'une description du produit.';
$lang['fr_FR']['Product.ss']['GOTOCHECKOUT'] = 'Aller au paiement maintenant';
$lang['fr_FR']['Product.ss']['GOTOCHECKOUTLINK'] = '&raquo; Aller au paiement';
$lang['fr_FR']['Product.ss']['IMAGE'] = '%s image';
$lang['fr_FR']['Product.ss']['ItemID'] = 'Article #';
$lang['fr_FR']['Product.ss']['NOIMAGE'] = 'Désolé, pas d\'image disponible du produit pour &quot;%s&quot;';
$lang['fr_FR']['Product.ss']['QUANTITYCART'] = 'Quantité dans le panier';
$lang['fr_FR']['Product.ss']['REMOVE'] = 'Supprimer &quot;%s&quot; de votre panier';
$lang['fr_FR']['Product.ss']['REMOVEALL'] = 'Supprimez un &quot;%s&quot; de votre panier';
$lang['fr_FR']['Product.ss']['REMOVELINK'] = '&raquo; Retiré de votre panier';
$lang['fr_FR']['Product.ss']['SIZE'] = 'Taille';
$lang['fr_FR']['ProductGroup.ss']['FEATURED'] = 'Produits ';
$lang['fr_FR']['ProductGroup.ss']['OTHER'] = 'Autres Produits';
$lang['fr_FR']['ProductGroup.ss']['VIEWGROUP'] = 'Afficher le groupe de produits &quot;%s&quot;';
$lang['fr_FR']['ProductGroupItem.ss']['ADD'] = 'Ajouter un &quot;%s&quot; dans votre panier';
$lang['fr_FR']['ProductGroupItem.ss']['ADDLINK'] = 'Ajouter un article au panier';
$lang['fr_FR']['ProductGroupItem.ss']['ADDONE'] = 'Ajouter un ou plusieurs &quot;%s&quot; dans votre panier';
$lang['fr_FR']['ProductGroupItem.ss']['AUTHOR'] = 'Auteur';
$lang['fr_FR']['ProductGroupItem.ss']['GOTOCHECKOUT'] = 'Aller à la caisse maintenant';
$lang['fr_FR']['ProductGroupItem.ss']['GOTOCHECKOUTLINK'] = '&raquo; Aller à la caisse';
$lang['fr_FR']['ProductGroupItem.ss']['IMAGE'] = '%s image';
$lang['fr_FR']['ProductGroupItem.ss']['NOIMAGE'] = 'Désolé, il n\'y a pas d\'image pour le produit &quot;%s&quot;';
$lang['fr_FR']['ProductGroupItem.ss']['QUANTITY'] = 'Quantité';
$lang['fr_FR']['ProductGroupItem.ss']['QUANTITYCART'] = 'Quantité dans le panier';
$lang['fr_FR']['ProductGroupItem.ss']['READMORE'] = 'Cliquez ici pour en savoir plus sur &quot;%s&quot;';
$lang['fr_FR']['ProductGroupItem.ss']['READMORECONTENT'] = 'CLiquez pour en savoir plus &raquo;';
$lang['fr_FR']['ProductGroupItem.ss']['REMOVE'] = 'Supprimer un &quot;%s&quot; de votre panier';
$lang['fr_FR']['ProductGroupItem.ss']['REMOVEALL'] = 'Supprimer un des &quot;%s&quot; du panier';
$lang['fr_FR']['ProductGroupItem.ss']['REMOVELINK'] = '&raquo; Retiré du panier';
$lang['fr_FR']['ProductGroupItem.ss']['REMOVEONE'] = 'Supprimer un &quot;%s&quot; de votre panier';
$lang['fr_FR']['ProductMenu.ss']['GOTOPAGE'] = 'Aller à la page %s';
$lang['fr_FR']['SSReport']['ALLCLICKHERE'] = 'Cliquez ici pour afficher tous les produits';
$lang['fr_FR']['SSReport']['INVOICE'] = 'facture';
$lang['fr_FR']['SSReport']['PRINT'] = 'Imprimer';
$lang['fr_FR']['SSReport']['VIEW'] = 'Afficher';
$lang['fr_FR']['ViewAllProducts.ss']['AUTHOR'] = 'Auteur';
$lang['fr_FR']['ViewAllProducts.ss']['CATEGORIES'] = 'Catégories';
$lang['fr_FR']['ViewAllProducts.ss']['IMAGE'] = '%s image';
$lang['fr_FR']['ViewAllProducts.ss']['LASTEDIT'] = 'Dernière édition';
$lang['fr_FR']['ViewAllProducts.ss']['LINK'] = 'Lien';
$lang['fr_FR']['ViewAllProducts.ss']['NOCONTENT'] = 'Pas de contenu défini.';
$lang['fr_FR']['ViewAllProducts.ss']['NOIMAGE'] = 'Désolé, pas d\'image pour &quot;%s&quot;';
$lang['fr_FR']['ViewAllProducts.ss']['NOSUBJECTS'] = 'Pas de sujets définis';
$lang['fr_FR']['ViewAllProducts.ss']['PRICE'] = 'Prix';
$lang['fr_FR']['ViewAllProducts.ss']['PRODUCTID'] = 'ID du Produit';
$lang['fr_FR']['ViewAllProducts.ss']['WEIGHT'] = 'Poids';

?>
