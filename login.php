<?php
    include 'header.php';

    if(isset($_GET["signup"])) {
        if($_GET["signup"] == "success") {
            echo '<p class="alert alert-success">You have signed up!</p>';
        }
    }
?>

<section class="p-5">
    <h2>Log In!</h2>

    <form action="includes/login.inc.php" method="POST">
        <div class="form-group pt-3">
            <input class="form-control" type="text" name="uid" placeholder="Username/Email">
        </div>
        <div class="form-group pt-3">
            <input class="form-control" type="password" name="pwd" placeholder="Password">
        </div>
        <div class="form-group pt-3">
            <button class="btn-primary" type="submit" name="submit">Log In</button>
        </div>
    </form>
</section>

<?php
// !ERRORS
if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput" ) {
        echo '<p class="alert alert-danger">Please fill in all the fields!</p>';
    }
    else if ($_GET["error"] == "wronglogin") {
        echo '<p class="alert alert-danger">Wrong login!</p>';
    }
}


?>

<?php
    include 'footer.php';
?>