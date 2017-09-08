@extends("admin.layouts.master")

@section("content")
    <div class="accordian-table">
        @foreach($years as $year)
            <div class="tab">
                <input id="tab-{{ $year->id }}" type="checkbox" name="tabs">
                <label for="tab-{{ $year->id }}">{{ $year->year }} - {{ $year->weight }} tons</label>
                <div class="tab-content">
                    <div class="text-center new-btn"><a class="btn btn-success" href="{{ route('create-project') }}">+ New Project</a></div>
                    <table>
                        <thead>
                        <tr>
                            <td>Job</td>
                            <td>City</td>
                            <td>State</td>
                            <td>Weight (tons)</td>
                            <td> </td>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($year->projects()->get() as $project)
                                <tr>
                                    <td>{{ $project->name }}</td>
                                    <td>{{ $project->city }}</td>
                                    <td>{{ $project->state }}</td>
                                    <td>{{ $project->weight }}</td>
                                    <td><a class="btn btn-default" href="{{ route('edit-project', ['project' => $project->id]) }}">Edit</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endforeach
    </div>
@endsection