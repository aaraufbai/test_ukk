<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="./vendor/css/bootstrap.css">


</head>

<body>
    <?php
    session_start();
    if ($_SESSION['level'] != 'admin') {
        header('location:../index.php?data=belum_login');
    }; ?>

<h1>halo</h1>

<a class="btn btn-warning" href="logout.php">logout</a>



</body>


</html>