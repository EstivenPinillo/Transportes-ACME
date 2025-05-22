<?php 

namespace App\Services;

use App\Repositories\CountrieRepositoryInterface;

class CountrieService {

    private CountrieRepositoryInterface $countrieRepository;

    public function __construct(CountrieRepositoryInterface $countrieRepository){
        $this->countrieRepository = $countrieRepository;
    }

    public function getAllCountries(){
        return $this->countrieRepository->getAllCountries();
    }

}