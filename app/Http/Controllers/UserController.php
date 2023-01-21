<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index(){
        return User::all()->map(function ($user) {
            return [
                'email' => $user->email
            ];
        });
    }

    public function Show(User $user){
        return [
            'email' => $user->email
        ];
    }
}
