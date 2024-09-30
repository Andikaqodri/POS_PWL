<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Corrected namespace

class UserController extends Controller
{
    public function index(){

        $user = UserModel::where('username', 'manager')->firstOrfail();
        return view('user', ['data' => $user]);
    }
       
}
