<?php

include 'dbcon.php';

if (isset($_POST['submit'])) {

    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $emailquery = "SELECT *FROM  studentregistartion where email='$email'";
    $query = mysqli_query($con, $emailquery);

    $emailcount = mysqli_num_rows($query);
    if ($emailcount > 0) {
        echo "Email already exists";
    } else {
        if ($password === $cpassword) {
            $sql = "INSERT INTO studentregistartion (username,email,mobile,password,cpassword)
        VALUES ('$username','$email', '$mobile','$pass','$cpass')";
            if ($con->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $con->error;
            }
            $con->close();
        } else {
            echo "Password Not matched";
        }
    }
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
    <title>College Leave-Management System</title>
    <link rel="shortcut icon" href="" />
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <main>
        <?php
        include('header.php');
        ?>
        <div class="content py-5">
            <div class="card2">
                <div class="card">
                    <article class="card-body mx-auto" style="max-width: 700px;">
                        <h3 class="card-title mt-3 text-center"><i class="fa fa-users"> Registration </i></h4>
                            <form action="userRegister.php" method="POST">
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                    </div>
                                    <input name="username" class="form-control" placeholder="Full name" type="text" Required>
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                    </div>
                                    <input name="email" class="form-control" placeholder="Email address" type="email" Required="/^[0-9a-zA-Z]+$/">
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                                    </div>
                                    <input type="tel" minlength="10" maxlength="10" name="mobile" class="form-control" placeholder="Phone number" type="text" Required>
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input name="password" class="form-control" placeholder="Create password" type="password" Required>
                                    
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                    </div>
                                    <input name="cpassword" class="form-control" placeholder="Repeat password" type="password" Required>
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <button name="submit" type="submit" class="btn btn-primary btn-block"> Create Account </button>
                                </div> <!-- form-group// -->
                                <p class="text-center">Have an account? <a href="userLogin.php">Log In</a> </p>
                            </form>
                    </article>
                </div> <!-- card.// -->
            </div>
        </div>
        <!--container end.//-->
        <br><br>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        <?php
        include('footer.php');
        ?>
</body>

</html>