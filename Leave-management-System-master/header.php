<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .navbar {

            position: sticky;
        }

        div .navbar-nav a:hover {
            background-color: gray;

        }

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

    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark" style="position: sticky;">
        <div class="container">
            <a class="navbar-brand" href="http://localhost/Leave%20management/index.php"><i class="fa fa-home"> HOME</i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav">
                    <a class="nav-item nav-link " href="http://localhost/Leave%20management/userRegister.php">Registration</a>
                    <a class="nav-item nav-link " href="http://localhost/Leave%20management/userLogin.php">Login</a>
                </div>

            </div>
        </div>
    </nav>

</body>

</html>