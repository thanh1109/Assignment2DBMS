<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <header>
        <h1><span style="color:yellow;">Fabric</span>Agency</h1>
    </header>
    <br>
    <h2>Login</h2>
    <div id="container">
        <form id="loginform">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Username">       
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
            <input type="button" class="btn btn-primary" onclick="authen()" value="Login">
        </form>
    </div>
</body>
<script src="authentication.js"></script>
</html>