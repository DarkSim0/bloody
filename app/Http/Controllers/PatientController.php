<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PatientController extends Controller 
{

    public function index(){
        return view('register.create');
    }

}
