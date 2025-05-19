<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\StoreUser;
use App\Http\Requests\UpdateUser;

class UserController extends Controller
{
    
    private UserService $userService;

    public function __construct(UserService $userService) {
        $this->userService = $userService;
    }

     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userAll = $this->userService->index();
        if($userAll){
            return new JsonResponse($userAll, JsonResponse::HTTP_OK);
        }
        return new JsonResponse($userAll, JsonResponse::HTTP_BAD_REQUEST);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUser $request) : JsonResponse
    {
        $data = $request->safe();

        $isUserSave = $this->userService->store($data);

        if($isUserSave){
            return new JsonResponse($isUserSave, JsonResponse::HTTP_OK);
        }
        return new JsonResponse($isUserSave, JsonResponse::HTTP_NOT_ACCEPTABLE);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id): JsonResponse
    {
        $userOnly = $this->userService->show($id);
        
        if($userOnly){
            return new JsonResponse($userOnly, JsonResponse::HTTP_OK);
        }
        return new JsonResponse($id, JsonResponse::HTTP_NOT_FOUND);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUser $request, int $id)
    {
        $data = $request->validated();
        $isUpdate = $this->userService->update($data, $id);

        if($isUpdate){
            return new JsonResponse($data, JsonResponse::HTTP_OK);
        }
        return new JsonResponse($id, JsonResponse::HTTP_NOT_FOUND);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $isDestroy = $this->userService->destroy($id);

        if($isDestroy){
            return new JsonResponse($isDestroy, JsonResponse::HTTP_OK);
        }
        return new JsonResponse($id, JsonResponse::HTTP_NOT_FOUND);
    }

}
