<?php 

include 'php/Database.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
    <div class="container">
        <div class="row" id="main">
            <div class="col-lg-12" id="login-container">
                <h3 class="text-center text-primary"> Login to your ecom </h3>
                <div class="card">
                    <div class="card-body" >
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="username">username</label>
                                <input type="text" name="username" id="username" class="username form-control">
                            </div>
                            <div class="form-group">
                                <label for="username">password</label>
                                <input type="text" name="password" id="password" class="password form-control">
                            </div>
                            <a href="register.php" class="nav-link"> Not a member ? register</a>
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="submit form-control btn btn-primary mt-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>

<?php

$username = $_POST['username'];
$password = $_POST['password'];

$result = $db->login($username , $password , "users");
if($result[0] == 1)
{
    echo " Successfully logged in";
} else {
    echo " Failed to login";
}


?>