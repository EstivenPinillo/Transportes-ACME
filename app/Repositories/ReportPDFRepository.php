<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class ReportPDFRepository implements ReportPDFRepositoryInterface {

    public function __construct(){

    }

    public function reportCompany(){
         $reportData = DB::table('vehicles')
            ->join('users', 'owner_id','=','users.id')
            ->join('vehicles_drivers', 'vehicles.id','=','vehicles_drivers.vehicle_id')
            ->join('users as drivers', 'vehicles_drivers.driver_id', '=', 'drivers.id')
            ->select(
                'license_plate',
                'brand',
                'users.first_name as owner_first_name',
                'users.second_name as owner_second_name',
                'users.last_name as owner_last_name',
                'drivers.first_name as driver_first_name',
                'drivers.second_name as driver_second_name',
                'drivers.last_name as driver_last_name',
            )
        ->get();

        return $reportData;
    }

}