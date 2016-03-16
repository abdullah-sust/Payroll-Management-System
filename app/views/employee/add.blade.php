@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading">
                    {{ $title }}
                    <span class="pull-right">

                            <a class="btn btn-success btn-sm" href="{{ URL::route('employee.index') }}">Employee List</a>

					</span>
                </header>
                <div class="panel-body">
                    {{ Form::open(array('route' => 'employee.store', 'class' => 'form-horizontal','files' => true)) }}

        <!-- input for tiltle -->

                    <div class="form-group">
                        {{ Form::label('name', 'Employee Name*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('name', null, array('class' => 'form-control',  'placeholder' => 'Employee Full Name', 'required')) }}
                        </div>
                    </div>

        <!-- input for description -->

                    <div class="form-group">
                        {{ Form::label('description', 'Employee Description*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('description', null, array('class' => 'form-control', 'placeholder' => 'Card Description', 'required')) }}
                        </div>
                    </div>

        <!-- input for price -->           

                    <div class="form-group">
                        {{ Form::label('price', 'employee Price( Dollar )*', array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::text('price', null, array('class' => 'form-control', 'placeholder' => 'Provide Card Price in Dollar', 'required')) }}
                        </div>
                    </div>

        <!-- input for status -->

                   

        <!-- image upload  -->

                    <div class="form-group">
                        {{ Form::label('img_link', "Upload Card Image*", array('class' => 'col-md-2 control-label')) }}
                        <div class="col-md-4">
                            {{ Form::file('img_link', array( 'class' => 'file-loading' , 'multiple'=>false, 'id' => 'input-4' )) }}
                        </div>
                    </div>
                      
        <!-- submit button  -->       

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            {{ Form::submit('Add Employee', array('class' => 'btn btn-primary')) }}
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
                
            </section>
        </div>
    </div>
@stop



@section('style')
    {{ HTML::style('css/chosen_dropdown/chosen.css') }}
    {{ HTML::style('rename/css/fileinput.min.css') }}

@stop



@section('script')

    {{ HTML::script('js/chosen_dropdown/chosen.jquery.min.js') }}
    {{ HTML::script('rename/js/plugins/canvas-to-blob.min.js') }}
    {{ HTML::script('rename/js/fileinput_locale_<lang>.js') }}
    {{ HTML::script('rename/js/fileinput.min.js') }}


   
    <!-- image drag&drop and upload plugin  -->

    <script>
    $(document).on('ready', function() {
        $("#input-4").fileinput({showCaption: false});
    });
    </script>    
    
@stop
