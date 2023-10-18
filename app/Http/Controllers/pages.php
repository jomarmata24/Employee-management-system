<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pages extends Controller
{
    public function index(){
        return view('components/header')
        . view('components/navbar')
        . view('pages/dashboard')
        . view('components/footer');
    }
}
