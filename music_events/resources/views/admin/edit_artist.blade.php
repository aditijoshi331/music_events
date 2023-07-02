@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Music Events</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
   </head>
  
<form id="add-agent-form" 
  method="POST"
  enctype="multipart/form-data"
  action="{{route('artist.edit')}}">
  @csrf
  <input type="hidden" name="id" value="{{$artists->id}}"/>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">{{ __('Artist Name') }}</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input name="genre_name" type="text" placeholder="Artist name" class="form-control" value="{{$artists->name}}">
        </div>
    </div>
   <div class="form-group row">
    <div class="col-12 col-sm-12 col-form-label text-sm-center">
            <button align="center"
              type="submit"
              class="btn btn-space btn-primary">
              {{ __('Edit Artist') }}
            </button>
       </div>
     </div>
</form>
</html>
 @endsection