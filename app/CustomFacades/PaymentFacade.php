<?php 

namespace App\CustomFacades;

class PaymentFacade{
	
	protected static function getFacadeAccessor(){
		
		return "Payment Complete";
	}
}