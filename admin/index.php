<?php
require('db.php');
include("auth_session.php");
include('php/bus.php');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="styles.css" rel="stylesheet">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />

    <title>Title</title>
</head>

<body>

    <div class="wrapper">
        <?php include("./layout/sidebar.php") ?>

        <div class="main">
            <?php include("./layout/navbar.php") ?>

            <div class="container mt-3">
                <?php 
                    if(isset($_GET['page']) && !empty($_GET['page']))
                    include($_GET['page'].'.php');
                    else
                    include('dashboard.php');
                ?>
            </div>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script> -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>

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