<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModifierController extends Controller
{
    public function dashboard(){
    	return view('employee.home');
    }
}
