<?php
$extensionPath = t3lib_extMgm::extPath('paypal2commerce');

return array(
	'tx_paypal2commerce_provider_paypal' => $extensionPath . 'classes/class.tx_paypal2commerce_provider_paypal.php',
	'tx_paypal2commerce_payment_paypal_express' => $extensionPath . 'classes/class.tx_paypal2commerce_payment_paypal_express.php',
	'tx_paypal2commerce_payment_exception' => $extensionPath . 'classes/class.tx_paypal2commerce_payment_exception.php',
);
?>
