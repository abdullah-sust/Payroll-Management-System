@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    {{ $title }}
                    <span class="pull-right">

<<<<<<< HEAD
                            <a class="btn btn-success btn-sm" href="{{ URL::route('companyinfo.index') }}">All Company Info</a>
=======
                            <a class="btn btn-success btn-sm" href="{{ URL::route('companyinfo.index') }}">All Company Infos</a>
>>>>>>> refs/remotes/origin/abdullah

					</span>
                </header>
                <div class="panel-body">
<<<<<<< HEAD
                   
                    {{ Form::open(array('route' => 'companyinfo.store', 'class' => 'form-horizontal','files' => true)) }}
                    

                <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('id', 'User ID', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('id', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>

                <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('rank_id', 'Rank ID', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('rank_id', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>

                 <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('join_date', 'Join Date', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('join_date', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>

                 <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('designation_id', 'Designation ID', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('designation_id', null, array('class' => 'form-control', 'required')) }}
                                </div>
                            </div>

                 <!-- input for tiltle -->

                            <div class="form-group">
                                {{ Form::label('contribution', 'Contribution', array('class' => 'col-md-2 control-label')) }}
                                <div class="col-md-4">
                                    {{ Form::text('contribution', null, array('class' => 'form-control', 'required')) }}
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
=======
                    {{ Form::open(array('route' => 'companyinfo.store', 'class' => 'form-horizontal','files' => true)) }}


                    <!-- input for name-->

                    <div class="form-group">
                        {{ Form::label('user_id', 'Employee Email*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::select('user_id', $users, '',array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <!-- input for name-->

                    <div class="form-group">
                        {{ Form::label('rank_id', 'Rank ID*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::select('rank_id', $ranks, '',array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <!-- input for name-->

                    <div class="form-group">
                        {{ Form::label('designation_id', 'Designation ID*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::select('designation_id', $desigs , '',array('class' => 'form-control')) }}
                        </div>
                    </div>

        			<!-- input for name-->

                    <div class="form-group">
                        {{ Form::label('join_date', 'Join date*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('join_date', null, array('class' => 'form-control',  'placeholder' => 'Join date', 'required')) }}
                        </div>
                    </div>

                    <!-- input for name-->

                    <div class="form-group">
                        {{ Form::label('contribution', 'Contribution*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('contribution', null, array('class' => 'form-control',  'placeholder' => 'Contribution', 'required')) }}
                        </div>
                    </div>


        			<!-- submit button  -->       

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            {{ Form::submit('Create Company Info', array('class' => 'btn btn-primary')) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
                
>>>>>>> refs/remotes/origin/abdullah
            </section>
        </div>
    </div>
@stop
