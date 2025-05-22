<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVehiclesDriversRequest;
use App\Http\Requests\UpdateVehiclesDriversRequest;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Services\VehiclesDriversService;
use App\Models\User;
use App\Models\Vehicle;


class VehiclesDriversController extends Controller
{

    private VehiclesDriversService $vehiclesDriversService;

    public function __construct(VehiclesDriversService $vehiclesDriversService) {
        $this->vehiclesDriversService = $vehiclesDriversService;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeDriverOwnerVehicle(Request $request)
    {
        $owner = new User();

        $owner->profile_id = $request->input('profile_owner');
        $owner->city_id = $request->input('city_owner');
        $owner->type_document_id = $request->input('type_document_owner');
        $owner->first_name = $request->input('first_name_owner');
        $owner->second_name = $request->input('second_name_owner');
        $owner->last_name = $request->input('last_name_owner');
        $owner->document = $request->input('document_owner');
        $owner->address = $request->input('address_owner');
        $owner->phone_number = $request->input('phone_number_owner');

        $driver = new User();
        $driver->profile_id = $request->input('profile_id');
        $driver->city_id = $request->input('city_id');
        $driver->type_document_id = $request->input('type_document_id');
        $driver->first_name = $request->input('first_name');
        $driver->second_name = $request->input('second_name');
        $driver->last_name = $request->input('last_name');
        $driver->document = $request->input('document');
        $driver->address = $request->input('address');
        $driver->phone_number = $request->input('phone_number');

        $vehicle = new Vehicle();
        $vehicle->license_plate = $request->input('license_plate');
        $vehicle->color = $request->input('color');
        $vehicle->brand = $request->input('brand');
        $vehicle->type = $request->input('type');
        
        $id = $this->vehiclesDriversService->storeDriverOwnerVehicle($owner, $vehicle, $driver);
        
        if($id){
            return new JsonResponse(["id"=>$id], JsonResponse::HTTP_OK);
        }
        return new JsonResponse(["id"=>$id], JsonResponse::HTTP_UNAUTHORIZED);
    }

    /**
     * Display the specified resource.
     */
    public function show(VehiclesDrivers $vehiclesDrivers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVehiclesDriversRequest $request, VehiclesDrivers $vehiclesDrivers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VehiclesDrivers $vehiclesDrivers)
    {
        //
    }
}
