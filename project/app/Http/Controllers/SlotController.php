<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use App\Models\dirty\CarWashSlot;
use App\Models\dirty\ValletParkingSlot;
use App\Models\dirty\Slot;
use App\Models\patterns\CarWash;
use App\Models\patterns\ValletParking;
use App\Models\patterns\PlainSlot;


class SlotController extends BaseController
{
	public function buildDirtySlot()
	{
		$slot = new Slot();
		echo $slot->getText();

		$carWashSlot = new CarWashSlot();
		echo $carWashSlot->getText();

		$valletParkingSlot = new ValletParkingSlot();
		echo $valletParkingSlot->getText();
	}	


	public function buildPatternSlot()
	{
		$slot = new CarWash(new ValletParking(new PlainSlot()));
		echo $slot->getText();
	}  

}