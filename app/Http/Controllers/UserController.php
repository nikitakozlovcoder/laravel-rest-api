<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index(){
        return User::all();
    }

    public function Show(User $user){
           return $user;
    }
}
