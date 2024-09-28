<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash; // Corrected namespace

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'level_id' => 2,
            'username' => 'manager tiga',
            'nama' => 'Manager 2',
            'password' => Hash::make('12345')
        ];
        UserModel::create($data);

        //coba akses mode UserModel
        $user = UserModel::all(); //Ambil semua data dari tabel m_user
        return view('user', ['data' => $user]);
    }
}
