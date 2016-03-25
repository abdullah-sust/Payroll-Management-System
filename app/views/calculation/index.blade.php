@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    {{ $title }}
                    <span class="pull-right">

                    </span>
                </header>
                <div class="panel-body">
                    {{ Form::open(array('route' => 'status.show', 'class' => 'form-horizontal')) }}


        <!-- input for name-->

                    <div class="form-group">
                        {{ Form::label('user_id', 'Enter User ID*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('user_id', null, array('class' => 'form-control',  'placeholder' => 'Enter User ID', 'required')) }}
                        </div>
                    </div>
     
        <!-- submit button  -->       

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            {{ Form::submit('Search', array('class' => 'btn btn-primary')) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
                
            </section>
        </div>
    </div>
@stop
