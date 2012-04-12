<?php

abstract class PaymentAbstract extends WireData implements Module {

	public $completedUrl;
	public $title;

	public function init() {

	}

	public function __construct() {
		$data = $this->modules->getModuleConfigData('ShoppingCheckout');
		if (!isset($data['completedUrlSegment'])) {
			$module = $this->modules->get('ShoppingCheckout');
			$data = $module::getDefaultData();
		}
		$page = $this->page;
		$this->currentUrl = $page->url . $data['paymentUrlSegment'] . '/';
		$this->completedUrl = $page->url . $data['completedUrlSegment'] . '/';
	}

	/*
	 *
	 * returns nothing. You should edit and save $order page. If payment was succesful,
	 * then do $order->removeStatus(Page::statusUnpublished) and remember to save the order!
	 *
	 * If order was also paid, then do $order->sc_paid = time();
	 *
	 * If order was not paid, but it was succesful (like invoice, money on delivery etc)
	 * then just publish the order, but do not set sc_paid value.
	 *
	 * After you have manipulated the order, then just to redirect to $this->completedUrl
	 *
	 *
	 * @param Page $order keeps the page object for the order
	 *
	 */
	abstract function processPayment(Page $order);

}
