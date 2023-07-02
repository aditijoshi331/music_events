@extends('layouts.app')

@section('content')
 @include('admin.layouts.sidebar');



<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <a class="btn btn-success" href="{{url('add_genre')}}"> Create Genre</a> </div>

          @if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
          <h2>List of Genre</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
          <th>S.No</th>
<th>Genre Name</th>
<th width="280px">Action</th>
</thead>
   <tbody>
@foreach($genre as $genres)
<tr>
<td>{{$genres->id}}</td>
<td>{{$genres->name}}</td>
<td>

<a class="btn btn-primary" href="/update_genre/{{$genres->id}}">Edit</a>
@csrf
<a class="btn btn-danger" href="/delete_genre/{{$genres->id}}">Delete</a>

@endforeach

</td>
</tr>
</tbody>
</table>
<span align="right">
   
{{$genre->links()}}
</span>
      </div>
    </main>
  </div>
</div>



 @endsection
