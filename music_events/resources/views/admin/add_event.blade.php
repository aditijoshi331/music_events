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
        <label class="col-12 col-sm-3 col-form-label text-sm-right">{{ __('Title') }}</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input value="" name="venue_name" type="text" placeholder="Venue name" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">{{ __('Genre') }}</label>
        <div class="col-12 col-sm-8 col-lg-6">
           <select id="genre_id" name="genre_id" class="form_control"></select>
           <option value="">Select genre</option>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">{{ __('Artist') }}</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <select id="artist_id" name="artist_id" class="form_control"></select>
           <option value="">Select artist</option>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">{{ __('Venue') }}</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <select id="venue_id" name="venue_id" class="form_control"></select>
           <option value="">Select Venue</option>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">{{ __('Image') }}</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input value="" name="image_file" type="file" class="form-control">
        </div>
    </div>
     <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">{{ __('Amount') }}</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input value="" name="amount" type="text" class="form-control">
        </div>
    </div>
     <div class="form-group row">
        <label class="col-12 col-sm-3 col-form-label text-sm-right">{{ __('Date') }}</label>
        <div class="col-12 col-sm-8 col-lg-6">
            <input value="" name="date" type="datetime-local" class="form-control">
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