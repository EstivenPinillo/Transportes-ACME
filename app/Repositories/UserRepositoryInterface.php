<?php

namespace App\Repositories;

use App\Models\User;

interface UserRepositoryInterface {

    public function index();
    public function show($id);
    public function store(User $user);
    public function update($data, $id);
    public function findId($id);
    public function destroy($id);
    
}