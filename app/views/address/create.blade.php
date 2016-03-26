@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    {{ $title }}
                    <span class="pull-right">

                            <a class="btn btn-success btn-sm" href="{{ URL::route('employee.index') }}">Employee Address List</a>

					</span>
                </header>
                <div class="panel-body">
                    {{ Form::open(array('route' => 'address.store', 'class' => 'form-horizontal','files' => true)) }}

        <!-- input for blood_group -->           

                    <div class="form-group">
                        {{ Form::label('user_id', 'Employee ID', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::select('user_id',$users,null, array('class' => 'form-control', 'required')) }}
                        </div>
                    </div>
        <!-- input for firstName-->

                    <div class="form-group">
                        {{ Form::label('street', 'Street', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('street', null, array('class' => 'form-control',  'placeholder' => 'Street', 'required')) }}
                        </div>
                    </div>
        <!-- input for firstName-->

                    <div class="form-group">
                        {{ Form::label('postal_code', 'Postal Code', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('postal_code', null, array('class' => 'form-control',  'placeholder' => 'Postal Code', 'required')) }}
                        </div>
                    </div>
        <!-- input for firstName-->

                    <div class="form-group">
                        {{ Form::label('police_station', 'Police Station', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('police_station', null, array('class' => 'form-control',  'placeholder' => 'Police Station', 'required')) }}
                        </div>
                    </div>
        <!-- input for firstName-->

                    <div class="form-group">
                        {{ Form::label('city', 'City', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('city', null, array('class' => 'form-control',  'placeholder' => 'City', 'required')) }}
                        </div>
                    </div>
        <!-- input for firstName-->

                    <div class="form-group">
                        {{ Form::label('country', 'Country', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('country', null, array('class' => 'form-control',  'placeholder' => 'Country', 'required')) }}
                        </div>
                    </div>
                    
        <!-- submit button  -->       

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            {{ Form::submit('Address Submit', array('class' => 'btn btn-primary')) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
                
            </section>
        </div>
    </div>
@stop



@section('style')
    {{ HTML::style('css/chosen_dropdown/chosen.css') }}
    {{ HTML::style('rename/css/fileinput.min.css') }}
	{{ HTML::style('assets/bootstrap-datepicker/css/datepicker.css') }}

@stop



@section('script')

    {{ HTML::script('js/chosen_dropdown/chosen.jquery.min.js') }}
    {{ HTML::script('rename/js/plugins/canvas-to-blob.min.js') }}
    {{ HTML::script('rename/js/fileinput_locale_<lang>.js') }}
    {{ HTML::script('rename/js/fileinput.min.js') }}
    {{ HTML::script('assets/bootstrap-datepicker/js/bootstrap-datepicker.js') }}


   
    <!-- image drag&drop and upload plugin  -->

    <script>
    $(document).on('ready', function() {
        $("#input-4").fileinput({showCaption: false});
        /*$("#date").datepicker({
                format: 'yyyy-mm-dd'
            });*/
            $( "#dob" ).datepicker( "setDate", new Date() ); 
    });
    </script>    
    
@stop
