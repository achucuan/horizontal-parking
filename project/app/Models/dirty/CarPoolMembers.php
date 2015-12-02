<?php

namespace App\Models\dirty;

use Illuminate\Database\Eloquent\Model;

class CarPoolMembers extends Model
{
    private $carPools = [
        [
            'group' => 'The Walking Dead.',
            'driver' => 'Rick',
            'passengers' => ['Daryl', 'Carl']
        ],
        [
            'group' => 'Yuber',
            'driver' => 'Elisa',
            'passengers' => ['Un troll', 'Esther', 'Hikuri']
        ],
        [
            'group' => 'The KKK',
            'driver' => 'Karen',
            'passengers' => ['Karla', 'Katia']
        ],
        [
            'group' => 'Cho cho cho fer para el taxi',
            'driver' => 'Ilse',
            'passengers' => ['Audrey', 'Laura', 'Barbara']
        ],
        [
            'group' => 'Starks',
            'driver' => 'Eddard',
            'passengers' => ['Sansa', 'Arya', 'Robb']
        ]
    ];

    /**
     * getCarPool
     * Returns full car pool feed
     * @return array
     */
    public function &getCarPool()
    {
        return $this->carPools;
    }

}