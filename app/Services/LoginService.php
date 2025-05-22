<?php

namespace App\Services;
use App\Repositories\LoginRepositoryInterface;
use Illuminate\Support\Facades\Auth;


class LoginService {

    private LoginRepositoryInterface $loginRepository;
    
    public function __construct(LoginRepositoryInterface $loginRepository) {
        $this->loginRepository = $loginRepository;
    }

    public function access($credentials, $nameToken) {
        
        $isAuthenticated = $this->authenticate($credentials);

        if($isAuthenticated) {
            return ['tokenacme' => $this->createToken($nameToken), 'User' => Auth::User()];
        }
        return $isAuthenticated;
    }   
    
    public function createToken($nameToken) {
        $token = Auth::User()->createToken("ACME-User")->plainTextToken;
        return $token;
    }

    public function authenticate(array $credentials):bool {
        $isAuthenticated = Auth::attempt($credentials);
        return $isAuthenticated;
    }

    public function deleteToken() {
        $itDeleted = Auth::User()->currentAccessToken()->delete();
        return $itDeleted;
    }

}