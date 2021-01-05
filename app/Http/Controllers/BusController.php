<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBusRequest;
use App\Http\Requests\UpdateBusRequest;
use App\Models\Bus;
use App\Models\User;
use App\Models\Image;
class BusController extends Controller
{
    public function index()
    {
        return Bus::get();
    }

    public function store(StoreBusRequest $request)
    {
        $request = $request->validated();
        $user = User::find($request['user_id']);

        $bus = $user->buses()->create($request);
        
        if(isset($request['images']))
            $this->storeImages($bus,$request['images']);

        return response()->json([
            'status' => 'success',
            'bus' => $bus,
        ]); 
    }

    private function storeImages(Bus $bus, $images)
    {
        foreach ($images as $key => $image) {

            $imageName = time().rand(1,1000000).'.'.$image->extension();
            
            $image->move(public_path('images/buses'), $imageName);
            
            $bus->images()->create(['src'=>$imageName]);
        }
    }

    public function update(UpdateBusRequest $request, Bus $bus)
    {
        $request = $request->validated();
        
        $bus->update($request);

        return response()->json([
            'status' => 'success',
            'bus' => $bus,
        ]);
    }

    public function destroy(Bus $bus)
    {
        $bus->delete();

        return response()->json([
            'status' => 'success'
        ]);
    }
}
