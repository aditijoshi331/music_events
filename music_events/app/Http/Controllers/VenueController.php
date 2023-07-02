<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venue;
use Auth;

class VenueController extends Controller
{
      public function index(){
         $venues = Venue::orderBy('id','DESC')->paginate(20); 
             return view('admin.venue',compact('venues'));
    }

    public function create(Request $request){
        //print_r($request->address);exit;
        $venue = new Venue();

             $id=Auth::id();
        
            $venue->name = $request->venue_name;
             $venue->address = $request->address;
            $venue->contact_number = $request->contact_number;
            $venue->added_by_id=$id;

            $venue->save();
             return redirect('venue')->with('success','Venue added successfully');
        
    }

     public function update_venue($id){
       //print_r($id);exit;
       $venues=Venue::find($id);
       return view('admin.edit_venue',compact('venues'));
        
    }

    public function delete_venue($id)
    {
        //print_r($id);exit;
          Venue::where('id',$id)->delete();

          return redirect('venue')
         ->with('success','Venue deleted successfully');
    }

    public function edit_venue(Request $request)
    {
        //print_r($request);exit;
         $id=Auth::id();

          $venue = Venue::find($request->id);

            $venue->name = $request->venue_name;
            $venue->address = $request->address;
            $venue->contact_number = $request->contact_number;
            $venue->updated_by_id=$id;

            $venue->save();
          return redirect('venue')
         ->with('success','Venue edited successfully');
    }
}
