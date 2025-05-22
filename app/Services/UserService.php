<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;
use App\Models\User;

class UserService {
    
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function index() {
        $userAll = $this->userRepository->index();
        return $userAll;
    }

    public function show($id) {
        $userOnly = $this->userRepository->show($id);
        return  $userOnly;
    }

    public function store($data) {

        $user = new User([
            'email' => $data->email,
            'first_name' => $data->first_name,
            'second_name' => $data->second_name,
            'last_name' => $data->last_name,
            'document' => $data->document,
            'address' => $data->address,
            'phone_number' => $data->phone_number,
            'password' => $data->password,
            'profile_id' => $data->profile_id,
            'type_document_id' => $data->type_document_id,
            'city_id' => $data->city_id,
        ]);
        return $this->userRepository->store($user);
    }

    public function update($data, $id) {

        $user = $this->userRepository->findId($id);
        $user->fill($data);

        return $this->userRepository->store($user);
    }

    public function destroy($id) {
        return $this->userRepository->destroy($id);
    }
}