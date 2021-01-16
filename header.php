<?php 
    session_start(); 
    include_once 'includes/functions.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar-expand-lg bg-dark">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav p-3">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <?php
                            if(isset($_SESSION["useruid"])) {
                                echo '<li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>';
                                echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
                            }
                            else {
                                echo '<li class="nav-item"><a class="nav-link" href="login.php">Log In</a></li>';
                            
                                echo '<li class="nav-item"><a class="nav-link" href="signup.php">Sign Up</a></li>';
                            }
                    ?>
                </ul>
            </div>
        </nav>
    </header>