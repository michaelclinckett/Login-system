<?php
//start the session
session_start();

//if the user is already logged on then redirect user to welcome page
if (isset($_SESSION["userid"]) && $_SESSION["userid"] === true) {
    header("Location: login.php");
    exit;
}