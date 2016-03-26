@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading clearfix">
                    {{ $title }}
                    <span class="pull-right">
                            <a class="btn btn-success btn-sm btn-new-user" href="{{ URL::route('employee.create') }}">Add Employee</a>
                    </span>
                </header>
                <div class="panel-body">
                    @if(count($employees))
                        <table class="display table table-bordered table-striped" id="example">
                            <thead>
                            <tr>
                                <th>EmployeeID</th>
                                <th>Full Name</th>
                                <th>Email Address</th>
                                <th>NID</th>
                                <th>Sex</th>
                                <th>Blood Group</th>
                                <th>Date of Birth</th>
                                <th>Status</th>
                                <th>Contact</th>

                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{ $employee->user->employeeID }}</td>
                                    <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                                    <td>{{ $employee->user->email }}</td>
                                    <td>{{ $employee->national_id }}</td>
                                    <td>{{ $employee->sex}}</td>
                                    <td>{{ $employee->blood_group }}</td>
                                    <td>{{ $employee->birth_date}}</td>
                                    <td>{{ $employee->marital_status }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-xs btn-success btn-show" href="{{ URL::route('employee.show', array('id' => $employee->id)) }}">Show</a>
                                        <a href="#" class="btn btn-danger btn-xs btn-archive deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{{ $employee->id }}">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        No Data Found
                    @endif
                </div>
            </section>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
                </div>
                <div class="modal-body">
                    Are you sure to delete?
                </div>
                <div class="modal-footer">
                    {{ Form::open(array('route' => array('employee.delete', 0), 'method'=> 'delete', 'class' => 'deleteForm')) }}
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    {{ Form::submit('Yes, Delete', array('class' => 'btn btn-success')) }}
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>


@stop


@section('style')
    {{ HTML::style('assets/data-tables/DT_bootstrap.css') }}

@stop


@section('script')
    {{ HTML::script('assets/data-tables/jquery.dataTables.js') }}
    {{ HTML::script('assets/data-tables/DT_bootstrap.js') }}

    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $.get("http://ipinfo.io", function(response) {
                console.log(response.city, response.country,response.region);
            }, "jsonp");
            $('#example').dataTable({
            });

            $(document).on("click", ".deleteBtn", function() {
                var deleteId = $(this).attr('deleteId');
                var url = "<?php echo URL::route('employee.index'); ?>";
                $(".deleteForm").attr("action", url+'/'+deleteId);
            });
        });
    </script>
@stop