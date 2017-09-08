@extends('admin.layouts.master')

@section('content')
    <div class="panel panel-primary panel-admin" id="add-project">
        <div class="panel-heading">
            <h3 class="text-center">Edit Project</h3>
        </div>
        <div class="panel-body">
            <form method="POST" action="{{ route('update-project', ['project' => $project->id]) }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-4">
                        <label for="#year">Year</label><br>
                        <select class="form-control" id="year">
                            @foreach($years as $year)
                                @if($project->year_id === $year->id)
                                    <option value="{{ $year->id }}" selected>{{ $year->year }}</option>
                                @else
                                    <option value="{{ $year->id }}">{{ $year->year }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="#job-name">Job</label><br>
                        <input class="form-control" id="job-name" type="text" value="{{ $project->name }}">
                    </div>
                    <div class="col-md-4">
                        <label for="#city">City</label><br>
                        <input class="form-control" id="city" type="text" value="{{ $project->city }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="#state">State</label><br>
                        <select class="form-control" id="state">
                            @php
                            $states = array(
                                'AL'=>'Alabama',
                                'AK'=>'Alaska',
                                'AZ'=>'Arizona',
                                'AR'=>'Arkansas',
                                'CA'=>'California',
                                'CO'=>'Colorado',
                                'CT'=>'Connecticut',
                                'DE'=>'Delaware',
                                'DC'=>'District of Columbia',
                                'FL'=>'Florida',
                                'GA'=>'Georgia',
                                'HI'=>'Hawaii',
                                'ID'=>'Idaho',
                                'IL'=>'Illinois',
                                'IN'=>'Indiana',
                                'IA'=>'Iowa',
                                'KS'=>'Kansas',
                                'KY'=>'Kentucky',
                                'LA'=>'Louisiana',
                                'ME'=>'Maine',
                                'MD'=>'Maryland',
                                'MA'=>'Massachusetts',
                                'MI'=>'Michigan',
                                'MN'=>'Minnesota',
                                'MS'=>'Mississippi',
                                'MO'=>'Missouri',
                                'MT'=>'Montana',
                                'NE'=>'Nebraska',
                                'NV'=>'Nevada',
                                'NH'=>'New Hampshire',
                                'NJ'=>'New Jersey',
                                'NM'=>'New Mexico',
                                'NY'=>'New York',
                                'NC'=>'North Carolina',
                                'ND'=>'North Dakota',
                                'OH'=>'Ohio',
                                'OK'=>'Oklahoma',
                                'OR'=>'Oregon',
                                'PA'=>'Pennsylvania',
                                'RI'=>'Rhode Island',
                                'SC'=>'South Carolina',
                                'SD'=>'South Dakota',
                                'TN'=>'Tennessee',
                                'TX'=>'Texas',
                                'UT'=>'Utah',
                                'VT'=>'Vermont',
                                'VA'=>'Virginia',
                                'WA'=>'Washington',
                                'WV'=>'West Virginia',
                                'WI'=>'Wisconsin',
                                'WY'=>'Wyoming',
                            );
                            @endphp

                            @foreach($states as $abb => $state)
                                @if($abb === $project->state)
                                    <option value="{{ $abb }}" selected>{{ $state }}</option>
                                @else
                                    <option value="{{ $abb }}">{{ $state }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="#weight">Weight (tons)</label><br>
                        <input class="form-control" id="weight" type="text" value="{{ $project->weight }}">
                    </div>
                    <div class="col-md-4">
                        <input class="btn btn-success" id="save-project" type="submit" value="Save">
                    </div>
                </div>
            </form>
            <form id="delete-project" method="POST" action="{{ route('delete-project', ['project' => $project->id]) }}">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-4 col-md-offset-8">
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection