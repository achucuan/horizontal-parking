<?php

namespace App\Models\dirty;

class ValletParkingSlot extends Model 
{
	public function __construct()
	{
		$this->text = 'Slot with Valler Parking added';
	}

	public function getText()
	{
		return $this->text;
	}

} 