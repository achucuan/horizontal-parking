<?php

namespace App\Models\patterns;

use App\Models\patterns\Slot; 

class CarWash extends Slot 
{
	protected $slot;

	public function __construct(Slot $slot)
	{
		$this->slot = $slot;
	}

	protected function 	decorateSlot()
	{
		$this->slot->text .= '|Car Wash added';
	}
}