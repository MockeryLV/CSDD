<?php

namespace App\Controllers;

use App\Repositories\JsonVehicleRepository;

class VehiclesController
{

    private JsonVehicleRepository $repository;


    public function __construct(string $filename)
    {

        $this->repository = new JsonVehicleRepository($filename);

    }

    public function getVehicles(string $time)
    {

        $vehicles = $this->repository->getCurrentryAtTA($time)->getVehicles();

        $vehiclesByLines = [];

        foreach ($vehicles as $vehicle){
            $vehiclesByLines[$vehicle->getNumurs()][] = $vehicle;
        }
        ksort($vehiclesByLines);
        $vehicles = $vehiclesByLines;

        require_once 'app/Views/vehicles.php';
    }




}