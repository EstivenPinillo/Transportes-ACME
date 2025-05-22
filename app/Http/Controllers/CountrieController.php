<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCountrieRequest;
use App\Http\Requests\UpdateCountrieRequest;

use App\Services\CountrieService;

class CountrieController extends Controller
{

    private CountrieService $countrieService;

    public function __construct(CountrieService $countrieService) {
        $this->countrieService = $countrieService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->countrieService->getAllCountries();
    }

}
