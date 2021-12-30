@extends('master')


@section('content')
 



<div class="page">
    <div class="page-header">
      <h1 class="page-title">Subject</h1>
      <div class="page-header-actions">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
          <li class="breadcrumb-item"><a >Subject</a></li>
          <li class="breadcrumb-item"><a >Edit</a></li>
        </ol>
      </div>
    </div>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif  
      <div class="page-content">
        <div class="row">
            <div class="col-lg-12">
        <!-- Panel -->
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Edit Subject Details</h3>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('subject.update', $product->id) }}" enctype="multipart/form-data" autocomplete="off">
                            @method('PATCH') 
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Subject Name</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" name="subject_name" id="subject_name" value="{{$product->subject_name}}" />
                                </div>
                                <label class="col-md-3 form-control-label">Semester</label>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="semester_id" id="semester_id" value="{{$product->semester_id}}"/>
                                </div>
                            </div>
                            <div class="form-group row">
                              <label class="col-md-3 form-control-label">Credit</label>
                              <div class="col-md-3">
                                  <input type="number" class="form-control" name="credit" id="credit" value="{{$product->credit}}"/>
                              </div>
                                <label class="col-md-3 form-control-label">Highest Grade</label>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="top" id="top" value="{{$product->top}}"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label">Expected Grade</label>
                                <div class="col-md-3">
                                    <input type="number" class="form-control" name="expected" id="expected" value="{{$product->expected}}"/>
                                </div>
                            </div>

                            <div class="form-group row">
                              <label class="col-md-3 form-control-label">Inactive</label>
                              <div class="col-md-9">
                                  <input type="text" class="form-control" name="expected" id="expected" />
                              </div>
                            </div>
                            
                            <div class="text-right">
                                <a class="btn btn-danger" href="{{ route('subject.index') }}"> Back</a>
                                <button type="submit" class="btn btn-primary" id="validateButton2" value="{{$product->id}}">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</div>


@endsection

