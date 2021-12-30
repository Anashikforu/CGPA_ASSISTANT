@extends('master')


@section('content')

<div class="page">
  <div class="page-header">
    <h1 class="page-title">Book</h1>
    <div class="page-header-actions">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a >Book</a></li>
      </ol>
    </div>
  </div>

  <div class="page-content">
    <!-- Panel -->
    <div class="panel">
      <div class="panel-body container-fluid">
        <div class="row row-lg">
          <div class="col-lg-12">
            <!-- Example Basic -->
            <div class="example-wrap">
              <h4 class="example-title">Book</h4>
              <a class="btn btn-success" href="{{ route('subject.create') }}"> Create New Book</a>
              <div class="example table-responsive">
                <table class="table table-responsive-xs table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Name (Bangla)</th>
                      <th>Code</th>
                      <th>Author</th>
                      <th>Type</th>
                      <th>Category</th>
                      <th>Buy Price</th>
                      <th>Sell Price</th>
                      <th>Stock</th>
                      <th>Comission Limit</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                </table>
              </div>
            </div>
            <!-- End Example Basic -->
          </div>
        </div>


</div>

@endsection