<?php

namespace App\Services;

use App\Repositories\ProfileRepositoryInterface;

class ProfileService {

    private ProfileRepositoryInterface $profileRepository;

    public function __construct(ProfileRepositoryInterface $profileRepository){
        $this->profileRepository = $profileRepository;
    }   

    public function getProfileByUser() {
        return $this->profileRepository->getProfileByUser();
    }

}