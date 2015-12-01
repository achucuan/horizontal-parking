<?php

namespace App\Models\patterns;

use App\Models\interfaces\Slot;

class CarWash extends Slot 
{
	protected $slot;

	public function __construct(Slot $slot)
	{
		$this->slot = $slot;
	}

	protected function 	decorateCarWashSlot()
	{
		$this->slot->text .= '|Car Wash added';
	}

	public function getText()
	{
		return $this->decorateCarWashSlot();
	}
}