<?php

namespace App\Models\dirty;

class Slot
{
	public function __construct()
	{
		$this->text = 'slot added|';
	}

	public function getText()
	{
		return $this->text;
	}

} 