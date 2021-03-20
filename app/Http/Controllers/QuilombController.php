<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Publiction;
use App\Models\Comment;

class QuilombController extends Controller
{
    public function index(){
        
        $quilombo = Comment::all();
        $quilombo = Publiction::all(); 

        return view('index',['publictions'=>$quilombo, 'comments'=>$quilombo]);
    }
    public function contact(){
        return view('users.contact');
    }
    public function profile(){

        $quilombo = Publiction::all();

        return view('users.profile',['publictions'=>$quilombo]);
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

        //Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            
            $extenseion = $requestImage->extension();

            //$imageName = md5($requestImage->image->getClientOriginalName() . );

        }

        $publiction->save();

        return redirect('/')->with('msg', 'Publicação realizada com sucesso!');

    }
    public function stor(Request $request){
        //Comments

        $comment = new comment;

        $comment->email = $request->email;
        $comment->content2 = $request->content2;

        $comment->save();

        return redirect('/');
    }
}
