<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\UserResource;
use App\Models\User;

class UserController
{

    public function index()
    {
        $users = User::all();
        return UserResource::collection($users);
    }

    public function destroy(int $id)
    {
        $user = User::find($id);
        $user->delete();
    }
}
