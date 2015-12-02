<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Models\patterns\CarWash;
use App\Models\patterns\ValletParking;
use App\Models\patterns\PlainSlot;

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

}