@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    {{ $title }}
                    <span class="pull-right">

                            <a class="btn btn-success btn-sm" href="{{ URL::route('reward.index') }}">All Rewards</a>

					</span>
                </header>
                <div class="panel-body">
                    {{ Form::open(array('route' => 'reward.store', 'class' => 'form-horizontal')) }}

        <!-- input for name-->

                    <div class="form-group">
                        {{ Form::label('user_id', 'Employee Email*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::select('user_id', $userId, '',array('class' => 'form-control')) }}
                        </div>
                    </div>

        <!-- input for name-->

                    <div class="form-group">
                        {{ Form::label('fine', 'Fine*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('fine', null, array('class' => 'form-control',  'placeholder' => 'Fine', 'required')) }}
                        </div>
                    </div>


        <!-- input for name-->

                    <div class="form-group">
                        {{ Form::label('extra_pay', 'Extra Pay*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('extra_pay', null, array('class' => 'form-control',  'placeholder' => 'Extra Payment', 'required')) }}
                        </div>
                    </div>

                   

     
        <!-- submit button  -->       

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            {{ Form::submit('Create Reward', array('class' => 'btn btn-primary')) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
                
            </section>
        </div>
    </div>
@stop
