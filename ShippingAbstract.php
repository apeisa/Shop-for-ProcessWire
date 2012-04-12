<?php

abstract class ShippingAbstract extends WireData implements Module {

	public $title;

	public function init() {

	}

	abstract function calculateShippingCost();

}
