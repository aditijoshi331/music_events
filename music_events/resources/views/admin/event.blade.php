@extends('layouts.app')

@section('content')
 @include('admin.layouts.sidebar');

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                   <a class="btn btn-success" href="{{url('add_event')}}"> Create Event</a></div>
               @if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<h2>List of Events</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
<tr>
<th>S.No</th>
<th>Title</th>
<th>Genre</th>
<th>Image</th>
<th>Short description</th>
<th>Amount</th>
<th>Date</th>
<th>Venue</th>
<th width="280px">Action</th>
</tr>
</thead>
   <tbody>
@foreach($events as $event)
<tr>
<td>{{$event->id}}</td>
<td>{{$event->title}}</td>
<td>{{$event->genre_id}}</td>
<td>{{$event->image_path}}</td>
<td>{{$event->description}}</td>
<td>{{$event->amount}}</td>
<td>{{$event->date}}</td>
<td>{{$event->venue_id}}</td>
<td>

<a class="btn btn-primary" href="/update_venue/{{$event->id}}">Edit</a>
@csrf
<a class="btn btn-danger" href="/delete_venue/{{$event->id}}">Delete</a>

@endforeach

</td>
</tr>
</tbody>
</table>
<span align="right">
   
{{$events->links()}}
</span>
</div>
    </main>
  </div>
</div>
 @endsection
