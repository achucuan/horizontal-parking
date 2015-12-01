<?php

namespace App\Models\dirty;

use Illuminate\Database\Eloquent\Model;

class CarPoolMembers extends Model
{
    private $carPool = [
        [
            'name' => 'The Walking Dead.',
            'members' => ['name'=> 'Rick', 'name'=> 'Carl', 'name'=> 'Glenn']
        ],
        [
            'name' => 'Yuber',
            'members' => ['name'=> 'Elisiña', 'name'=> 'Tadeo Senpai', 'name'=> 'Hikuri']
        ],
        [
            'name' => 'Yoyoyo! le pago el taxi..',
            'members' => ['name'=> 'Rick', 'name'=> 'Carl', 'name'=> 'Daryl']
        ]
    ];

    function getCarPool()
    {
        return $this->carPool;
    }

    function getCarPoolMembers()
    {
        return $this->carPoolMembers;
    }

}