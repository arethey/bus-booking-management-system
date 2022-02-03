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
                            <h2 class="text-center mb-3">Log In</h2>

                            <?php
                                require('db.php');
                                session_start();
                                // When form submitted, check and create user session.
                                if (isset($_POST['username'])) {
                                    $username = stripslashes($_REQUEST['username']);    // removes backslashes
                                    $username = mysqli_real_escape_string($con, $username);
                                    $password = stripslashes($_REQUEST['password']);
                                    $password = mysqli_real_escape_string($con, $password);
                                    // Check user is exist in the database
                                    $query    = "SELECT * FROM `users` WHERE username='$username'
                                                AND password='" . md5($password) . "'";
                                    $result = mysqli_query($con, $query) or die(mysql_error());
                                    $rows = mysqli_num_rows($result);
                                    if ($rows == 1) {
                                        $_SESSION['username'] = $username;
                                        // Redirect to user dashboard page
                                        header("Location: index.php");
                                    } else {
                                        echo "
                                        <div class='text-center'>
                                                <div class='alert alert-danger' role='alert'>
                                                    <h5>Incorrect Username/password.</h5>
                                                    <p>Click here to <a href='login.php'>Login</a></p>
                                                </div>
                                                </div>
                                            ";
                                    }
                                } else {
                            ?>

                            <form action="" method="post">
                                <div class=" mb-3 form">
                                    <input type="text" class="form__input" id="username" name="username"
                                        placeholder=" ">
                                    <label for="username" class="form__label">Username</label>
                                </div>
                                <div class="mb-3 form">
                                    <input type="password" class="form__input" id="password" name="password"
                                        placeholder=" ">
                                    <label for="password" class="form__label">Password</label>
                                </div>
                                <button class="btn btn-primary btn-block">Log In</button>
                            </form>

                            <div class="text-center mt-3">
                                <p>Dont have an account?
                                    <a href="register.php">Register now</a>
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