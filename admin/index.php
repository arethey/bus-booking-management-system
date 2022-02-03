<?php
require('db.php');
include("auth_session.php");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Title</title>
</head>

<body>

    <div class="wrapper">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-line-chart" aria-hidden="true"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <span class="title">Schedule</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-file-text-o" aria-hidden="true"></i></span>
                        <span class="title">Booked List</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-bus" aria-hidden="true"></i></span>
                        <span class="title">Bus List</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span class="title">Location List</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                        <span class="title">Users</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <nav class="navbar navbar-dark bg-dark">
                <span class="navbar-brand mb-0 h1">
                    <button class="btn toggle btn-light" onclick="toggleMenu()">
                        <i class="fa fa-bars" aria-hidden="true"></i>
                    </button>
                    Bus Online Reservation System
                </span>
                <a href="logout.php" class="btn btn-link text-white">Logout</a>
            </nav>

            <div class="container">
                <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
                <p>You are now user dashboard page.</p>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
    function toggleMenu() {
        let toggle = document.querySelector('.toggle')
        toggle.classList.toggle('active')

        let navigation = document.querySelector('.navigation')
        navigation.classList.toggle('active')

        let main = document.querySelector('.main')
        main.classList.toggle('active')
    }
    </script>
</body>

</html>