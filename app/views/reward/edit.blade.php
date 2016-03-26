@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    {{ $title }} || Employee ID: {{ $reward->user->employeeID }} || Name: {{ $reward->user->profile->first_name }} {{ $reward->user->profile->last_name }}
                    <span class="pull-right">

                            <a class="btn btn-success btn-sm" href="{{ URL::route('reward.index') }}">All Reward</a>

					</span>
                </header>
                <div class="panel-body">
                   

                    {{ Form::model($reward,['route' => ['reward.update',$reward->id], 'class' => 'form-horizontal', 'method' => 'put' ])}}

                    

                 <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('fine', 'Fine*', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('fine', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('extra_pay', 'Extra Pay*', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('extra_pay', null, array('class' => 'form-control', 'required')) }}
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
