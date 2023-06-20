<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class UserController extends Controller
{
    public function users($conection)
    {
        // dd(Config::get('database.connections'));
        return User::on($conection)->get();
    }
}
