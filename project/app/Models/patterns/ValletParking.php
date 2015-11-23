<?php

namespace App\Models\patterns;

use App\Models\patterns\Slot; 

class ValletParking extends Slot
{
	protected $slot;

	public function __construct(Slot $slot)
	{
		$this->slot = $slot;
	}

	protected function 	decorateSlot()
	{
		$this->slot->text .= '|Vallet Parking added';
	}

	public function getText()
	{
		return $this->slot->text;
	}

}