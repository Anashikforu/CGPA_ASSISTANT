@extends('master')


@section('content')
 



<div class="page">
    <div class="page-header">
      <h1 class="page-title">{{$product->subject_name}}</h1>
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
                                    <input type="hidden"  name="f_subject_id" id="f_subject_id" value="{{$product->id}}" />
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
                            
                                <label class="col-md-3 form-control-label">Progress</label>
                                <div class="progress col-md-3" style="padding: 0% !important">
                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-md-3 form-control-label"></label>
                                <div class="col-md-3">
                                    <div class="form-group form-check row">
                                        <input type="checkbox" class="form-check-input" name="active" id="active" {{ $product->inactive == '0' ? 'checked' : '' }} value= {{ $product->inactive }} >
                                        <label class="form-check-label" for="active">Active</label>
                                        <input type="hidden" class="form-control" name="inactive" id="inactive" value="{{$product->inactive}}"/>
                                    </div>
                                </div>
                            </div>

                            
                            <div class="text-right">
                                <a class="btn btn-danger" href="{{ route('subject.index') }}"> Back</a>
                                <button type="submit" class="btn btn-primary" id="validateButton2" value="{{$product->id}}">Submit</button>
                            </div>

                            
                        </form>
                        @php
                            $i = 0;
                            $j = 0;
                        @endphp
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#routineModal">Add Class Time</button>
                        <div class="example table-responsive">
                            <table class="table table-responsive-xs table-striped">
                              <thead>
                                <tr class="table-active">
                                  <th>#</th>
                                  <th>Weekday</th>
                                  <th>Lecture</th>
                                  <th>Slot</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody id="tbody">
                              @foreach ($routines as $key => $routine)
                                <tr  style="background-color: #808080; color: aliceblue !important">
                                    <td style="background-color: #58CD36;">{{ ++$j }}</td>
                                    <td style="background-color: #58CD36;">{{$routine->weekday }}</td>
                                    <td>{{ $routine->lecture }}</td>
                                    <td>{{ $routine->slot }}</td>
                                    <td>
                                      <form action="{{ route('routine.destroy',$routine->id) }}" method="POST">
                                      
                                          {{-- <a class="btn btn-primary" href="{{ route('routine.edit',$routine->id) }}">Edit</a> --}}
                        
                                          @csrf
                                          @method('DELETE')
                            
                                          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                      </form>
                                    </td>
                                </tr>
                               @endforeach
                            </table>
                          </div>
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#examModal">Add Exam</button>
                        <div class="example table-responsive">
                            <table class="table table-responsive-xs table-striped">
                              <thead>
                                <tr class="table-active">
                                  <th>#</th>
                                  <th>Date</th>
                                  <th>Exam Name</th>
                                  <th>Mark</th>
                                  <th>Feedback</th>
                                  <th>Status</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody id="tbody">
                              @foreach ($exams as $key => $exam)
                                <tr  style="background-color: #808080; color: aliceblue !important">
                                    <td style="background-color: #58CD36;">{{ ++$i }}</td>
                                    <td style="background-color: #58CD36;">{{ $exam->exam_date.' '.$exam->exam_time }}</td>
                                    <th style="background-color: #58CD36; font-size: 120%">{{ $exam->exam_name }}</th>
                                    <td>{{ $exam->mark }}</td>
                                    <th style="background-color: #58CD36; font-size: 120%"> {{ $exam->feedback }}</th>
                                    <th style="background-color: #58CD36; font-size: 120%"> {{ $exam->status == 1?'Submittes': 'Due' }}</th>
                                    <td>
                                      <form action="{{ route('exams.destroy',$exam->id) }}" method="POST">
                                      
                                        <button type="button" class="btn btn-warning editExam" data-toggle="modal" data-target="#editExam">Edit</button>
                        
                                          @csrf
                                          @method('DELETE')
                            
                                          <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                      </form>
                                    </td>
                                </tr>
                               @endforeach
                            </table>
                          </div>
                    </div>
                </div>
            </div>
        </div>
        

        <div class="modal fade" id="routineModal" tabindex="-1" role="dialog" aria-labelledby="routineModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="routineModalLabel">Create New Slot</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    
                    <form class="form-horizontal" id="author_create"  autocomplete="off">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Time</label>
                            <div class="col-md-9">
                                <input type="time" class="form-control" name="slot" id="slot" />
                            </div>
                        </div>
                        <div class="form-group row">
                              <label class="col-md-3 form-control-label">lecture</label>
                              <div class="col-md-9">
                                  <input type="number" class="form-control" name="lecture" id="lecture"/>
                              </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Weekday</label>
                            <div class="col-md-9">
                                <select class="form-select" name="weekday" id="weekday" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="Monday" selected>Monday</option>
                                    <option value="Tuesday">Tuesday</option>
                                    <option value="Wednesday">Wednesday</option>
                                    <option value="Thursday">Thursday</option>
                                    <option value="Friday" >Friday</option>
                                </select>
                            </div>
                        </div>
                        
        
                        <div class="text-right"> 
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="routine_create_submit" >Submit</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
        </div>

        <div class="modal fade" id="examModal" tabindex="-1" role="dialog" aria-labelledby="examModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="examModalLabel">Create New Exam</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    
                    <form class="form-horizontal" id="author_create"  autocomplete="off">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Exam Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="exam_name" id="exam_name" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Date</label>
                            <div class="col-md-9">
                                <input type="date" class="form-control" name="exam_date" id="exam_date" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Time</label>
                            <div class="col-md-9">
                                <input type="time" class="form-control" name="exam_time" id="exam_time" />
                            </div>
                        </div>
                        <div class="form-group row">
                              <label class="col-md-3 form-control-label">Weight</label>
                              <div class="col-md-9">
                                  <input type="number" class="form-control" name="weight" id="weight"/>
                              </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Mark</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="mark" id="mark" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Feedback</label>
                            <div class="col-md-9">
                                <select class="form-select" name="feedback" id="feedback" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="Better">Better</option>
                                    <option value="Good">Good</option>
                                    <option value="Average">Average</option>
                                    <option value="Below Avg">Below Avg</option>
                                    <option value="Disaster" selected>Disaster</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 form-control-label"></label>
                            <div class="col-md-3">
                                <div class="form-group form-check row">
                                    <input type="checkbox" class="form-check-input status" name="status" id="status"  >
                                    <label class="form-check-label" for="status">Submission</label>
                                </div>
                            </div>
                        </div>
                        
        
                        <div class="text-right"> 
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="author_create_submit" >Submit</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
        </div>


        <div class="modal fade" id="editExam" tabindex="-1" role="dialog" aria-labelledby="editExamLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="editExamLabel">Edit  Exam</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    
                    <form class="form-horizontal" id="author_create"  autocomplete="off">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Exam Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="ed_exam_name" id="ed_exam_name" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Date</label>
                            <div class="col-md-9">
                                <input type="date" class="form-control" name="ed_exam_date" id="ed_exam_date" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Time</label>
                            <div class="col-md-9">
                                <input type="time" class="form-control" name="ed_exam_time" id="ed_exam_time" />
                            </div>
                        </div>
                        <div class="form-group row">
                              <label class="col-md-3 form-control-label">Weight</label>
                              <div class="col-md-9">
                                  <input type="number" class="form-control" name="ed_weight" id="ed_weight"/>
                              </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Mark</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="ed_mark" id="ed_mark" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Feedback</label>
                            <div class="col-md-9">
                                <select class="form-select" name="ed_feedback" id="ed_feedback" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="Better">Better</option>
                                    <option value="Good">Good</option>
                                    <option value="Average">Average</option>
                                    <option value="Below Avg">Below Avg</option>
                                    <option value="Disaster" selected>Disaster</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3 form-control-label"></label>
                            <div class="col-md-3">
                                <div class="form-group form-check row">
                                    <input type="checkbox" class="form-check-input status" name="ed_status" id="ed_status"  >
                                    <label class="form-check-label" for="status">Submission</label>
                                </div>
                            </div>
                        </div>
                        
        
                        <div class="text-right"> 
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" id="ed_author_create_submit" >Submit</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
        </div>

