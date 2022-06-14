<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title'=>'register',
            'active'=>'regeister'
        ]);
    }

    public function store(){
        return request()->all();
    }

}
