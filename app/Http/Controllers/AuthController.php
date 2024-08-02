<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        $data = [
            'title' => 'login'
        ];
        return view('components/header',$data)
                .view('auth/login');
    }
}
