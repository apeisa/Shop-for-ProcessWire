<?php

abstract class PaymentAbstract extends WireData implements Module {
		
	public $completedUrl;
	
	public function __construct() {
		$data = $this->modules->getModuleConfigData('ShoppingCheckout');
		if (!isset($data['completedUrlSegment'])) {
			$module = $this->modules->get('ShoppingCheckout');
			$data = $module::getDefaultData();
		}
		$this->completedUrl = '../' . $data['completedUrlSegment'] . '/';
	}
	
	abstract function processPayment(Page $order);
	
}
