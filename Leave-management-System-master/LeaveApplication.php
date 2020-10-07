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
  <style>
    body {
      background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
      background-size: 400% 400%;
      animation: gradient 15s ease infinite;
    }

    @keyframes gradient {
      0% {
        background-position: 0% 50%;
      }

      50% {
        background-position: 100% 50%;
      }

      100% {
        background-position: 0% 50%;
      }
    }
  </style>

</head>

<body>
  <meta http-equiv="refresh" content="60">
  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php"><i class="fa fa-home"> HOME</i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="logout.php"><i class="fa fa-sign-out">Logout</i></a>
          </li>
          <li class="nav-item">
            <a data-toggle="modal" data-target="#bd-example-modal-lg" class="nav-link"><i class="fa fa-envelope "> notification</i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php

  include 'dbcon.php';

  if (isset($_POST['submit'])) {

    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $days = mysqli_real_escape_string($con, $_POST['days']);
    $erno = mysqli_real_escape_string($con, $_POST['erno']);
    $message = mysqli_real_escape_string($con, $_POST['message']);


    $sql = "INSERT INTO leaveapplication (fname,days,erno,message)
        VALUES ('$fname','$days','$erno','$message')";
    if ($con->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    $con->close();
  }
  ?>
  <?php
  include 'dbcon.php';
  $sql = "SELECT * FROM action";
  $result = mysqli_query($con, $sql);
  ?>

  <div class="container">
    <div class="modal fade bd-example-modal-lg" id="bd-example-modal-lg" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-body">
            <main role="main" class="container">
              <div class="container-fluid">
                <table class="table">
                  <table class="table table-hover">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Er.no</th>
                        <th scope="col">Approve or not</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                      ?>
                          <tr>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['message']; ?></td>
                            <td><a href="DeleteNotification.php?id=<?php echo $row["id"]; ?>" <button type="button" class="btn btn-danger  btn-sm">Delete</button></a></td>

                          </tr>
                      <?php

                        }
                      }

                      ?>
                    </tbody>
                  </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="content py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3">
            <span class="anchor" id="formContact"></span>
            <!-- form user info -->
            <div class="card card-outline-secondary">
              <div class="card-header">
                <h3 class="mb-0">Leave Application</h3>
              </div>
              <div class="card-body">
                <form class="form" role="form" autocomplete="off" action="leaveApplication.php" method="POST">
                  <fieldset>
                    <label for="name2" class="mb-0">Full Name</label>
                    <div class="row mb-1">
                      <div class="col-lg-12">
                        <input type="text" name="fname" id="fname" class="form-control" required=/^A-Za-z/">
                      </div>
                    </div>
                    <label for="name2" class="mb-0">How many days leave ?</label>
                    <div class="row mb-1">
                      <div class="col-lg-12">
                        <input type="text" maxlength="1" name="days" id="days" class="form-control" required="/^[0-9]/">
                      </div>
                    </div>
                    <label for="erno" class="mb-0">Enrollment number</label>
                    <div class="row mb-1">
                      <div class="col-lg-12">
                        <input type="text" name="erno" id="erno" class="form-control" maxlength="12" required="/^[0-9]/">
                      </div>
                    </div>
                    <label for="message2" class="mb-0">Write Leave-Application</label>
                    <div class="row mb-1">
                      <div class="col-lg-12">
                        <textarea rows="4" placeholder="Example:Purpose of the application,Reason for leave,particular dates,Contact information" name="message" id="message" class="form-control" required="/^[A-Za-z]+^[0-9]+$/"></textarea>
                      </div>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary btn-lg float-left">Send Message</button>
                  </fieldset>
                </form>
              </div>
            </div>
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="js/bootstrap.min.js"></script>
            <script>
              function allLetter(fname)
      { 
      var letters = /^[A-Za-z]+$/;
      if(inputtxt.value.match(letters))
      {
      alert('Your name have accepted : you can try another');
      return true;
      }
      else
      {
      alert('Please input alphabet characters only');
      return false;
      }
      }
              </script>
            <?php
            include('footer.php');
            ?>
            </meta>
</body>

</html>