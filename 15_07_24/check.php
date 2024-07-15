<?php

$sEmail = "abdullah@gmail.com";
$sPwd = "123456";

$email = $_POST['email'];
$pwd = $_POST['pwd'];

if ($email == $sEmail && $pwd == $sPwd) {

    session_start();

    $_SESSION['email'] = $email;

    header("Location: ahome.php");
} else {
    header("Location: session_log.php");
}
