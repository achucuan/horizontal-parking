<?php

namespace App\Models\dirty;

use Illuminate\Database\Eloquent\Model;

class CarPoolMembers extends Model
{
    private $carPools = [
        [
            'group' => 'The Walking Dead.',
            'driver' => 'Rick',
            'passengers' => ['Carl', 'Daryl']
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
        ]
    ];

    /**
     * getCarPool
     * Returns full car pool feed
     * @return array
     */
    public function getCarPool()
    {
        return $this->carPools;
    }

}