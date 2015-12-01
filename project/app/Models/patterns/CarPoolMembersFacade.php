<?php

namespace App\Models\patterns;


use App\Models\dirty\CarPoolMembers;
use Illuminate\Support\Facades\Facade;

class CarPoolMembersFacade extends Facade
{
    private static $carPool;

    static function setCarPool()
    {
        $carPool = new CarPoolMembers;
        self::$carPool = $carPool->getCarPool();
    }

    static function getOwner()
    {
        $return = self::$carPool;
        dd($return);
        return ['party' => 'mushos', 'passengers' => $return ];
    }

    /**
     * getMembers
     * Returns members from party ordered asc and adds driver to array
     * @return array
     */
    public static function getMembers()
    {
        self::setCarPool();

        $members = [];

        foreach(self::$carPool as $carPool)
        {
            array_push($carPool['passengers'], $carPool['driver']);
            asort($carPool['passengers']);
            $members[$carPool['group']] = $carPool['passengers'];
        }

        return $members;
    }

    /**
     * getPartyMembers
     * Search specific party details
     * @param string $party
     * @return array
     */
    function getPartyMembers($party = 'Yuber')
    {
        $members = array_search(self::getMembers(), $party);
        return $members;
    }

}