<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bountiful Enterprises</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/admin.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
</head>
<body>
<div class="valign-parent" id="login">
    <div class="row valign-child">
        <div class="col-md-4 col-md-offset-4"><img class="img-responsive" src="../images/footer-logo.png">
            <div class="panel material-shadow" id="login-panel">
                <div class="panel-heading">
                    <h3 class="text-center">Administrator</h3>
                </div>
                <div class="panel-body">
                    <form action="/admin/login" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input id="email" type="text" name="email" required><span class="bar"></span>
                            <label for="#email">Email</label>
                        </div>
                        <div class="form-group">
                            <input id="username" type="password" name="password" required><span class="bar"></span>
                            <label for="#password">Password</label>
                        </div>
                        <input class="btn btn-primary" type="Submit" value="Login">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>