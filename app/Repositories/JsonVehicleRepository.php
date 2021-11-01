<?php


namespace App\Repositories;

use App\Models\Collections\VehiclesCollection;
use App\Models\Vehicle;
use Exception;

class JsonVehicleRepository
{

    private string $file;

    private VehiclesCollection $vehicles;

    public function __construct(string $file)
    {
        $this->file = $file;

        $db = json_decode(file_get_contents($file), true)['items'];


        $vehicles = [];


        foreach ($db as $item) {


            try {

                $vehicles[] = new Vehicle(
                    $item['id'],
                    $item['numurs'],
                    $item['rn'],
                    $item['datums'],
                    $item['s_datums']
                );

            } catch (Exception $e) {
                throw $e->getCode();
            }


        }

        $this->vehicles = new VehiclesCollection($vehicles);


    }


    public function getAll(): VehiclesCollection
    {
        return $this->vehicles;
    }


    public function getCurrentryAtTA(string $time): VehiclesCollection{

        $vehicles = [];

        foreach ($this->vehicles->getVehicles() as $vehicle){

            /**
             * @var Vehicle $vehicle
             */
            if($vehicle->getSDatums()){
                if($vehicle->getDatums() <= $time && $time <= $vehicle->getSDatums()){
                    $vehicles[] = $vehicle;
                }
            }else{
                if($vehicle->getDatums() <= $time){
                    $vehicles[] = $vehicle;
                }
            }


        }

        return new VehiclesCollection($vehicles);

    }

}