<?php

namespace App\Models\patterns;

use App\Models\interfaces\Slot;

class PlainSlot extends Slot 
{
	public function __construct()
	{
		$this->text = 'slot added';
	}

	public function getText()
	{
		return $this->text;
	}

}