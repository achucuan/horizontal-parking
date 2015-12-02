<?php

namespace App\Models\patterns;

use App\Models\patterns\SlotDecorator; 

class ValletParking extends SlotDecorator
{
	public function getText()
	{
		return $this->slot->getText() . '|Vallet Parking added';
	}

}