<?php

namespace App\Http\Controllers;

use App\Models\Rider;
use Illuminate\Http\Request;

class RiderController extends Controller
{

    public function store(Request $request)
    {
        $data = $request->validate(['name' => 'required|string']);

        Rider::create($data);

        return response()->json(['message' => 'Rider created successfully']);

    }

}
