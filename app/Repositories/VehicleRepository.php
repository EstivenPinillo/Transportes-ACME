<?php

namespace App\Repositories;

use App\Models\Vehicle;
use Illuminate\Support\Facades\DB;

class VehicleRepository implements VehicleRepositoryInterface
{
    public function getVehicleByOwnerAndDriver(){

        $vehiclesOwnersDrivers = DB::table('vehicles')
            ->join('users', 'owner_id','=','users.id')
            ->join('vehicles_drivers', 'vehicles.id','=','vehicles_drivers.vehicle_id')
            ->join('users as drivers', 'vehicles_drivers.driver_id', '=', 'drivers.id')
            ->select(
                'license_plate',
                'color',
                'brand', 
                'type', 
                'users.first_name as owner_first_name',
                'drivers.first_name as driver_first_name',
            )
            ->orderBy('vehicles.id', 'desc')
            ->get();

        return $vehiclesOwnersDrivers;
    }

    public function storeReturnID(Vehicle $vehicle) 
    {   
        $vehicle->save();
        return $vehicle->id; 
    }
}