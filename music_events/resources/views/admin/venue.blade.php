@extends('layouts.app')

@section('content')
 @include('admin.layouts.sidebar');


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                  <a class="btn btn-success" href="{{url('add_venue')}}"> Create Venue</a></div>
               @if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
 <h2>List of Venue</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
<th>S.No</th>
<th>Venue Name</th>
<th>Venue Address</th>
<th>Contact number</th>
<th width="280px">Action</th>
</thead>
   <tbody>
@foreach($venues as $venue)
<tr>
<td>{{$venue->id}}</td>
<td>{{$venue->name}}</td>
<td>{{$venue->address}}</td>
<td>{{$venue->contact_number}}</td>
<td>

<a class="btn btn-primary" href="/update_venue/{{$venue->id}}">Edit</a>
@csrf
<a class="btn btn-danger" href="/delete_venue/{{$venue->id}}">Delete</a>

@endforeach

</td>
</tr>
</tbody>
</table>
<span align="right">
   
{{$venues->links()}}
</span>
      </div>
    </main>
  </div>
</div>


 @endsection
