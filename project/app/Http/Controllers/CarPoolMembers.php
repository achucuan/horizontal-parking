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

        //@todo pass object to view and return view
        dd($carPoolMembers->getCarPool());
    }

    public function getDriver()
    {
        return CarPoolMembersFacade::getOwner();
    }

    public function getMembers()
    {
        $carPoolMembers = CarPoolMembersFacade::getMembers();
        return view('members', compact('carPoolMembers'));
    }
}
