<?php

interface PaymentInterface {
    /**
    * Process a payment and return true on success or false on failure
    *
    */
    public function processPayment(Page $order);
	
}
