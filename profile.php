<?php
    include 'header.php';
?>

<Main class="text-center p-5">

    <div>
        <h2>Hello <?php 
                if (isset($_SESSION["useruid"])){
                    echo $_SESSION["useruid"];
                }
                else {
                    echo "user";
                }
        ?></h2>
    </div>
            
    <div>
        <h2 class="text-uppercase"><?php 
        if (isset($_SESSION["username"])){
            echo $_SESSION["username"];
        }
        else {
            echo "user";
        }
        ?></h2>
    </div> 

    <div>
        <h2  class="font-italic"><?php 
            if (isset($_SESSION["useremail"])){
                echo $_SESSION["useremail"];
            }
            else {
                echo "user";
            }
        ?></h2>

    </div>



    </Main>


<?php
    include 'footer.php';
?> 