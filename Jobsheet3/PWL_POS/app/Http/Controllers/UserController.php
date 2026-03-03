<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function index(){
        //coba akses model UserModel
        $data = [
            'nama' => 'Pelanggan Pertama',
        ];
        UserModel::where('username', 'customer-1') -> update($data);

        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
