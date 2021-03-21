<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Publiction;

class QuilombController extends Controller
{
    public function index(){
        
        $quilombo = Publiction::all();

        return view('index',['publictions'=>$quilombo]);
    }
    public function contact(){
        return view('users.contact');
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

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extenseion;

            $requestImage->move(public_path('img/publictions'), $imageName);

            $publiction->image = $imageName;

        }

        $publiction->save();

        return redirect('/')->with('msg', 'Publicação realizada com sucesso!');

    } 
}
