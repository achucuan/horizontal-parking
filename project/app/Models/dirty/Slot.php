<?php

namespace App\Models\dirty;

class Slot extends Model 
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