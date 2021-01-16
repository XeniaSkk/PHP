<?php
    include 'header.php';
?>

    <Main class="text-center p-5">
        <h2>Hello <?php 
                if (isset($_SESSION["useruid"])){
                    echo $_SESSION["useruid"];
                }
                else {
                    echo "user";
                }
        ?></h2>
        <p>.</p>
        <p>.</p>
        <p>.</p>

    </Main>

<?php
    include 'footer.php';
?> 