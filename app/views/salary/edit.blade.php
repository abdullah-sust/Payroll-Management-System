@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    <b>{{ $title }}</b>
                    <span class="pull-right">
                            <a class="btn btn-success btn-sm" href="{{ URL::route('salary.index') }}">Full Salary Structure on Rank</a>

					</span>
                </header>
                <div class="panel-body">
                   

                    {{ Form::model($salary,['route' => ['salary.update',$salary->id], 'class' => 'form-horizontal', 'method' => 'put' ])}}

                    

                 <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('rank', 'Rank*', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('rank', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>


                            <div class="form-group">
                                {{ Form::label('basic', 'Basic*', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('basic', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>


                            <div class="form-group">
                                {{ Form::label('bonus', 'Bonus*', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('bonus', null, array('class' => 'form-control', 'required')) }}
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
