<?php
    session_start ();
    //session_unset(); 
    unset($_SESSION['username']);
    unset($_SESSION['role']);
    header('Location: ../login.php');
?>