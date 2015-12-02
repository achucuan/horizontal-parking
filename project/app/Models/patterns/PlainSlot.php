<?php

namespace App\Models\patterns;

use App\Models\patterns\Slot;

class PlainSlot extends Slot 
{
	//protected $text = 'slot added';

	public function getText()
	{
		return $this->text;
	}

}