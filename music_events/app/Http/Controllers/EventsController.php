<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\Genre;
use App\Models\Artist;
use App\Models\Venue;
use Auth;

class EventsController extends Controller
{
    public function index(){
         $events = Events::orderBy('id','DESC')->paginate(20); 
         $genre_data=Genre::all();
         $artist_data=Artist::all();
         $venue_data=Venue::all();
             return view('admin.event',compact('events','genre_data','artist_data','venue_data'));
    }

    public function create(Request $request){
        //print_r($request->address);exit;
        $event = new Events();

             $id=Auth::id();
        
            $event->title = $request->title;
             $event->genre_id = $request->genre_id;
            $event->contact_number = $request->contact_number;
            $event->added_by_id=$id;

            $event->save();
             return redirect('event')->with('success','Event added successfully');
        
    }

     public function update_event($id){
       //print_r($id);exit;
       $events=Events::find($id);
       return view('admin.edit_event',compact('events'));
        
    }

    public function delete_event($id)
    {
        //print_r($id);exit;
          Events::where('id',$id)->delete();

          return redirect('event')
         ->with('success','Event deleted successfully');
    }

    public function edit_event(Request $request)
    {
        //print_r($request);exit;
         $id=Auth::id();

          $event = Events::find($request->id);

            $event->name = $request->venue_name;
            $event->address = $request->address;
            $event->contact_number = $request->contact_number;
            $event->updated_by_id=$id;

            $event->save();
          return redirect('event')
         ->with('success','Event edited successfully');
    }

    public function list_events(){

        return view('home');
        

    }
}
