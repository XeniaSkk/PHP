<?php
    include 'header.php';
?>

<section class="p-5">
    <h2>Sign up!</h2>

    <form action="includes/signup.inc.php" method="POST">
        <div class="form-group pt-3">
            <input class="form-control" type="text" name="name" placeholder="Full name">
        </div>
        <div class="form-group pt-3">
            <input class="form-control" type="text" name="email" placeholder="Email">
        </div>
        <div class="form-group pt-3">
            <input class="form-control" type="text" name="uid" placeholder="Username">
        </div>
        <div class="form-group pt-3">
            <input class="form-control" type="password" name="pwd" placeholder="Password">
        </div>
        <div class="form-group pt-3">
            <input class="form-control" type="password" name="pwdconfirm" placeholder=" Confirm Password">
        </div>
        <div class="form-group pt-3">
            <button class="btn-primary" type="submit" name="submit">Sign up</button>
        </div>
</form>
</section>

<!-- Errors -->
<?php 

if (isset($_GET["error"])) {

    //? error=emptyinput
    if ($_GET["error"] == "emptyinput") {
        echo '<p class= "alert alert-danger">*Please fill in all the fields!</p>';
    }
    // ? error=invaliduid
    else if ($_GET["error"] == "invaliduid") {
        echo '<p class= "alert alert-danger">*Choose a proper username!</p>';
    }

    //? error=invalidemail

    else if ($_GET["error"] == "invalidemail") {
        echo '<p class= "alert alert-danger">*Choose a valid Email!</p>';
    }

    // ?error=passwordsdontmatch
    else if ($_GET["error"] == "passwordsdontmatch") {
        echo '<p class= "alert alert-danger">*Passwords don\'t match!</p>';
    }

    // ?stmtfailed
    else  if ($_GET["error"] == "stmtfailed") {
        echo '<p class= "alert alert-danger">Something went wrong!</p>';
    }
    
    // ?error=usernametaken
    else if ($_GET["error"] == "usernametaken") {
        echo '<p class= "alert alert-danger">*Username not available!</p>';
    }

    // ?error=emailexist
    else if ($_GET["error"] == "emailexist") {
        echo '<p class= "alert alert-danger">*This email already exists!</p>';
    }
}

?>



<?php
    include 'footer.php';
?>