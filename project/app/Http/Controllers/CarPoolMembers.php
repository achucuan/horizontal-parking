<?php

namespace App\Http\Controllers;

use App\Models\patterns\CarPoolMembersFacade;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\dirty\CarPoolMembers as CarPoolMembersDirty;

class CarPoolMembers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carPoolMembers = new CarPoolMembersDirty();

        $carPoolMembers = $carPoolMembers->getCarPool();
        return view('facade', ['carPoolMembers' => $carPoolMembers]);
    }

    public function getMembers()
    {
        $carPoolMembers = CarPoolMembersFacade::getMembers();
        return view('facade', compact('carPoolMembers'));
    }

    public function addMemberToParty()
    {
        $carPoolMembers = CarPoolMembersFacade::addMemberParty('John Snow', 'Starks');
        return view('facade', compact('carPoolMembers'));
    }
}
