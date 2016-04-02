@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading clearfix">
                    {{ $title }}
                    <span class="pull-right">
                            <a class="btn btn-success btn-sm btn-new-user" href="{{ URL::route('history.create') }}">Add a Record</a>
                    </span>
                </header>
                <div class="panel-body">
                @if(count($histories))
                        <table class="display table table-bordered table-striped" id="example">
                            <thead>
                            <tr>
                                <th>Employee ID</th>
                                <th>Year</th>
                                <th>Month</th>
                                <th>How Much</th>                   
                                <th>Status</th>
                                <th>Action</th>
                            </tr>

                            </thead>
                            <tbody>
                            @foreach($histories as $history)
                                <tr>
                                    <td>{{ $history->user_id }}</td>
                                    <td>{{ $history->year }} </td>
                                    <td>{{ $history->month}}</td>
                                    <td>{{ $history->salary }}</td>
                                    <td>{{ $history->status }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-xs btn-success btn-edit" href="{{ URL::route('history.edit', array('id' => $history->id)) }}">Modify</a> 
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




@stop


@section('style')
    {{ HTML::style('assets/data-tables/DT_bootstrap.css') }}

@stop


@section('script')
    {{ HTML::script('assets/data-tables/jquery.dataTables.js') }}
    {{ HTML::script('assets/data-tables/DT_bootstrap.js') }}

    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            
            $('#example').dataTable({
            });
        });
    </script>
@stop