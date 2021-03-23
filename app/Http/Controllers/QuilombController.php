<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Publiction;
use App\Models\User;

class QuilombController extends Controller
{
    public function index(){

        $search = request('search');

        if($search){

            $publiction = Publiction::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();

        }else{
            $publiction = Publiction::all();
        }

        return view('index',['publictions'=>$publiction, 'search'=>$search]);
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

        $user = auth()->user();
        $publiction->user_id = $user->id;

        $publiction->save();

        return redirect('/')->with('msg', 'Publicação realizada com sucesso!');

    }
    public function show($id){

        $publiction = Publiction::findOrFail($id);

        $publictionOwner = User::where('id', $publiction->user_id)->first()->toArray();

        return view('users.show', ['publictions' => $publiction, 'publictionOwner' => $publictionOwner]);

    }
    public function dashboard(){

        $user = auth()->user();

        $publiction = $user->publiction;

        return view('users.dashboard', ['publictions' => $publiction]);

    } 

    public function destroy($id){

        Publiction::findOrFail($id)->delete();

        return redirect('/dashboard')->with('msg', 'Publicação excluída com sucesso!'); 

    }

    public function edit($id){

        $publiction = Publiction::findOrFail($id);

        return view('users.edit', ['publictions' => $publiction]);

    }

    public function update(Request $request){

        Publiction::findOrFail($request->id)->update($request->all());

         //Image Upload
         if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            
            $extenseion = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extenseion;

            $requestImage->move(public_path('img/publictions'), $imageName);

            $data['image'] = $imageName;

        }

        return redirect('/dashboard')->with('msg', 'Publicação editada com sucesso!'); 

    }
}
