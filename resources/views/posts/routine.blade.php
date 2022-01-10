@extends('master')


@section('content')

<div class="page">
  <div class="page-header">
    <h1 class="page-title">Classes</h1>
    <div class="page-header-actions">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a >Classes</a></li>
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
              <h4 class="example-title text">{{$day}}</h4>
              <div class="example ">
                @foreach ($classes as $key => $subject)
                    <div class="form-group row">
                        <h5 class='col-md-5  text'>{{$subject->subject->subject_name}}</h5>
                        <h5 class='col-md-5  text'>{{$subject->slot}} - {{date("H:i", strtotime('+'.$subject->lecture.'hours - 5 minutes ',strtotime($subject->slot)))}}</h5>
                    </div>
                @endforeach
              </div>
            </div>
            <!-- End Example Basic -->
          </div>
        </div>
        </div>
      </div>

      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-lg-9">
              <!-- Example Basic -->
              <div class="example-wrap">
                <h4 class="example-title text2">Assignment Submission & Exam</h4>
                <div class="example ">
                  @if (json_decode($exams,true) == [])
                    <h3 class='text-center  text'>No Exam / Assignment!!</h3>
                  @endif
                  @foreach ($exams as $key => $subject)
                      <div class="form-group row ">
                          <h5 class='col-md-3  text2'>{{$subject->subject->subject_name}}</h5>
                          <h5 class='col-md-2  text'>{{$subject->exam_name}}</h5>
                          <h5 class='col-md-2  text2'>{{$subject->exam_date.' '.substr($subject->exam_time,0,5)}}</h5>
                          <span class="col-md-1 badge badge-success">{{$subject->status == 1? 'Submitted':''}}</span>
                      </div>
                  @endforeach
                </div>
              </div>
              <!-- End Example Basic -->
            </div>
          </div>
          </div>
        </div>

</div>

@endsection

@push('css')
<style>
.text{
  text-transform:uppercase;
  margin:0 auto;
  background-image:linear-gradient(90deg,#7db5ff,#e85c86);
   background-clip: text;
  -moz-background-clip: text;
  -webkit-background-clip: text;
   color:transparent;
}

.text2{
  text-transform:uppercase;
  margin:0 auto;
  background-image:linear-gradient(90deg,#f11010,#ddb7c2);
   background-clip: text;
  -moz-background-clip: text;
  -webkit-background-clip: text;
   color:transparent;
}
</style>
    
@endpush