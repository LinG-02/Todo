<?php
    session_start();
    $Remove_id = $_REQUEST['ID'];
    if(isset($it_id)){
        unset($_SESSION['cart'][$Remove_id]);
    }
    
    else{
        unset($_SESSION['cart']);
    }

    header("Location:cart.php");
?>