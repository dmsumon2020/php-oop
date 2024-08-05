<?php
echo 'Hello World';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    include_once 'mysqli_connect.php';
    include_once 'includes/login_functions.inc.php';

    list($check, $data) = check_login($dbc, $_POST['email'], $_POST['pass']);

    if ($check) {
        
        //setcookie('user_id', $data['user_id']);
        //setcookie('first_name', $data['first_name']);

        session_start();
        $_SESSION['user_id'] = $data['user_id'];
        $_SESSION['first_name'] = $data['first_name'];


        redirect_user('loggedin.php');

    } else {
        $errors = $data;
    }
    

    mysqli_close($dbc);    
}

include_once ('includes/login_page.inc.php');