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
                    {{ Form::open(array('route' => 'password.doChange', 'class' => 'form-horizontal')) }}

                    <div class="form-group">
                        {{ Form::label('password', 'New Password*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'New Password')) }}
                        </div>
                    </div>

                    <div class="form-group">
                        {{ Form::label('password_confirmation', 'Confirm Password*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password')) }}
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            {{ Form::submit('Reset Password', array('class' => 'btn btn-primary')) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </section>
        </div>
    </div>
@stop