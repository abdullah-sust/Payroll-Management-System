@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                     <b>{{ $title }} || Employee ID: <span style="color:green">{{ $address->user->employeeID }}</span> || Name: <span style="color:green">{{ $address->user->profile->first_name }} {{ $address->user->profile->last_name }}</span></b>
                    
                    <span class="pull-right">

                            <a class="btn btn-success btn-sm" href="{{ URL::route('address.index') }}">All Employee's Address Info</a>

                    </span>
                </header>
                <div class="panel-body">

                    {{ Form::model($address,['route' => ['address.update',$address->id], 'class' => 'form-horizontal', 'method' => 'put' ])}}


                <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('street', 'Street', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('street', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>
                <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('postal_code', 'Postal Code', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('postal_code', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>
                <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('police_station', 'Police Station', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('police_station', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>
                <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('city', 'City', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('city', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>
                <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('country', 'Country', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('country', null, array('class' => 'form-control', 'required')) }}
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
