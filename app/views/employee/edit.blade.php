@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    {{ $title }}
                    <span class="pull-right">

                            <a class="btn btn-success btn-sm" href="{{ URL::route('employee.index') }}">All Employee</a>

					</span>
                </header>
                <div class="panel-body">
                   
                    {{ Form::model($employee,['route' => ['employee.update',$employee->id], 'class' => 'form-horizontal', 'method' => 'put','files' => true ])}}
                    
                 <!-- input for First Name -->

                            <div class="form-group">
                                {{ Form::label('first_name', 'First Name*', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('first_name', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>

                <!-- input for Last Name -->

                            <div class="form-group">
                                {{ Form::label('last_name', 'Last Name*', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('last_name',  null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>
                <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('email', 'Email Address*', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('email',$email, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>

               <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('national_id', 'National ID*', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('national_id', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>

                <!-- input for tiltle -->

                        <div class="form-group">
                        {{ Form::label('sex', 'Sex*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::radio('sex', 'Female', array('class' => 'form-control')) }} Female<br>
                            {{ Form::radio('sex', 'Male', array('class' => 'form-control')) }} Male
                        </div>
                        </div>

                    <!-- input for blood_group -->           

                        <div class="form-group">
                            {{ Form::label('blood_group', 'Blood Group', array('class' => 'col-md-2 control-label')) }}
                            <div class="col-md-4">
                                {{ Form::select('blood_group',$blood_group,null, array('class' => 'form-control', 'required')) }}
                            </div>
                        </div>



                <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('birth_date', 'Date of Birth', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('birth_date', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>

                <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('marital_status', 'Marital Status*',array( 'class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                            {{ Form::radio('marital_status', 'Unmarried', array('class' => 'form-control')) }}<span> Unmarried</span><br>
                            {{ Form::radio('marital_status', 'Married', array('class' => 'form-control')) }} <span> Married</span>
                        </div>
                            </div>

                <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('phone', 'Contact number', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('phone', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>

                <!-- hidden form -->

                            <div class="form-group">
                                {{ Form::label('user_id', 'Contact number', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('user_id', $user_id, array('class' => 'form-control')) }}
                                </div>
                            </div>
                 <!-- image upload  -->
                            <div class="form-group">
                                {{ Form::label('img_link', "Change Profile Picture", array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    <div id="preimg">
                                    {{ HTML::image($employee->photo, 'profile picture', [ 'class'=> 'img-responsive', 'width' => '230' , 'height' => '236']) }}<br>
                                    </div>
                                    {{ Form::file('img_link', array( 'class' => 'file-loading' , 'multiple'=>false, 'id' => 'input-4' )) }}
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
 
    {{ HTML::style('rename/css/fileinput.min.css') }}

@stop

@section('script')


    {{ HTML::script('rename/js/fileinput_locale_<lang>.js') }}
    {{ HTML::script('rename/js/fileinput.min.js') }}
 

    <script>
    $(document).on('ready', function() {
        $("#input-4").fileinput({showCaption: false});
    });
    </script>

    <script>
        $(document).on('ready', function() {
            $("#input-4").click(function(){
                $("#preimg").fadeOut("1000");
                
              //  $("#div2").fadeOut("slow");
             //   $("#div3").fadeOut(3000);
            });
        });
    </script>

@stop