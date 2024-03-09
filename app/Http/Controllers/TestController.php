<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //index 
    public function index(){
        return view('admin.master');
    }
}
