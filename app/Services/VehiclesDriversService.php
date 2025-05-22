<?php

namespace App\Services;

use App\Repositories\VehiclesDriversRepositoryInterface;
use App\Repositories\UserRepositoryInterface;
use App\Repositories\VehicleRepositoryInterface;
use App\Models\VehiclesDrivers;

class VehiclesDriversService {


    private VehiclesDriversRepositoryInterface $vehiclesDriversRepository;
    private UserRepositoryInterface $userRepository;
    private VehicleRepositoryInterface $vehicleRepository;
    
    public function __construct(
        VehiclesDriversRepositoryInterface $vehiclesDriversRepository,
        UserRepositoryInterface $userRepository,
        VehicleRepositoryInterface $vehicleRepository
    ) {
        $this->vehiclesDriversRepository = $vehiclesDriversRepository;
        $this->userRepository = $userRepository;
        $this->vehicleRepository = $vehicleRepository;
    }

    public function storeDriverOwnerVehicle($owner, $vehicle, $driver) {

        $idOwner = $this->userRepository->storeReturnID($owner);
        $idDriver = $this->userRepository->storeReturnID($driver);
        
        $vehicle->owner_id = $idOwner;
        $idVehicle = $this->vehicleRepository->storeReturnID($vehicle);

        $driversVehicles = new VehiclesDrivers();
        $driversVehicles->vehicle_id = $idVehicle;
        $driversVehicles->driver_id = $idDriver;

        return $this->vehiclesDriversRepository->storeDriverVehicle($driversVehicles);
    }


}