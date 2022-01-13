@extends('master')


@section('content')

<div class="page">
  <div class="page-header">
    <h1 class="page-title">Monitor</h1>
    <div class="page-header-actions">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
        <li class="breadcrumb-item"><a >Monitor</a></li>
      </ol>
    </div>
  </div>

  <div class="page-content">
    <div class="row row-lg">
      <div class="col-lg-4">
    <!-- Panel -->
      <div class="panel">
        <div class="panel-body container-fluid">
          <div class="row row-lg">
            <div class="col-lg-12">
              <!-- Example Basic -->
              <div class="example-wrap">
                <h4 class="example-title text">{{$date}} {{$day}}</h4>
                <div class="example ">
                    <form class="form-horizontal" id="author_create"  autocomplete="off">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-6 form-control-label text">Sleeping Hour</label>
                            <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="slpbtn_plus" name="slpbtn_plus"><i class="site-menu-icon wb-plus " aria-hidden="true"></i></button>
                            </div>
                            <div class="col-md-2 paddingZero">
                                <input type="text" readonly class="form-control" name="sleeping_hour" id="sleeping_hour" value="{{$day_monitor->sleeping_hour}}" />
                                <input type="hidden" class="form-control" name="regular_date" id="regular_date" value="{{$day_monitor->regular_date}}"/>
                            </div>
                            <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="slpbtn_minus" name="slpbtn_minus"><i class="site-menu-icon wb-minus " aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <div class="form-group row">
                              <label class="col-md-6 form-control-label text2">Study Hour</label>
                              <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="stdbtn_plus" name="stdbtn_plus"><i class="site-menu-icon wb-plus " aria-hidden="true"></i></button>
                              </div>
                              <div class="col-md-2 paddingZero">
                                  <input type="text" readonly class="form-control" name="study_hour" id="study_hour" value="{{$day_monitor->study_hour}}"/>
                              </div>
                              <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="stdbtn_minus" name="stdbtn_minus"><i class="site-menu-icon wb-minus " aria-hidden="true"></i></button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-6 form-control-label text">Exercise Hour</label>
                            <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="exbtn_plus" name="exbtn_plus"><i class="site-menu-icon wb-plus " aria-hidden="true"></i></button>
                            </div>
                            <div class="col-md-2 paddingZero">
                                <input type="text" readonly class="form-control" name="walking_hour" id="walking_hour" value="{{$day_monitor->walking_hour}}"/>
                            </div>
                            <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="exbtn_minus" name="exbtn_minus"><i class="site-menu-icon wb-minus " aria-hidden="true"></i></button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-6 form-control-label text2">Interaction Hour</label>
                            <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="mbtn_plus" name="mbtn_plus"><i class="site-menu-icon wb-plus " aria-hidden="true"></i></button>
                            </div>
                            <div class="col-md-2 paddingZero">
                                <input type="text" readonly class="form-control" name="meeting_hour" id="meeting_hour" value="{{$day_monitor->meeting_hour}}"/>
                            </div>
                            <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="mbtn_minus" name="mbtn_minus"><i class="site-menu-icon wb-minus " aria-hidden="true"></i></button>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-6 form-control-label text">Entertainment Hour</label>
                            <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="enbtn_plus" name="enbtn_plus"><i class="site-menu-icon wb-plus " aria-hidden="true"></i></button>
                            </div>
                            <div class="col-md-2 paddingZero">
                                <input type="text" readonly class="form-control" name="entertainment_hour" id="entertainment_hour" value="{{$day_monitor->entertainment_hour}}" />
                            </div>
                            <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="enbtn_minus" name="enbtn_minus"><i class="site-menu-icon wb-minus " aria-hidden="true"></i></button>
                            </div>
                      </div>

                    </form>
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
                    <form class="form-horizontal"   autocomplete="off">
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-6 form-control-label text">Sleeping Hour</label>
                            <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="pre_slpbtn_plus" name="pre_slpbtn_plus"><i class="site-menu-icon wb-plus " aria-hidden="true"></i></button>
                            </div>
                            <div class="col-md-2 paddingZero">
                                <input type="text" readonly class="form-control" name="pre_sleeping_hour" id="pre_sleeping_hour" value="{{$previous_day_monitor->sleeping_hour}}" />
                                <input type="hidden" class="form-control" name="pre_regular_date" id="pre_regular_date" value="{{$previous_day_monitor->regular_date}}"/>
                            </div>
                            <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="pre_slpbtn_minus" name="pre_slpbtn_minus"><i class="site-menu-icon wb-minus " aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <div class="form-group row">
                              <label class="col-md-6 form-control-label text2">Study Hour</label>
                              <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="pre_stdbtn_plus" name="pre_stdbtn_plus"><i class="site-menu-icon wb-plus " aria-hidden="true"></i></button>
                              </div>
                              <div class="col-md-2 paddingZero">
                                  <input type="text" readonly class="form-control" name="pre_study_hour" id="pre_study_hour" value="{{$previous_day_monitor->study_hour}}"/>
                              </div>
                              <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="pre_stdbtn_minus" name="pre_stdbtn_minus"><i class="site-menu-icon wb-minus " aria-hidden="true"></i></button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-6 form-control-label text">Exercise Hour</label>
                            <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="pre_exbtn_plus" name="pre_exbtn_plus"><i class="site-menu-icon wb-plus " aria-hidden="true"></i></button>
                            </div>
                            <div class="col-md-2 paddingZero">
                                <input type="text" readonly class="form-control" name="pre_walking_hour" id="pre_walking_hour" value="{{$previous_day_monitor->walking_hour}}"/>
                            </div>
                            <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="pre_exbtn_minus" name="pre_exbtn_minus"><i class="site-menu-icon wb-minus " aria-hidden="true"></i></button>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-6 form-control-label text2">Interaction Hour</label>
                            <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="pre_mbtn_plus" name="pre_mbtn_plus"><i class="site-menu-icon wb-plus " aria-hidden="true"></i></button>
                            </div>
                            <div class="col-md-2 paddingZero">
                                <input type="text" readonly class="form-control" name="pre_meeting_hour" id="pre_meeting_hour" value="{{$previous_day_monitor->meeting_hour}}"/>
                            </div>
                            <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="pre_mbtn_minus" name="pre_mbtn_minus"><i class="site-menu-icon wb-minus " aria-hidden="true"></i></button>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-md-6 form-control-label text">Entertainment Hour</label>
                            <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="pre_enbtn_plus" name="pre_enbtn_plus"><i class="site-menu-icon wb-plus " aria-hidden="true"></i></button>
                            </div>
                            <div class="col-md-2 paddingZero">
                                <input type="text" readonly class="form-control" name="pre_entertainment_hour" id="pre_entertainment_hour" value="{{$previous_day_monitor->entertainment_hour}}" />
                            </div>
                            <div class="col-md-2 paddingZero">
                                <button type="button" class="btn" id="pre_enbtn_minus" name="pre_enbtn_minus"><i class="site-menu-icon wb-minus " aria-hidden="true"></i></button>
                            </div>
                      </div>

                    </form>
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
                      <h4 class="example-title text">{{$date_before_previous}} {{$day_before_previous}}</h4>
                      <div class="example ">
                        <form class="form-horizontal"   autocomplete="off">
                            @csrf
                            <div class="form-group row">
                                <label class="col-md-6 form-control-label black_text">Sleeping Hour</label>
                                <div class="col-md-6 paddingZero">
                                    <input type="text" readonly class="form-control" name="pre_sleeping_hour" id="pre_sleeping_hour" value="{{$day_before_previous_monitor->sleeping_hour}}" />
                                </div>
                            </div>
                            <div class="form-group row">
                                  <label class="col-md-6 form-control-label black_text">Study Hour</label>
                                  <div class="col-md-6 paddingZero">
                                      <input type="text" readonly class="form-control" name="pre_study_hour" id="pre_study_hour" value="{{$day_before_previous_monitor->study_hour}}"/>
                                  </div>
                            </div>
    
                            <div class="form-group row">
                                <label class="col-md-6 form-control-label black_text">Exercise Hour</label>
                                <div class="col-md-6 paddingZero">
                                    <input type="text" readonly class="form-control" name="pre_walking_hour" id="pre_walking_hour" value="{{$day_before_previous_monitor->walking_hour}}"/>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label class="col-md-6 form-control-label black_text">Interaction Hour</label>
                                <div class="col-md-6 paddingZero">
                                    <input type="text" readonly class="form-control" name="pre_meeting_hour" id="pre_meeting_hour" value="{{$day_before_previous_monitor->meeting_hour}}"/>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-md-6 form-control-label black_text">Entertainment Hour</label>
                                <div class="col-md-6 paddingZero">
                                    <input type="text" readonly class="form-control" name="pre_entertainment_hour" id="pre_entertainment_hour" value="{{$day_before_previous_monitor->entertainment_hour}}" />
                                </div>
                          </div>
                        </form>
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
   font-weight: bold;
}

