<?php
session_start()
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

  <title>Starter Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->

</head>

<body>
  <meta http-equiv="refresh" content="60">
  <nav class="navbar navbar-expand-sm navbar-dark bg-primary mb-3">
    <div class="container">
      <a class="navbar-brand" href="/">Admin Panel</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Help</a></a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="userdata.php" class="nav-link">User</a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <h3 align="center"><strong>Manage Leave Application</strong></h3>

  <?php
  include 'dbcon.php';
  $sql = "SELECT * FROM leaveapplication";
  $result = mysqli_query($con, $sql);
  ?>

  <main role="main" class="container">
    <div class="container-fluid">
      <table class="table">
        <table class="table table-hover">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              </th>
              <th scope="col">Enroll no.</th>
              <th scope="col">days</th>
              <th scope="col">Mesaage</th>
              <th scope="col">Action</th>
              <th scope="col">Response</th>

            </tr>
          </thead>
          <tbody>
            <?php
            if (mysqli_num_rows($result) > 0) {
              while ($row = mysqli_fetch_assoc($result)) {

            ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['fname']; ?></td>
                  <td><?php echo $row['erno']; ?></td>
                  <td><?php echo $row['days']; ?></td>
                  <td><?php echo $row['message']; ?></td>
                  <td><a href="deleteApplication.php?id=<?php echo $row["id"]; ?>" <button type="button" class="btn btn-danger">Delete</button></a></td>
                  <td>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                      Response
                    </button>
                  </td>
                </tr>
            <?php

              }
            }
            ?>

          </tbody>
        </table>
    </div>
  </main>
  <?php

  include 'dbcon.php';


  if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $message = mysqli_real_escape_string($con, $_POST['message']);


    $sql = "INSERT INTO action (username,message)VALUES ('$username','$message')";
    if ($con->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $con->error;
    }
    $con->close();
  }
  ?>

  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Response Approve or not</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form class="form" role="form" autocomplete="off" action="admindb.php" method="POST">
            <fieldset>
              <label for="username" class="mb-0">Er.no</label>
              <div class="row mb-1">
                <div class="col-lg-12">
                  <input type="text" name="username" id="username" placeholder="Enrollment Number" class="form-control" required="">
                </div>
              </div>

              <label for="message2" class="mb-0">Message</label>
              <div class="row mb-1">
                <div class="col-lg-12">
                  <textarea placeholder="Approve/Disapprove" rows="4" name="message" id="message" class="form-control" required=""></textarea>
                </div>
              </div>
            </fieldset>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button name="submit" type="submit" class="btn btn-primary btn-lg float-left">Send Message</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js"></script>
  </meta>
</body>

</html>