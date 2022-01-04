@extends('master')


@section('content')

<div class="page">
  <div class="page-header">
    <h1 class="page-title">Subject</h1>
    <div class="page-header-actions">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a >Subject</a></li>
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
              <h4 class="example-title">Subject</h4>
              <div class="form-group row">
                  <div class="col-md-4">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#authorModal">Add</button>
                  </div>
                  <div class="col-md-5 form-group">
                    <select class="semester-selection" multiple="multiple" name="semster[]" id="semester">
                      @foreach ($semester as $key => $sem)
                        <option value="{{$sem}}" {{ in_array($sem,$selected_semester) ? 'selected' : '' }} > Semester {{$sem}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="col-md-2">
                        <button type="button" class="btn btn-info" >Calculated CGPA </button>
                  </div>
                  <div class="col-md-1">
                    @if ($cgpa > 8)
                        <button type="button" class="btn btn-success" id="cgpa" >{{$cgpa}}</button>
                    @else
                        <button type="button" class="btn btn-warning" id="cgpa" >{{$cgpa}}</button>
                    @endif
                        
                  </div>
              </div>
              <div class="example table-responsive">
                <table class="table table-responsive-xs table-striped">
                  <thead>
                    <tr class="table-active">
                      <th>#</th>
                      <th>Subject Name</th>
                      <th>Credit</th>
                      <th>Semester</th>
                      <th>Highest Grade</th>
                      <th>Expected Grade</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="tbody">
                  @foreach ($products as $key => $subject)
                    <tr  style="background-color: #808080; color: aliceblue !important">
                        <td style="background-color: #58CD36;">{{ ++$i }}</td>
                        <th style="background-color: #58CD36; font-size: 120%">{{ $subject->subject_name }}</th>
                        <td>{{ $subject->credit }}</td>
                        <th style="background-color: #58CD36; font-size: 120%">Semester {{ $subject->semester_id }}</th>
                        <td>{{ $subject->top }}</td>
                        <td>{{ $subject->expected }}</td>
                        <td><button type="button" class="{{ $subject->inactive == 0?'btn btn-sm btn-success': 'btn btn-sm btn-danger' }}">{{ $subject->inactive == 0?'Active': 'Inactive' }}</button> </td>
                        <td>
                          <form action="{{ route('subject.destroy',$subject->id) }}" method="POST">
                          
                              <a class="btn btn-primary" href="{{ route('subject.edit',$subject->id) }}">Edit</a>
            
                              @csrf
                              @method('DELETE')
                
                              <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                    </tr>
                   @endforeach
                </table>
              </div>
            </div>
            <!-- End Example Basic -->
          </div>
        </div>


</div>


<div class="modal fade" id="authorModal" tabindex="-1" role="dialog" aria-labelledby="authorModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="authorModalLabel">Create New Subject</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            
            <form class="form-horizontal" id="author_create"  autocomplete="off">
                @csrf
                <div class="form-group row">
                    <label class="col-md-3 form-control-label">Subject Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="subject_name" id="subject_name" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label">Credit</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="credit" id="credit" />
                    </div>
                </div>
                <div class="form-group row">
                      <label class="col-md-3 form-control-label">Semester</label>
                      <div class="col-md-9">
                          <input type="number" class="form-control" name="semester_id" id="semester_id"/>
                      </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label">Highest Grade</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="top" id="top" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-3 form-control-label">Expected Grade</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="expected" id="expected" />
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

        var author_name = $('#author_name').val();

        $('#author_create_submit').html('Sending..');
        /* Submit form data using ajax*/
        $.ajax({
            url: "{{ route('subject.store') }}",
            method: 'post',
            data: {
                subject_name : $('#subject_name').val(),
                credit : $('#credit').val(),
                top : $('#top').val(),
                semester_id : $('#semester_id').val(),
                expected : $('#expected').val(),
            },
            success: function(response){
              console.log(response);
                    $('#author_create_submit').html('Submit');
                    // $('#authorModal').modal('hide');
                    window.location.reload();
            }});
        });


        $(document).ready(function() {
          $('.semester-selection').select2({
              placeholder: "Select Semester",
              allowClear: true,
          });
        
          $('#semester').on('select2:select', function (e) {
              update();
          });

          $('#semester').on('select2:unselect', function (e) {
              update();
          });

          $('#semester').on('select2:clear', function (e) {
              update();
          });
          $(document).on('click', '.btn_update', function(){ 
              var button_id = $(this).attr("id"); 
              button_id = button_id.substring(2);

              window.location.href = '/subject/'+button_id+'/edit';
          });
          $(document).on('click', '.btn_remove', function(){  
              var button_id = $(this).attr("id"); 
              button_id = button_id.substring(3);

              $.ajax({
                type: "POST",
                data:{
                '_token': $('meta[name=csrf-token]').attr("content"),
                '_method': 'DELETE',
                },
                url: '/subject/'+button_id,
                success: function (response) {
                  window.location.reload();
                }
              });  
          });
        });

        
        
        function update() {
              var data =$('#semester').val();
              $.ajax({
                type: "get",
                url: "{{ route('subject.semester') }}",
                data: { semester:  JSON.stringify(data)},
                success: function (response) {
                    var cgpa = response.cgpa;
                    var products = response.products;

                    $("#cgpa").text(cgpa);
                    var td = ``;
                      var i = 0;
                    products.forEach(element => {
                      i++;

                      element_type = element.inactive == 0 ? "btn-success": "btn-danger";
                      element_status = element.inactive == 0 ? "Active": "Inactive";

                      td += `<tr style="background-color: #808080; color: aliceblue !important"><td style="background-color: #58CD36;">`+ i +`</td><th style="background-color: #58CD36; font-size: 120%"> `+ element.subject_name +`</th><td> `+ element.credit +`</td><th style="background-color: #58CD36; font-size: 120%">Semester `+ element.semester_id +`</th><td> `+ element.top +`</td><td> `+ element.expected +`</td><td><button type="button" class="btn btn-sm `+element_type+`"> `+ element_status +`</button> </td>`
                        td +=`<td><a class="btn btn-primary btn_update" id= up`+element.id+` >Edit</a> <a type="button" class="btn btn-danger btn_remove" id= del`+element.id+`>Delete</a></td><\tr >`;
                    });
                    $('#tbody').empty();
                    $('#tbody').append(td);
                }
              });
        }

</script>

@endPush