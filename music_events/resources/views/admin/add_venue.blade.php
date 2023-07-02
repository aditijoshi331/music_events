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
  action="{{route('venue.create')}}">
  @csrf
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">{{ __('Venue Name') }}</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input value="" name="venue_name" type="text" placeholder="Venue name" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">{{ __('Venue address') }}</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <textarea name="address" placeholder="Venue address" class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">{{ __('Contact Number') }}</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input value="" name="contact_number" type="text" placeholder="Contact Number" maxlength="12"  class="form-control">
        </div>
    </div>
   <div class="form-group row">
    <div class="col-12 col-sm-12 col-form-label text-sm-center">
            <button align="center"
              type="submit"
              class="btn btn-space btn-primary">
              {{ __('Submit') }}
            </button>
       </div>
     </div>
</form>
</html>
 @endsection