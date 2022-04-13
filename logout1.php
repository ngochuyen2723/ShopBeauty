<?php
    session_start ();
    //session_unset(); 
    unset($_SESSION['customer']);
    header('Location: shopbeauty.php');
?>