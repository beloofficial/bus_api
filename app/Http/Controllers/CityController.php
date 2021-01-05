<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;

class CityController extends Controller
{
    public function index()
    {
        return City::orderBy('name')->get(['id','name']);
    }

    public function store(StoreCityRequest $request)
    {
      
        $request = $request->validated();
       
        City::create($request);
        
        return response()->json([
            'status' => 'success'
        ]); 
    }

    public function update(UpdateCityRequest $request, City $city)
    {
        $request = $request->validated();
        
        $city->update($request);

        return response()->json([
            'status' => 'success',
            'city' => $city
        ]);
    }

    public function destroy(City $city)
    {
        $city->delete();

        return response()->json([
            'status' => 'success'
        ]);
    }
}
