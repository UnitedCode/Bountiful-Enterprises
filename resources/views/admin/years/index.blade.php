@extends('admin.layouts.master')

@section('content')
    <div class="panel panel-primary panel-admin" id="manage-years">
        <div class="panel-heading">
            <h3 class="text-center">Manage Years</h3>
        </div>
        <div class="panel-body">
            <div class="text-center new-btn"><a class="btn btn-success" href="{{ route('create-year') }}">+ New Year</a></div>
            <table id="years-table">
                <thead>
                <tr>
                    <td>Year</td>
                    <td>Total Weight(tons)</td>
                    <td>Image</td>
                    <td></td>
                </tr>
                </thead>
                <tbody>
                @foreach($years as $year)
                    <tr>
                        <td>{{ $year->year }}</td>
                        <td>{{ $year->weight }}</td>
                        <td>{{ $year->image }}</td>
                        <td><a class="btn btn-default" href="{{ route('edit-year', ['year' => $year->id]) }}">Edit Image</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection