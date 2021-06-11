<?php
    session_start();
    if(!isset($_SESSION['USER_NAME'])){
        header('dashboard:login.html');

    }
    if($_SESSION["USER_ROLE"]=="1"){
        ?>
            <a href="adminmenu.html">adminmenu</a><br>
        <?php

    }
?>
<a href="products.php">viewproducts</a><br>