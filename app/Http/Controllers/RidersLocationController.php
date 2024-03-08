<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLocationRequest;
use App\Models\RidersLocation;

class RidersLocationController extends Controller
{

    public function storeLocation(StoreLocationRequest $request)
    {

        $data = $request->validate();

        RidersLocation::create($data);

        return response()->json(['message' => 'Location stored successfully']);

    }

    public function findNearestRider($restaurantId)
    {

    }
}
