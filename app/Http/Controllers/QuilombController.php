<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuilombController extends Controller
{
    public function index(){
        return view('index');
    }
    public function contact(){
        return view('users.contact');
    }
    public function profile(){
        return view('users.profile');
    }
    public function login(){
        return view('users.login');
    }
    public function newuser(){
        return view('users.newuser');
    }
}
