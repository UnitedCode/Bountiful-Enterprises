@extends('layouts.master')

@section('content')
    <div id="detailing-header">
        <div class="container">
            <h1 class="text-center">Detailing</h1>
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <div id="tekla-model">
                        <div class="sketchfab-embed-wrapper"w>
                            <iframe src="https://3dwarehouse.sketchup.com/embed.html?mid=999595b4-cada-4e72-8cf5-0088715b6c30&width=580&height=326" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container" id="detailing-panels">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Tekla Software</div>
                    <div class="panel-body">
                        <p>
                            We utilize Tekla as our 3D detailing software.
                            Tekla is a leader in Structural Steel Detailing.
                            With Tekla's free BIM viewer,
                            it makes it an excellent source for project review and also a great aid in the construction of the building.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Detailing</div>
                    <div class="panel-body">
                        <p>
                            Our detailing abilities consist of 3D detailing, complete with drawings, Connection design and Engineering.
                            We have a team of in-house Detailers that utilize multi-user models allowing us to have multiple men working on a single project thus improving drawing submittal time.
                            Our detailing staff is led by over 20 years of experience in structural steel detailing.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
