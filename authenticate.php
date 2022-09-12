<?php
session_start();

var_dump($_POST);
 // if password == bar, save username for later

if ($_POST['password'] === "bar") {
    $_SESSION['username'] =  $_POST['username'];
    header("Location:secret.php");
}


