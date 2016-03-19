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
                   

                    {{ Form::model($employee,['route' => ['employee.update',$employee->id], 'class' => 'form-horizontal', 'method' => 'put' ])}}

                    

                 <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('first_name', 'First Name*', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('first_name', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>

                <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('last_name', 'Last Name*', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('last_name', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>
                <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('email', 'Email Address*', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('email', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>

               <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('nid', 'National ID*', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('nid', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>

                <!-- input for tiltle -->

                        <div class="form-group">
                        {{ Form::label('sex', 'Sex*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::radio('sex', 'Female', array('class' => 'form-control', 'required')) }} Female<br>
                            {{ Form::radio('sex', 'Male', array('class' => 'form-control', 'required')) }} Male
                        </div>
                    </div>


                <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('dob', 'Date of Birth', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('dob', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>

                <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('marital_status', 'Marital Status*',array( 'class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                            {{ Form::radio('marital_status', 'Unmarried', array('class' => 'form-control', 'required')) }}<span> Unmarried</span><br>
                            {{ Form::radio('marital_status', 'Married', array('class' => 'form-control', 'required')) }} <span> Married</span>
                        </div>
                            </div>

                <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('contact', 'Contact number', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('contact', null, array('class' => 'form-control', 'required')) }}
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
