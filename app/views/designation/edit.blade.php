@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    {{ $title }}
                    <span class="pull-right">

                            <a class="btn btn-success btn-sm" href="{{ URL::route('designation.index') }}">All Designation</a>

					</span>
                </header>
                <div class="panel-body">
                   

                    {{ Form::model($designation,['route' => ['designation.update',$designation->id], 'class' => 'form-horizontal', 'method' => 'put' ])}}

                    

                 <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('name', 'Designation Name*', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('name', null, array('class' => 'form-control', 'required')) }}
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
