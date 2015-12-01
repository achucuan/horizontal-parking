<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class SlotController extends BaseController
{
	public function buildDirtySlot()
	{

	}	


	public function buildPatternSlot()
	{
		$slot = new CarWash(new ValletParking(new PlainSlot()));

		echo $slot->getText();
	}  

	public function showForm()
	{
		return view('index');
	} 
}