<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="registration.css">
    <title>Login</title>

</head>
<body style="background-image: url('background.jpg');">
<div class="container">
<div class="container">
    <?php
    if(isset($_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        require_once "database.php";
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if($user){
            if(password_verify($password, $user["password"])){
                session_start();
                $_SESSION["user"] = "yes";
                header("Location: index.php");
                die();
            }else{
                echo "<div class='alert alert-danger'>Password does not match</div>";

            }

        }else{
            echo "<div class='alert alert-danger'>Email does not match</div>";
        }
    }
    ?>
    <form action="login.php" method="post">
        <div class="form-group">
            <h1>Login Form</h1>
            <input type="email" placeholder="Enter email" name="email" class="form-control">

        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter password" name="password" class="form-control">

        </div>
        <div class="form-group">
            <input type="submit" value="login" name="login" class="btn btn-primary">

        </div>
        <div>
            <p>Dont have an Account? <a href="registration.php">Register Here</a></p>
        </div>
        



    </form>
</div>
            
    
</body>
</html>