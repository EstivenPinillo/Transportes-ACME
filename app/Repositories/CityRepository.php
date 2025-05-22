<?php

namespace App\Repositories;

use App\Models\City;

class CityRepository implements CityRepositoryInterface {

    public function __construct(){

    }

    public function getCityByCountrie($idCountrie){
        return City::where('country_id',$idCountrie)->get();
    }

}