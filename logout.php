<?php 
//Start the session
session_start();

//Destroy the session.
if (session_destroy()) {
    header("Location: login.php");
    exit;
}
?>