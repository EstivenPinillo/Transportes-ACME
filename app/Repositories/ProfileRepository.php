<?php

namespace App\Repositories;

use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class ProfileRepository implements ProfileRepositoryInterface {

    public function __contruct(){

    }

    public function getProfileByUser(){
        return DB::table('users')
                        ->join('profiles','users.profile_id','=','profiles.id')
                        ->join('cities','users.city_id','=','cities.id')
                        ->join('type_documents','users.type_document_id','=','type_documents.id')
                        ->select(
                            'profiles.name as profile_name',
                            'type_documents.name as type_document',
                            'document',
                            'first_name',
                            'second_name',
                            'last_name',
                            'phone_number',
                            'address',
                            'cities.name as city'
                        )
                        ->whereIn('profiles.id', [2,3])
                        ->orderBy('users.id', 'desc')
                        ->get();
    }

}