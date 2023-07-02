@extends('layouts.app')

@section('content')
 @include('admin.layouts.sidebar');

 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                  <a class="btn btn-success" href="{{url('add_artist')}}"> Create Artist</a></div>
                @if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<h2>List of Artist</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
<tr>
<th>S.No</th>
<th>Artist Name</th>
<th width="280px">Action</th>
</tr>
</thead>
   <tbody>
@foreach($artists as $artist)
<tr>
<td>{{$artist->id}}</td>
<td>{{$artist->name}}</td>
<td>

<a class="btn btn-primary" href="/update_artist/{{$artist->id}}">Edit</a>
@csrf
<a class="btn btn-danger" href="/delete_artist/{{$artist->id}}">Delete</a>

@endforeach

</td>
</tr>

</tbody>
</table>
<span align="right">
   
{{$artists->links()}}
</span>
 </div>
    </main>
  </div>
</div>
 @endsection
 