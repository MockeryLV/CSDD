<?php

namespace App\Models\Collections;

use App\Models\Vehicle;

class VehiclesCollection
{


    private array $vehicles = [];

    public function __construct(array $vehicles)
    {

        foreach ($vehicles as $vehicle) {

            if ($vehicle instanceof Vehicle) {
                $this->vehicles[] = $vehicle;
            }

        }

    }

    public function getVehicles(): array
    {

        return $this->vehicles;
    }


}