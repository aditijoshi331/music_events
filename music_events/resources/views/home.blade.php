@extends('layouts.app')

@section('content')
   @include('admin.layouts.sidebar');
<!-- <div class="container">
   
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

</div> -->

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
      </div>

      <h2>List of Events</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Sr No.</th>
              <th scope="col">Event Name</th>
              <th scope="col">Image </th>
              <th scope="col">Description</th>
              <th scope="col">Date </th>
              <th scope="col">Amount</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1,001</td>
              <td>random</td>
              <td>data</td>
              <td>placeholder</td>
              <td>text</td>
            </tr>
            
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
@endsection

