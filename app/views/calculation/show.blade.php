@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            @include('includes.alert')
            <section class="panel">
                <header class="panel-heading clearfix">
                    {{ $title }}
                    <span class="pull-right">
                            <a class="btn btn-success btn-sm btn-new-user" href="{{ URL::route('calculation.index') }}">Search</a>
                    </span>
                </header>
                <div class="panel-body">
                    @if(count($salary))
                        <table class="display table table-bordered table-striped" id="example">
                            <thead>
                            <tr>
                                <th>UserID</th>

                                <th>Total Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $user_id }}</td>
                                    <td>{{ $salary  }}</td>
                                </tr>
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


