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
  <script>
    window.history.forward()
  </script>
</head>

<body>
  <?php

  include 'header.php';
  ?>
  <div class="content py-3">
    <div class="container">
      <h1 align="center"><i class="fa fa-book">College Leave-Management System </i></h1>
      <div class="drop-shadow">
        <div class="jumbotron jumbotron-fluid">
          <div align='center'>
            <i class="fa fa-user fa-4x style=" color:black;">
              <a href="adminlogin.php"><button type="button" class="btn btn-primary btn-lg" title="Admin Login">Admin</button></i></a>
            <i class="fa fa-graduation-cap fa-4x style=" color:black;">
              <a href="userLogin.php"><button type="button" class="btn btn-success btn-lg" title="Login OR Register your self">Student</button></a></i>
          </div>
          </br>

          <h5 align="center"> A good leave management system increases Student satisfaction,Provides transparency, and reduces unscheduled tasks.</h5>
        </div>
      </div>
    </div>
    </main><!-- /.container -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>


    <?php
    include('footer.php');
    ?>
</body>

</html>