</div>


@endsection

@push('js')
<script>
    //-----------Author Modal--------------------------------------------------------------------

    $('#author_create_submit').click(function(e){
        e.preventDefault();
        
        /*Ajax Request Header setup*/
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let status = $('#status').val() == true? 1: 0;
        $('#author_create_submit').html('Sending..');
        /* Submit form data using ajax*/
        $.ajax({
            url: "{{ route('exams.store') }}",
            method: 'post',
            data: {
                exam_name : $('#exam_name').val(),
                exam_date : $('#exam_date').val(),
                exam_time : $('#exam_time').val(),
                f_subject_id : $('#f_subject_id').val(),
                weight : $('#weight').val(),
                mark : $('#mark').val(),
                feedback : $('#feedback').val(),
                status: status
            },
            success: function(response){
              console.log(response);
                    $('#author_create_submit').html('Submit');
                    window.location.reload();
            }});
        });

        
        $('#routine_create_submit').click(function(e){
        e.preventDefault();
        
        /*Ajax Request Header setup*/
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('#routine_create_submit').html('Sending..');
        /* Submit form data using ajax*/
        $.ajax({
            url: "{{ route('routine.store') }}",
            method: 'post',
            data: {
                weekday : $('#weekday').val(),
                slot : $('#slot').val(),
                f_subject_id : $('#f_subject_id').val(),
                lecture : $('#lecture').val(),
            },
            success: function(response){
              console.log(response);
                    $('#routine_create_submit').html('Submit');
                    window.location.reload();
            }});
        });


    $("document").ready(function() {
        $(document).on('click', '.form-check-input', function(){ 
             if($('#active').prop('checked') == false){
                $("#inactive").val(1);
             }else{
                 $("#inactive").val(0);
             }
          });

          $(document).on('click', '.editExam', function(){ 
             alert("will work later !");
          });
        
    });
</script>
@endPush