<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    public function index()
    {
        return User::get();
    }

    public function store(StoreUserRequest $request)
    {
        $request = $request->validated();
        
        $request['password'] = bcrypt('12345678');
        
        User::create($request);
        
        return response()->json([
            'status' => 'success'
        ]); 
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $request = $request->validated();

        $user->update($request);

        return response()->json([
            'status' => 'success',
            'user' => $user
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return response()->json([
            'status' => 'success'
        ]);
    }
}
