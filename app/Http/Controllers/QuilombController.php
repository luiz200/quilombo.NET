<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\publiction;

class QuilombController extends Controller
{
    public function index(){
        
        $publictions = Publiction::all(); 

        return view('index',['publictions'=>$publictions]);
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
    public function comment(){
        return view('users.comment');
    }
    public function publiction(){
        return view('users.publiction');
    }
    public function store(Request $request){

        $publiction = new publiction;

        $publiction->title = $request->title;
        $publiction->content = $request->content;

        $publiction->save();

        return redirect('/');

    }
}
