<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /** Home index */
    public function index(){
        
        return view('index');
    }

}
