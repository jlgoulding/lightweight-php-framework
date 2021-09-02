<?php

include "./connection.php";
// var_dump($_session['uname']);

// Check user login or not
if (!isset($_SESSION['uname'])) {
    header('Location: home');
}

// logout

if (isset($_POST['but_logout'])) {
    session_destroy();
    header('Location: ./');
}


// require 'views/index.view.php';
