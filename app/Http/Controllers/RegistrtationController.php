<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegistrtationController extends Controller
{
    //
    public function create(){
        return view('register.create');
    }
}
