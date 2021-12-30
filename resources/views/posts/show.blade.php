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
              <a class="btn btn-success" href="{{ route('post.create') }}"> Create New Book</a>
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
                    @foreach ($data as $key => $book)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $book->book_name }}</td>
                        <td>{{ $book->book_name_bangla }}</td>
                        <td>{{ $book->book_code }}</td>
                        <td>{{ ($book->author == null)?$book->f_author_id :$book->author->author_name }}</td>
                        <td>{{ ($book->type == null)?$book->f_type_id :$book->type->type_name }}</td>
                        <td>{{ ($book->category == null)?$book->f_category_id :$book->category->category_name }}</td>
                        <td>{{ $book->buy_price }}</td>
                        <td>{{ $book->sell_price }}</td>
                        <td><span class="badge badge-warning"><strong>{{ $book->primary_stock }}</strong></span></td>
                        <td>{{ $book->commission_limit }}</td>
                        <td><span class="badge badge-success">{{ ($book->is_exist == 1 )? 'Active' : 'Inactive' }}</span></td>
                        <td><a class="btn btn-info btn-sm" href="{{ route('books.show',$book->id) }}">Show</a></td>
                        <td><a class="btn btn-primary btn-sm" href="{{ route('books.edit',$book->id) }}">Edit</a></td>
                        <td>{!! Form::open(['method' => 'DELETE','route' => ['books.destroy', $book->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                   @endforeach
                </table>
              </div>
            </div>
            <!-- End Example Basic -->
          </div>
        </div>

{!! $data->render() !!}

</div>

@endsection