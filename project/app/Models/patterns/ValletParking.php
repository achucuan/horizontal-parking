<?php

namespace App\Models\patterns;

use App\Models\interfaces\Slot; 

class ValletParking extends Slot
{
	protected $slot;

	public function __construct(Slot $slot)
	{
		$this->slot = $slot;
	}

	protected function 	decorateValletParkingSlot()
	{
		$this->slot->text .= '|Vallet Parking added';
		return $this->slot->text;
	}

	public function getText()
	{
		return $this->decorateValletParkingSlot();
	}

}