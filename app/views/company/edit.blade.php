@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    <b>{{ $title }} || Employee ID: <span style="color:green">{{ $companyinfo->user->employeeID }}</span> || Name: <span style="color:green">{{ $companyinfo->user->profile->first_name }} {{ $companyinfo->user->profile->last_name }}</span></b>
                    
                    <span class="pull-right">

                            <a class="btn btn-success btn-sm" href="{{ URL::route('companyinfo.index') }}">All Company Info</a>

					</span>
                </header>
                <div class="panel-body">

                    {{ Form::model($companyinfo,['route' => ['companyinfo.update',$companyinfo->id], 'class' => 'form-horizontal', 'method' => 'put' ])}}


                <!-- input for name-->

                    <div class="form-group">
                        {{ Form::label('rank_id', 'Rank ID*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::select('rank_id', $ranks , '',array('class' => 'form-control')) }}
                        </div>
                    </div>

                <!-- input for name-->

                    <div class="form-group">
                        {{ Form::label('designation_id', 'Designation ID*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::select('designation_id', $desigs , '',array('class' => 'form-control')) }}
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
            </section>
        </div>
    </div>
@stop
