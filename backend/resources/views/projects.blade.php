@extends('layouts.master')

@section('content')
    <div class="image-header valign-parent" id="projects-header">
        <div class="valign-child">
            <h1>Projects</h1>
        </div>
    </div>
    <div class="container">
        <div class="projects">
            @foreach($years as $year)
                <div class="tab">
                    <input id="tab-{{ $year->id }}" type="checkbox" name="tabs">
                    <label for="tab-{{ $year->id }}">{{ $year->year }} - {{ $year->weight }} tons</label>
                    <div class="tab-content">
                        <div class="project-img">
                            <img class="img-responsive" src="/images/projects/{{ $year->image }}">
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <td>Job</td>
                                    <td>City</td>
                                    <td>State</td>
                                    <td>Weight (tons)</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($year->projects()->get() as $project)
                                    <tr>
                                        <td>{{ $project->name }}</td>
                                        <td>{{ $project->city }}</td>
                                        <td>{{ $project->state }}</td>
                                        <td>{{ $project->weight }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection