<?php

namespace App\Models\patterns;

abstract class Slot extends Model 
{	
	protected $text;
	public abstract function getText();
}