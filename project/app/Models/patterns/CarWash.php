<?php

namespace App\Models\patterns;

use App\Models\patterns\SlotDecorator;

class CarWash extends SlotDecorator 
{
	public function getText()
	{
		return $this->slot->getText() . '|Car Wash added';
	}
}