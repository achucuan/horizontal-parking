<?php

namespace App\Models\patterns;
use App\Models\patterns\Slot;

abstract class SlotDecorator extends Slot
{	
	protected $slot;
	public function __construct(Slot $slot)
	{
		$this->slot = $slot;
	}

}