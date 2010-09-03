<?php

$TYPO3_CONF_VARS['EXTCONF'][COMMERCE_EXTkey]['SYSPRODUCTS']['PAYMENT']['types']['paypal_express'] = array (
	'path' => t3lib_extmgm::extPath('paypal2commerce') . 'classes/class.tx_paypal2commerce_payment_paypal_express.php',
	'class' => 'tx_paypal2commerce_payment_paypal_express',
	'type' => PAYMENTArticleType,
	'provider' => array(
		'paypal' => array(
			'class' => 'EXT:paypal2commerce/classes/class.tx_paypal2commerce_provider_paypal.php:tx_paypal2commerce_provider_paypal',
		)
	)
);

?>