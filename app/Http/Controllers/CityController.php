<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use Illuminate\Http\Request;
use App\Models\City;
use App\Services\CityService;

class CityController extends Controller
{
    
    private CityService $cityService;

    public function __construct(CityService $cityService){
        $this->cityService = $cityService;
    }

    /**
     * Display a listing of the resource.
     */
    public function getCityByCountries($id) 
    {
        //$idCountrie = $request->input('country_id');
        $idCountrie = $id;
        return $this->cityService->getCityByCountrie($idCountrie);
    }

}
