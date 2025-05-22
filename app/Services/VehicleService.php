<?php

namespace App\Services;

use App\Repositories\VehicleRepositoryInterface;

class VehicleService {

    private VehicleRepositoryInterface $vehicleRepository;

    public function __construct(VehicleRepositoryInterface $vehicleRepository){
        $this->vehicleRepository = $vehicleRepository;
    }

    public function vehicleOwnerDriver() {

        $vehicleByOwnerAndDriver = $this->vehicleRepository->getVehicleByOwnerAndDriver();
        return $vehicleByOwnerAndDriver;
    }

}