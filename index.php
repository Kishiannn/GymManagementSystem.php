<?php 
session_start();
require "conn.php" ;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="body-color" style="background-color: black;">
    <div class="profile-container" style="border: 5px; background-color: orange; position: absolute; width: 70vw; height: 100px; top: 60px; left: 360px;">
        <ul class="homepage-name ms-auto">
        <h1 class="text-dark" style="position: absolute; left: 60px; top: 20px">Welcome, <?= htmlspecialchars($_SESSION['firstname']) ?></h1>
        <a href="profile.php" class="nav-link" style="position: absolute; font-size: 30px; left: 250px; top: 25px;">
            <?= htmlspecialchars($_SESSION['username']) ?>
        </a>
    </div>
    <div class="active-container" style="position: absolute; top: 200px; left: 360px; width: 250px; height: 120px; border: 5px solid orange;">
    <!-- Content goes here -->
    </div>


    </div>
</ul>
<?php include 'customer_navbar.php'?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<div>
</body>
</html>
