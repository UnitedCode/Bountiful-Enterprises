@extends('admin.layouts.master')

@section('content')
    <div class="panel panel-primary panel-admin" id="add-year">
        <div class="panel-heading">
            <h3 class="text-center">Edit Year</h3>
        </div>
        <div class="panel-body">
            <form method="POST" action="{{ route('edit-year', ['year' => $year->id]) }}">
                {{ csrf_field() }}
                <input id="file-input" type="file" style="display:none;">
                <div class="row">
                    <div class="col-md-3">
                        <label>Image Selector</label>
                        <a class="btn btn-default" href="#" id="file-upload-btn">Choose a file...</a>
                    </div>
                    <div class="col-md-3">
                        <label for="file-upload-text">Image Name</label>
                        <input class="form-control" id="file-upload-text" type="text" value="{{ $year->image }}">
                    </div>
                    <div class="col-md-3">
                        <label for="year-text">Year</label>
                        <input type="text" name="year" id="year-text" value="{{ $year->year }}">
                    </div>
                    <div class="col-md-3">
                        <label>&nbsp;</label>
                        <input class="btn btn-default" type="submit" value="Add year">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection