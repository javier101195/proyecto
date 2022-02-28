<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RelacionController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view('welcome', compact('user')); 

    }
}
