<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function addUser(){

        User::create(['name'=>'tontoentrecomillas', 'password'=> 'olakease', 'email'=> 'vivaerbeti@gmail.com']);


    }
}
