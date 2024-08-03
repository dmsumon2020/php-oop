<?php

if (isset($_GET['id']) && is_numeric( $_GET['id'] )) {
    $id = $_GET['id'];
} elseif(isset($_POST['id']) && is_numeric($_POST['id'])) {
    $id = $_POST['id'];
}else {
    echo '<p>This page has been accessed by mistake</p>';
    exit();
}

require_once('mysqli_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $email = $_POST['email'];

    $errors = [];
    // first name check
    if (empty($firstName)) {
        $errors [] = 'First name field can not be empty';
    }
    if (empty($lastName)) {
        $errors [] = 'Last name field can not be empty';
    }
    if (empty($email)) {
        $errors [] = 'Email field can not be empty';
    }
     

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error .'<br>';
        }
        echo'<form action="example-edit-user.php" method="post">
                <p>First Name: <input type="text" name="first_name" size="15" maxlength="15" value="'.$firstName.'"></p>
                <p>Last Name: <input type="text" name="last_name" size="15" maxlength="30" value="'.$lastName.'"></p>
                <p>Email Address: <input type="email" name="email" size="20" maxlength="60" value="'.$email.'"> </p>
                <p><input type="submit" name="submit" value="Submit"></p>
                <input type="hidden" name="id" value="'.$id.'">
            </form>';        
    } else {
        $query = "UPDATE users SET first_name='$firstName', last_name='$lastName', email='$email' WHERE user_id='$id';";
        $result = mysqli_query($dbc, $query);
        if (mysqli_affected_rows($dbc) == 1) {
            echo 'You have successfully updated your information';
        } else {
            echo 'System Error ' . $query;
        }
    }
    


    
} else {

    $query = "SELECT first_name, last_name, email FROM users WHERE user_id='$id';";
    $result = mysqli_query($dbc, $query);

    if (mysqli_num_rows($result) == 1) {
     $row = mysqli_fetch_array($result, MYSQLI_NUM);
        
    echo'<form action="example-edit-user.php" method="post">
        <p>First Name: <input type="text" name="first_name" size="15" maxlength="15" value="'.$row[0].'"></p>
        <p>Last Name: <input type="text" name="last_name" size="15" maxlength="30" value="'.$row[1].'"></p>
        <p>Email Address: <input type="email" name="email" size="20" maxlength="60" value="'.$row[2].'"> </p>
        <p><input type="submit" name="submit" value="Submit"></p>
        <input type="hidden" name="id" value="'.$id.'">
    </form>';

    }else {
        echo 'There is no user with that ID';
    }



}



?>

