<?php

use App\Controllers\VehiclesController;
use App\Models\Collections\VehiclesCollection;
use App\Models\Vehicle;
use App\Repositories\JsonVehicleRepository;

require_once 'vendor/autoload.php';


if($_POST['time']){
    $time = $_POST['time'];

}else{
    $time = date("Y-m-d H:i:s");;
}


$controller = new VehiclesController('db.json');

$controller->getVehicles($time);




