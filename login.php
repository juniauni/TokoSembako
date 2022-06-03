<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title> Website Toko Sembako</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="bg-dark">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form action="cek_login.php" method="POST">
                <div class="form-group">
                <div class="form-label-group">
                Username
                </div>
                <input type="text" id="#" name="username" class="form-control" required="required" autofocus="autofocus">
                </div>
                <div class="form-group">
                <div class="form-label-group">
                Password
                </div>
                <input type="password" id="#" name="password" class="form-control" required="required">
                </div>
                <input type="submit" name="login" value="LOGIN" class="btn btn-primary btn-block">
            </form>
        </div>
      </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  </body>
</html>