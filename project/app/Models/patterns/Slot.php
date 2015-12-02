<?php

namespace App\Models\patterns;

abstract class Slot
{	
	protected $text = 'slot added';
	public abstract function getText();
}