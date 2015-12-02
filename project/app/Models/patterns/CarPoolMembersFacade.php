<?php

namespace App\Models\patterns;


use App\Models\dirty\CarPoolMembers;
use Illuminate\Support\Facades\Facade;

class CarPoolMembersFacade extends Facade
{

    /**
     * getMembers
     * Returns members from party ordered asc and adds driver to array
     * @return array
     */
    public static function getMembers()
    {
        $carPoolModel = new CarPoolMembers;

        $members = [];

        foreach($carPoolModel as $carPool)
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
    static function getPartyMembers($party = 'Yuber')
    {
        $members = array_search(self::getMembers(), $party);
        return $members;
    }

    /** addMemberParty
     * Adds member to specific party
     * @param $member, $party
     * @return array
     */
    static function addMemberParty($member, $party)
    {
        $carPoolModel = new CarPoolMembers;

        foreach($carPoolModel->getCarPool() as &$carPoolParty)
        {
            if($carPoolParty['group'] == $party)
            {
                $carPoolParty['passengers'][] = $member;
            }
        }

        return $carPoolModel->getCarPool();
    }

}