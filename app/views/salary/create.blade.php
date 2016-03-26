@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    {{ $title }}
                    <span class="pull-right">
                            <a class="btn btn-success btn-sm" href="{{ URL::route('salary.index') }}">All Salary</a>
					</span>
                </header>
                <div class="panel-body">
                    {{ Form::open(array('route' => 'salary.store', 'class' => 'form-horizontal')) }}

                    <!-- input for name-->

                    <div class="form-group">
                        {{ Form::label('user_id', 'Employee ID*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::select('user_id', $userId, '',array('class' => 'form-control')) }}
                        </div>
                    </div>


                    <!-- input for name-->

                    <div class="form-group">
                        {{ Form::label('rank', 'Rank*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('rank', null, array('class' => 'form-control',  'placeholder' => 'Rank', 'required')) }}
                        </div>
                    </div>


                    <!-- input for name-->

                    <div class="form-group">
                        {{ Form::label('basic_salary', 'Basic Salary*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('basic_salary', null, array('class' => 'form-control',  'placeholder' => 'Basic Salary', 'required')) }}
                        </div>
                    </div>



                    <!-- input for name-->

                    <div class="form-group">
                        {{ Form::label('bonus', 'Bonus(%)', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('bonus', null, array('class' => 'form-control',  'placeholder' => 'Bonus(%)', 'required')) }}
                        </div>
                    </div>
                   

     
        <!-- submit button  -->       

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            {{ Form::submit('Create', array('class' => 'btn btn-primary')) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
                
            </section>
        </div>
    </div>
@stop
