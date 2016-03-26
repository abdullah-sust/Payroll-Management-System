@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    {{ $title }}
                    <span class="pull-right">
                            <a class="btn btn-success btn-sm" href="{{ URL::route('companyinfo.index') }}">All Company Infos</a>
					</span>
                </header>
                <div class="panel-body">

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
                        {{ Form::label('rank', 'Rank ID*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::select('rank', $ranks, '',array('class' => 'form-control')) }}
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
                            {{ Form::text('join_date', null, array('class' => 'form-control',  'placeholder' => 'mm/dd/yyyy', 'id' => 'join_date' )) }}
                        </div>
                    </div>

                    <!-- input for name-->

                    <div class="form-group">
                        {{ Form::label('contribution', 'Contribution', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('contribution', null, array('class' => 'form-control',  'placeholder' => 'Contribution')) }}
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
                
            </section>
        </div>
    </div>
@stop


@section('style')
    {{ HTML::style('assets/bootstrap-datepicker/css/datepicker.css') }}

@stop



@section('script')


    {{ HTML::script('assets/bootstrap-datepicker/js/bootstrap-datepicker.js') }}


   
    <!-- image drag&drop and upload plugin  -->

    <script>
    $(document).on('ready', function() {
        $("#input-4").fileinput({showCaption: false});
        /*$("#date").datepicker({
                format: 'yyyy-mm-dd'
            });*/
            $( "#join_date" ).datepicker( "setDate", new Date() ); 
    });
    </script>    
    
@stop
