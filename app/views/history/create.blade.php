@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    {{ $title }}
                </header>
                <div class="panel-body">
                    {{ Form::open(array('route' => 'history.store', 'class' => 'form-horizontal','files' => true)) }}

        <!-- input for name-->

                    <div class="form-group">
                        {{ Form::label('year', 'Year', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('year', null, array('class' => 'form-control',  'placeholder' => '', 'required')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('user_id', 'Employee Email', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::select('user_id', $userID, '',array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('month', 'Month', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::select('month', $month, '',array('class' => 'form-control')) }}
                        </div>
                    </div>
     
        <!-- submit button  -->       

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            {{ Form::submit('Proceed', array('class' => 'btn btn-primary')) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
                
            </section>
        </div>
    </div>
@stop
