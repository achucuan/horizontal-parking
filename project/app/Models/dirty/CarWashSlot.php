<?php

namespace App\Models\dirty;

class CarWashSlot extends Model 
{
	public function __construct()
	{
		$this->text = 'Slot withCar Wash added';
	}

	public function getText()
	{
		return $this->text;
	}

} 