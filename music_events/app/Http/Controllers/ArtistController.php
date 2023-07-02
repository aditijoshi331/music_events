<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use Auth;

class ArtistController extends Controller
{
    public function index(){
         $artists = Artist::orderBy('id','DESC')->paginate(20); 
             return view('admin.artist',compact('artists'));
    }

    public function create(Request $request){
        //print_r($request);exit;
        $artists = new Artist();

        $id=Auth::id();
        
            $artists->name = $request->artist_name;
            $artists->added_by_id=$id;

            $artists->save();
             return redirect('artist')->with('success','Artist added successfully');
        
    }

     public function update_artist($id){
       //print_r($id);exit;
       $artists=Artist::find($id);
       return view('admin.edit_artist',compact('artists'));
        
    }

    public function delete_artist($id)
    {
        //print_r($id);exit;
          Artist::where('id',$id)->delete();

          return redirect('artist')
         ->with('success','Artist deleted successfully');
    }

    public function edit_artist(Request $request)
    {
        //print_r($request);exit;
         $id=Auth::id();

          $artists = Artist::find($request->id);

            $artists->name = $request->artist_name;
            $artists->updated_by_id=$id;

            $artists->save();
          return redirect('artist')
         ->with('success','Artist edited successfully');
    }
}
