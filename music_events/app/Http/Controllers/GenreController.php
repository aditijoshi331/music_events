<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use Auth;

class GenreController extends Controller
{
    public function index(){
         $genre = Genre::orderBy('id','DESC')->paginate(20); 
             return view('admin.genre',compact('genre'));
    }

    public function create(Request $request){
        //print_r($request);exit;
        $genre = new Genre();

        $id=Auth::id();
        
            $genre->name = $request->genre_name;
            $genre->added_by_id=$id;

            $genre->save();
             return redirect('genre')->with('success','Genre added successfully');
        
    }

     public function update_genre($id){
       //print_r($id);exit;
       $genre=Genre::find($id);
       return view('admin.edit_genre',compact('genre'));
        
    }

    public function delete_genre($id)
    {
        //print_r($id);exit;
          Genre::where('id',$id)->delete();

          return redirect('genre')
         ->with('success','Genre deleted successfully');
    }

    public function edit_genre(Request $request)
    {
       // print_r($request->genre_name);
        $id=Auth::id();
//echo $request->id;
          $genre = Genre::find($request->id);
//print_r($genre);exit;
            $genre->name = $request->genre_name;
          //$genre->name = 'rock1';
            $genre->updated_by_id=$id;

            $genre->save();
          return redirect('genre')
         ->with('success','Genre edited successfully');
    }

}