.text2{
  text-transform:uppercase;
  margin:0 auto;
  background-image:linear-gradient(90deg,#f11010,#ddb7c2);
   background-clip: text;
  -moz-background-clip: text;
  -webkit-background-clip: text;
   color:transparent;
   font-weight: bold;
}

.black_text{
  margin:0 auto;
  background-image:linear-gradient(90deg,#101214,#0c0c0c);
   background-clip: text;
  -moz-background-clip: text;
  -webkit-background-clip: text;
   color:transparent;
   font-weight: bold;
   text-align: start !important;
}

.paddingZero{
    padding: 0rem !important;
    text-align: center !important;
}
</style>
    
@endpush

@push('js')
<script>

        function store() {
            /*Ajax Request Header setup*/
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
            url: "{{ route('monitor.store') }}",
            method: 'post',
            data: {
                sleeping_hour : $('#sleeping_hour').val(),
                study_hour : $('#study_hour').val(),
                walking_hour : $('#walking_hour').val(),
                meeting_hour : $('#meeting_hour').val(),
                entertainment_hour : $('#entertainment_hour').val(),
                regular_date : $('#regular_date').val(),
            },
            success: function(response){
                    console.log(response);
            }});
        }

        function pre_store() {
            /*Ajax Request Header setup*/
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
            url: "{{ route('monitor.store') }}",
            method: 'post',
            data: {
                sleeping_hour : $('#pre_sleeping_hour').val(),
                study_hour : $('#pre_study_hour').val(),
                walking_hour : $('#pre_walking_hour').val(),
                meeting_hour : $('#pre_meeting_hour').val(),
                entertainment_hour : $('#pre_entertainment_hour').val(),
                regular_date : $('#pre_regular_date').val(),
            },
            success: function(response){
                    console.log(response);
            }});
        }


    $("document").ready(function() {
            let othersum = 0, stdval = 0, slpval=0;
            $("#slpbtn_plus").click(function (e) { 
                e.preventDefault();
                slpval = $("#sleeping_hour").val();
                othersum = $("#sleeping_hour").val()*1 + $("#study_hour").val()*1 + $("#walking_hour").val()*1 + $("#meeting_hour").val()*1 + $("#entertainment_hour").val()*1;
                if(othersum < 24){
                    slpval++;
                
                    $("#sleeping_hour").val(slpval);
                    store();
                }
                
            });

            $("#slpbtn_minus").click(function (e) { 
                e.preventDefault();
                slpval = $("#sleeping_hour").val();
                if(slpval > 0){
                    slpval--;
                
                    $("#sleeping_hour").val(slpval);
                    store();
                }
                
            });

            $("#stdbtn_plus").click(function (e) { 
                e.preventDefault();
                stdval = $("#study_hour").val();
                othersum = $("#sleeping_hour").val()*1 + $("#study_hour").val()*1 + $("#walking_hour").val()*1 + $("#meeting_hour").val()*1 + $("#entertainment_hour").val()*1;
                if(othersum < 24){
                    stdval++;
                
                    $("#study_hour").val(stdval);
                    store();
                }
                
            });

            $("#stdbtn_minus").click(function (e) { 
                e.preventDefault();
                stdval = $("#study_hour").val();
                if(stdval > 0){
                    stdval--;
                
                    $("#study_hour").val(stdval);
                    store();
                }
                
            });

            $("#exbtn_plus").click(function (e) { 
                e.preventDefault();
                let exval = $("#walking_hour").val();
                othersum = $("#sleeping_hour").val()*1 + $("#study_hour").val()*1 + $("#walking_hour").val()*1 + $("#meeting_hour").val()*1 + $("#entertainment_hour").val()*1;
                if(othersum < 24){
                    exval++;
                
                    $("#walking_hour").val(exval);
                    store();
                }
                
            });

            $("#exbtn_minus").click(function (e) { 
                e.preventDefault();
                let exval = $("#walking_hour").val();
                if(exval > 0){
                    exval--;
                
                    $("#walking_hour").val(exval);
                    store();
                }
                
            });

            $("#mbtn_plus").click(function (e) { 
                e.preventDefault();
                let mval = $("#meeting_hour").val();
                othersum = $("#sleeping_hour").val()*1 + $("#study_hour").val()*1 + $("#walking_hour").val()*1 + $("#meeting_hour").val()*1 + $("#entertainment_hour").val()*1;
                if(othersum < 24){
                    mval++;
                
                    $("#meeting_hour").val(mval);
                    store();
                }
                
            });

            $("#mbtn_minus").click(function (e) { 
                e.preventDefault();
                let mval = $("#meeting_hour").val();
                if(mval > 0){
                    mval--;
                
                    $("#meeting_hour").val(mval);
                    store();
                }
                
            });

            $("#enbtn_plus").click(function (e) { 
                e.preventDefault();
                let enval = $("#entertainment_hour").val();
                othersum = $("#sleeping_hour").val()*1 + $("#study_hour").val()*1 + $("#walking_hour").val()*1 + $("#meeting_hour").val()*1 + $("#entertainment_hour").val()*1;
                if(othersum < 24){
                    enval++;
                
                    $("#entertainment_hour").val(enval);
                    store();
                }
                
            });

            $("#enbtn_minus").click(function (e) { 
                e.preventDefault();
                let enval = $("#entertainment_hour").val();
                if(enval > 0){
                    enval--;
                
                    $("#entertainment_hour").val(enval);
                    store();
                }
                
            });


            $("#pre_slpbtn_plus").click(function (e) { 
                e.preventDefault();
                slpval = $("#pre_sleeping_hour").val();
                othersum = $("#pre_sleeping_hour").val()*1 + $("#pre_study_hour").val()*1 + $("#pre_walking_hour").val()*1 + $("#pre_meeting_hour").val()*1 + $("#pre_entertainment_hour").val()*1;
                if(othersum < 24){
                    slpval++;
                    
                    $("#pre_sleeping_hour").val(slpval);
                    pre_store();
                }
                
            });

            $("#pre_slpbtn_minus").click(function (e) { 
                e.preventDefault();
                slpval = $("#pre_sleeping_hour").val();
                if(slpval > 0){
                    slpval--;
                    
                    $("#pre_sleeping_hour").val(slpval);
                    pre_store();
                }
                
            });

            $("#pre_stdbtn_plus").click(function (e) { 
                e.preventDefault();
                stdval = $("#pre_study_hour").val();
                othersum = $("#pre_sleeping_hour").val()*1 + $("#pre_study_hour").val()*1 + $("#pre_walking_hour").val()*1 + $("#pre_meeting_hour").val()*1 + $("#pre_entertainment_hour").val()*1;
                if(othersum < 24){
                    stdval++;
                    
                    $("#pre_study_hour").val(stdval);
                    pre_store();
                }
                
            });

            $("#pre_stdbtn_minus").click(function (e) { 
                e.preventDefault();
                stdval = $("#pre_study_hour").val();
                if(stdval > 0){
                    stdval--;
                    
                    $("#pre_study_hour").val(stdval);
                    pre_store();
                }
                
            });

            $("#pre_exbtn_plus").click(function (e) { 
                e.preventDefault();
                let exval = $("#pre_walking_hour").val();
                othersum = $("#pre_sleeping_hour").val()*1 + $("#pre_study_hour").val()*1 + $("#pre_walking_hour").val()*1 + $("#pre_meeting_hour").val()*1 + $("#pre_entertainment_hour").val()*1;
                if(othersum < 24){
                    exval++;
                    
                    $("#pre_walking_hour").val(exval);
                    pre_store();
                }
                
            });

            $("#pre_exbtn_minus").click(function (e) { 
                e.preventDefault();
                let exval = $("#pre_walking_hour").val();
                if(exval > 0){
                    exval--;
                    
                    $("#pre_walking_hour").val(exval);
                    pre_store();
                }
                
            });

            $("#pre_mbtn_plus").click(function (e) { 
                e.preventDefault();
                let mval = $("#pre_meeting_hour").val();
                othersum = $("#pre_sleeping_hour").val()*1 + $("#pre_study_hour").val()*1 + $("#pre_walking_hour").val()*1 + $("#pre_meeting_hour").val()*1 + $("#pre_entertainment_hour").val()*1;
                if(othersum < 24){
                    mval++;
                    
                    $("#pre_meeting_hour").val(mval);
                    pre_store();
                }
                
            });

            $("#pre_mbtn_minus").click(function (e) { 
                e.preventDefault();
                let mval = $("#pre_meeting_hour").val();
                if(mval > 0){
                    mval--;
                    
                    $("#pre_meeting_hour").val(mval);
                    pre_store();
                }
                
            });

            $("#pre_enbtn_plus").click(function (e) { 
                e.preventDefault();
                let enval = $("#pre_entertainment_hour").val();
                othersum = $("#pre_sleeping_hour").val()*1 + $("#pre_study_hour").val()*1 + $("#pre_walking_hour").val()*1 + $("#pre_meeting_hour").val()*1 + $("#pre_entertainment_hour").val()*1;
                if(othersum < 24){
                    enval++;
                    
                    $("#pre_entertainment_hour").val(enval);
                    pre_store();
                }
                
            });

            $("#pre_enbtn_minus").click(function (e) { 
                e.preventDefault();
                let enval = $("#pre_entertainment_hour").val();
                if(enval > 0){
                    enval--;
                    
                    $("#pre_entertainment_hour").val(enval);
                    pre_store();
                }
                
            });
        
    });
</script>
@endPush