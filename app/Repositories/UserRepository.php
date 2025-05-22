<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository implements UserRepositoryInterface 
{

    public function index()
    {
        return User::All();
    }

    public function show($id)
    {
        return User::where('id', $id)->first();
    }

    public function store(User $user) 
    {
        return $user->save();
    }

    public function storeReturnID(User $user) 
    {   
        $user->save();
        return $user->id; 
    }

    public function update($data, $id) 
    {
        return User::update($data)->where('id', $id);
    }

    public function findId($id)
    {
        return User::find($id);
    }

    public function destroy($id) 
    {
        return User::destroy($id);
    }
}