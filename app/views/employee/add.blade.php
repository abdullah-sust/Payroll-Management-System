@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    {{ $title }}
                    <span class="pull-right">

                            <a class="btn btn-success btn-sm" href="{{ URL::route('employee.index') }}">Employee List</a>

					</span>
                </header>
                <div class="panel-body">
                    {{ Form::open(array('route' => 'employee.store', 'class' => 'form-horizontal','files' => true)) }}

        <!-- input for firstName-->

                    <div class="form-group">
                        {{ Form::label('first_name', 'First Name*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('first_name', null, array('class' => 'form-control',  'placeholder' => 'First Name', 'required')) }}
                        </div>
                    </div>

        <!-- input for lastname -->

                    <div class="form-group">
                        {{ Form::label('last_name', 'Last Name*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('last_name', null, array('class' => 'form-control', 'placeholder' => 'Last Name', 'required')) }}
                        </div>
                    </div>


        <!-- input for email -->

                    <div class="form-group">
                        {{ Form::label('email', 'Email Address*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::email('email', null, array('class' => 'form-control', 'placeholder' => 'Email Address', 'required')) }}
                        </div>
                    </div>

        <!-- input for nid -->           

                    <div class="form-group">
                        {{ Form::label('nid', 'National ID', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('nid', null, array('class' => 'form-control', 'placeholder' => '', 'required')) }}
                        </div>
                    </div>

         <!-- input for sex -->           

                    <div class="form-group">
                        {{ Form::label('sex', 'Sex*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::radio('sex', 'Female', array('class' => 'form-control', 'required')) }} Female<br>
                            {{ Form::radio('sex', 'Male', array('class' => 'form-control', 'required')) }} Male
                        </div>
                    </div>

        <!-- input for blood_group -->           

                    <div class="form-group">
                        {{ Form::label('blood_group', 'Blood Group', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::select('blood_group', $bg,null, array('class' => 'form-control', 'required')) }}
                        </div>
                    </div>

        <!-- input for dateofbirth -->           

                    <div class="form-group">
                        {{ Form::label('dob', 'Date of Birth', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('dob', null, array('class' => 'form-control', 'placeholder' => 'mm/dd/yyyy', 'id' => 'dob')) }}
                        </div>
                    </div>

        <!-- input for marital_status -->           

                    <div class="form-group">
                        {{ Form::label('marital_status', 'Marital Status', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::radio('marital_status', 'Unmarried', true) }}<span> Unmarried</span><br>
                            {{ Form::radio('marital_status', 'Married' ) }} <span> Married</span>
                        </div>
                    </div>

        <!-- input for phone number-->

                    <div class="form-group">
                        {{ Form::label('contact', 'Contact Number*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('contact', null, array('class' => 'form-control',  'placeholder' => '+880 XXXX XXX XXX', 'required')) }}
                        </div>
                    </div>


        <!-- image upload  -->

                    <div class="form-group">
                        {{ Form::label('img_link', "Upload Photo", array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::file('img_link', array( 'class' => 'file-loading' , 'multiple'=>false, 'id' => 'input-4' )) }}
                        </div>
                    </div>
                   

     
        <!-- submit button  -->       

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            {{ Form::submit('Add Employee', array('class' => 'btn btn-primary')) }}
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
