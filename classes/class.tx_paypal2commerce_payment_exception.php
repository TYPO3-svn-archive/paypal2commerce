<?php
/***************************************************************
*  Copyright notice
*  
*  Based on paypal2commerce 0.0.1 from Martin Holtz <typo3@martinholtz.de>
*  (c) 2010 Helge Funk <helge.funk@e-netconsulting.com>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


/**
 * Class for Payment Exceptions.
 *
 */
class tx_paypal2commerce_payment_exception extends Exception {

	/**
	 * Keeps exception details.
	 *
	 * @var array
	 */
	protected $details;


	/**
	 * Calling class constructor.
	 *
	 * @param string $message    exception message
	 * @param integer $code      exception identifier represented as hexadecimal number
	 * @param mixed $details     array of exception details
	 */
	public function __construct($message, $code = 0, $details='') {
		parent::__construct($message, $code);
		$this->details = $details;
	}

	/**
	 * Returns string representation of the exception
	 *
	 * @return string serialized exception object
	 */
	public function __toString() {
		return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
	}

	/**
	 * Returns error number of exception.
	 *
	 * @return integer error number of exception
	 */
	public function getErrorNumber() {
		return $this->details['error_no'];
	}

	/**
	 * Returns exception details.
	 *
	 * @return string exception details
	 */
	public function getDetails() {
		return $this->details['error_msg'];
	}
}


if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']["ext/paypal2commerce/classes/class.tx_paypal2commerce_payment_exception.php"])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']["ext/paypal2commerce/classes/class.tx_paypal2commerce_payment_exception.php"]);
}
?>
