<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bountiful Enterprises</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ mix('/css/admin.css') }}" rel="stylesheet">
    {{--<link href="/DataTables/datatables.css" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-left hidden-xs"><a class="navbar-brand" href="{{ route('home') }}"><img
                    class="img-responsive" src="/images/footer-logo.png"></a>
        <ul class="nav navbar-nav">
            <li>
                <a href="{{ route('admin-projects') }}">
                    <i class="fa fa-folder-open fa-2x"></i>
                    <p>Manage Projects</p>
                </a>
            </li>
            <li>
                <a href="{{ route('create-project') }}">
                    <i class="fa fa-plus-square-o fa-2x"></i>
                    <p>New Project</p>
                </a>
            </li>
            <li>
                <a href="{{ route('admin-years') }}">
                    <i class="fa fa-calendar fa-2x"></i>
                    <p>Manage Years</p>
                </a>
            </li>
            <li>
                <a href="{{ route('create-year') }}">
                    <i class="fa fa-plus-square-o fa-2x"></i>
                    <p>Add Year</p>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}">
                    <i class="fa fa-external-link fa-2x"></i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </nav>
    <nav class="navbar navbar-default visible-xs">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#mobile-nav"
                    aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span></button>
            <a class="navbar-brand" href="{{ route('home') }}"><img class="img-responsive" src="/images/navbar-logo.png"></a>
        </div>
        <div class="collapse navbar-collapse" id="mobile-nav">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('admin-projects') }}"><i class="fa fa-folder-open fa-lg"></i>Manage Projects</a></li>
                <li><a href="{{ route('create-project') }}"><i class="fa fa-plus-square-o fa-lg"></i>New Project</a></li>
                <li><a href="{{ route('admin-years') }}"><i class="fa fa-calendar fa-lg"></i>Manage Years</a></li>
                <li><a href="{{ route('create-year') }}"><i class="fa fa-plus-square-o fa-lg"></i>New Year</a></li>
                <li><a href="{{ route('logout') }}"><i class="fa fa-external-link fa-lg"></i>Logout</a></li>
            </ul>
        </div>
    </nav>

    <div id="content">
        <div class="container">
            @yield("content")
        </div>
    </div>

    {{--<script src="/DataTables/datatables.js"></script>--}}
    <script src="{{ mix('/js/manifest.js') }}"></script>
    <script src="{{ mix('/js/vendor.js') }}"></script>
    <script src="{{ mix('/js/admin.js') }}"></script>
</body>
</html>