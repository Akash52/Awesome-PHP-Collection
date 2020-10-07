<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>
    <title>College Leave-Management System</title>
    <link rel="shortcut icon" href="" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php require 'header.php' ?>
    <?php

    include 'dbcon.php';

    if (isset($_POST['submit'])) {

        $email = $_POST['email'];
        $password = $_POST['password'];
        $email_search = "SELECT *from adminlogin where email='$email'";
        $query = mysqli_query($con, $email_search);
        $email_count = mysqli_num_rows($query);
        if ($email_count) {
            $email_pass = mysqli_fetch_assoc($query);
            $db_pass = $email_pass['password'];



            if ($db_pass) {
                echo "Login Succesfully";
    ?>
                <script>
                    location.replace("admindb.php");
                </script>
    <?php
            } else {
                echo "Password Incorrect";
            }
        }
    }


    ?>

    <main>
        <div class="content py-5">
            <div class="container">
                <div class="card ">

                    <article class="card-body mx-auto">
                        <h4 class="card-title mt-3 text-center"><i class="fa fa-user-circle "> Admin login</i></h4>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                </div>
                                <input name="email" class="form-control" placeholder="Email" type="text" Required>
                            </div>
                            <!-- form-group// -->
                            <div class="form-group input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                </div>
                                <input name="password" class="form-control" placeholder="Password" type="password" Required>
                            </div>
                            <div class="form-group">
                                <button name="submit" type="submit" class="btn btn-primary btn-block">Login</button>
                            </div>
                        </form>
                    </article>
                </div><!-- card.// -->
            </div><br>
        </div>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js"></script>
        <?php
        include('footer.php');
        ?>
</body>
</body>

</html>