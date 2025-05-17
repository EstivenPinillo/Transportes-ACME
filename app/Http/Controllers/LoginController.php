<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;
use App\Services\LoginService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    
    private LoginService $loginService;

    public function __construct(LoginService $loginService) 
    {
        $this->loginService = $loginService;
    }

    /**
     * Handle an authentication attempt.
     */
    public function login(LoginRequest $request): JsonResponse
    {
        $credentials = $request->safe()->only(['password', 'email']);
        $nameToken = $request->safe()->only(['name_token']);

        $isLogined = $this->loginService->access($credentials, $nameToken);

        if($isLogined){
            return new JsonResponse($isLogined, JsonResponse::HTTP_OK);
        }
        return new JsonResponse($isLogined, JsonResponse::HTTP_UNAUTHORIZED);
    }
    /**
     * Log the user out of the application.
     */
    public function logout(Request $request)
    {   
        $itIsLogout = $this->loginService->deleteToken();
        if($itIsLogout){
            return new JsonResponse($itIsLogout, JsonResponse::HTTP_OK);
        }
        return new JsonResponse($itIsLogout, JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
    }
}