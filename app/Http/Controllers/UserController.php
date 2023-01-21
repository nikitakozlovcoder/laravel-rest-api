<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
class UserController extends Controller
{
    public function Index(){
        return UserResource::collection(User::all())->all();
    }

    public function Show(User $user){
        return new UserResource($user);
    }

    public function FindByEmail(string $email){
        return new UserResource(User::whereEmail($email)->first());
    }
}
