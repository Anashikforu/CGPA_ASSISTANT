@extends('master')


@section('content')

<div class="page">
  <div class="page-header">
    <h1 class="page-title">To Do</h1>
    <div class="page-header-actions">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a >To Do</a></li>
      </ol>
    </div>
  </div>

  <div class="page-content">
    <div class="row row-lg">
      <div class="col-lg-8">
    <!-- Panel -->
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-lg-12">
              <!-- Example Basic -->
              <div class="example-wrap">
                <h4 class="example-title text">{{$date}} {{$day}}</h4>
                <div class="example ">
                  <form class="form-horizontal" action="{{ route('todo.store') }}" method="POST"  autocomplete="off">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-4">
                          <input type="text" class="form-control" name="task_name" id="task_name" />
                          <input type="hidden"  name="user_id" id="user_id" value="{{Auth::user()->id}}"/>
                        </div>
                    
                        <div class="col-md-3">
                            <input type="date" class="form-control" name="task_date" id="task_date" value="{{date("Y-m-d", strtotime($date))}}"/>
                        </div>
                    
                        <div class="col-md-3">
                            <select class="form-control form-select" name="f_subject_id" id="f_subject_id" aria-label="Default select example">
                                  <option value="0" selected>Select</option>
                                @foreach ($subjects as $key => $subject)
                                  <option value="{{$subject->id}}">{{substr($subject->subject_name,7)}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-1">
                            <button type="submit" class="btn btn-primary" id="ed_author_create_submit" >Create</button>
                        </div>
                    </div>
    
                </form>

                    @foreach ($tasks as $item)
                      <div class="form-control task ">
                        <div class="form-group row">
                          <div class="col-md-9">
                            <h5 style="color: aliceblue">{{$item->task_name}} </h5>
                          </div>
                          <div class="col-md-3">
                            <button type="button" class="btn edit_status" style="padding: 0px !important" id="{{'edit'.$item->id}}" name="{{'edit'.$item->id}}"><i class="site-menu-icon wb-close" aria-hidden="true"></i></button>
                          </div>
                        </div>
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
      <div class="col-lg-4">

        <div class="panel">
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-lg-12">
                <!-- Example Basic -->
                <div class="example-wrap">
                  <h4 class="example-title text">{{$previous_date}} {{$previous_day}}</h4>
                  <div class="example ">
                    @foreach ($pre_tasks as $item)
                      <div class="form-control task ">
                        <div class="form-group row">
                          <div class="col-md-9">
                            <h5 style="color: aliceblue">{{$item->task_name}} </h5>
                          </div>
                          <div class="col-md-3">
                            @if ($item->status == 1)
                              <button type="button" class="btn edit_status" style="padding: 0px !important" id="{{'edit'.$item->id}}" name="{{'edit'.$item->id}}"><i class="site-menu-icon wb-check" aria-hidden="true"></i></button>
                            @endif
                          </div>
                        </div>
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

.task{
    border: 2px solid #5bc35b;
    background-color: #52cd52;
    width: fit-content !important;
}
</style>
    
@endpush

@push('js')
<script>
  $("document").ready(function () {
    $(".edit_status").click(function (e) { 
      e.preventDefault();
      let id = $(this).attr("id");
      id = id.substr(4);

            /*Ajax Request Header setup*/
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
            url: "{{ route('todo.updateStatus') }}",
            method: 'post',
            data: {
                id : id,
            },
            success: function(response){
                    window.location.reload();
            }});
    });
  });
</script>
@endpush