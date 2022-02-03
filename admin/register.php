<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="styles.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Title</title>
</head>

<body class="bg-light">
    <div class="d-flex flex-column justify-content-center" style="min-width: 100vw; min-height: 100vh">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Online Bus Reservation System</h2>
                </div>
                <div class="col-md-6">
                    <div class="card shadow">
                        <div class="card-body">
                            <h2 class="text-center mb-3">Sign Up</h2>

                            <?php
                                require('db.php');
                                // When form submitted, insert values into the database.
                                if (isset($_REQUEST['username'])) {
                                    // removes backslashes
                                    $username = stripslashes($_REQUEST['username']);
                                    $password = stripslashes($_REQUEST['password']);
                                    //escapes special characters in a string
                                    $username = mysqli_real_escape_string($con, $username);
                                    $password = mysqli_real_escape_string($con, $password);
                                    $create_datetime = date("Y-m-d H:i:s");
                                    $query    = "INSERT into `users` (username, password, create_datetime)
                                                VALUES ('$username', '" . md5($password) . "', '$create_datetime')";
                                    $result   = mysqli_query($con, $query);
                                    if ($result) {
                                        echo "
                                            <div class='text-center'>
                                                <div class='alert alert-success' role='alert'>
                                                    <h5>You are registered successfully.</h5>
                                                    <p>Click here to <a href='login.php'>Login</a></p>
                                                </div>
                                            </div>
                                            ";
                                    } else {
                                        echo "
                                            <div class='text-center'>
                                                <div class='alert alert-danger' role='alert'>
                                                    <h5>Required fields are missing.</h5>
                                                    <p>Click here to <a href='registration.php'>registration</a> again.</p>
                                                </div>
                                            </div>
                                            ";
                                    }
                                } else {
                            ?>

                            <form action="" method="post">
                                <div class="mb-3 form">
                                    <input type="text" class="form__input" id="username" name="username"
                                        placeholder=" ">
                                    <label for="username" class="form__label">Username</label>
                                </div>
                                <div class="mb-3 form">
                                    <input type="password" class="form__input" id="password" name="password"
                                        placeholder=" ">
                                    <label for="password" class="form__label">Password</label>
                                </div>
                                <button class="btn btn-primary btn-block">Sign Up</button>
                            </form>

                            <div class="text-center mt-3">
                                <p>Already have an account?
                                    <a href="login.php">Log in here</a>
                                </p>
                            </div>

                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</body>

</html>