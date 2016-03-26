@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    <b>{{ $title }} || Employee ID: <span style="color:green">{{ $history->user->employeeID }}</span> || Name: <span style="color:green">{{ $history->user->profile->first_name }} {{ $history->user->profile->last_name }}</span></b>
                    
                    <span class="pull-right">

                            <a class="btn btn-success btn-sm" href="{{ URL::route('history.index') }}">All Records</a>

					</span>
                </header>
                <div class="panel-body">

                    {{ Form::model($history,['route' => ['history.update',$history->id], 'class' => 'form-horizontal', 'method' => 'put' ])}}


                <!-- input for name-->

                     <div class="form-group">
                        {{ Form::label('year', 'Year', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('year', null, array('class' => 'form-control',  'placeholder' => '2012', 'required')) }}
                        </div>
                    </div>
                    
                    <div class="form-group">
                        {{ Form::label('month', 'Month', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::select('month', $month, '',array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('status', 'Status', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::select('status', $status, '',array('class' => 'form-control')) }}
                        </div>
                    </div>


               

                <!-- submit button  -->

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    {{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}
                                </div>
                            </div>

                    {{ Form::close() }}
                       

                </div>
            </section>
        </div>
    </div>
@stop

@section('style')
    {{ HTML::style('assets/bootstrap-datepicker/css/datepicker.css') }}

@stop



@section('script')


    {{ HTML::script('assets/bootstrap-datepicker/js/bootstrap-datepicker.js') }}


   
    <!-- image drag&drop and upload plugin  -->

    <script>
    $(document).on('ready', function() {

        /*$("#date").datepicker({
                format: 'yyyy-mm-dd'
            });*/
            $( "#join_date" ).datepicker( "setDate", new Date() ); 
    });
    </script>    
    
@stop
