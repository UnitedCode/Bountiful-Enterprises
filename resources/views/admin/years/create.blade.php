@extends('admin.layouts.master')

@section('content')
    <div class="panel panel-primary panel-admin" id="add-year">
        <div class="panel-heading">
            <h3 class="text-center">Add Year</h3>
        </div>
        <div class="panel-body">
            <h4>Choose an image to summarize the year</h4>
            <form method="POST" action="{{ route('create-year') }}">
                {{ csrf_field() }}
                <input id="file-input" type="file" style="display:none;">
                <div class="row">
                    <div class="col-md-4"><a class="btn btn-default" href="#" id="file-upload-btn">Choose a file...</a></div>
                    <div class="col-md-4">
                        <input class="form-control" id="file-upload-text" type="text">
                    </div>
                    <div class="col-md-4">
                        <input class="btn btn-default" type="submit" value="Add year">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection