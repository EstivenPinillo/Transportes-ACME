<?php

namespace App\Repositories;

use App\Repositories\VehiclesDriversRepositoryInterface;
use Illuminate\Support\Facades\DB;

use App\Models\VehiclesDrivers;

class VehiclesDriversRepository implements VehiclesDriversRepositoryInterface {


    public function storeDriverVehicle(VehiclesDrivers $vehicle) {
        $vehicle->save();
        return $vehicle->id;
    }


}