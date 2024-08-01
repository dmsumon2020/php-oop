<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'mysqli_connect.php';
    $errors = [];

    // email check
    if (empty($_POST['email'])) {
        $errors [] = 'You forgot to enter your email';
    } else {
        $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
    }

    // current password check
    if (empty($_POST['pass'])) {
        $errors [] = 'You forgot to enter your password';
    } else {
        $pass = mysqli_real_escape_string($dbc, trim($_POST['pass']));
    }

    if (!empty($_POST['pass1'])) {
        if ($_POST['pass1'] != $_POST['pass2']) {
            $errors [] = 'Your entered passwords do not match';
        } else {
            $npw = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
        }
        
    } else {
        $errors [] = 'You forgot to enter your new password';
    }

    if (empty($errors)) {
        $query = "SELECT user_id FROM users WHERE (email='$email' AND pass=SHA1('$pass') )";
        $result = mysqli_query($dbc, $query);
        $number = mysqli_num_rows($result);
        if ($number == 1) {
            $row = mysqli_fetch_array($result, MYSQLI_NUM);
            $query2 = "UPDATE users SET pass=SHA1('$npw') WHERE user_id='$row[0]';";
            $result2 = mysqli_query($dbc, $query2);
            
            if (mysqli_affected_rows($dbc) == 1) {
                echo '<h1>Thank you!</h1>
				<p>Your password has been updated. In Chapter 12 you will actually be able to log in!</p><p><br></p>';
            } else {
                echo '<h1>System Error</h1>
				<p class="error">Your password could not be changed due to a system error. We apologize for any inconvenience.</p>';
            }
            

            
        } else {
            echo '<h1>Error!</h1>
			<p class="error">The email address and password do not match those on file.</p>';
        }
        
        
    } else {
        echo '<h1>Please fix the following errors : </h1><br>';
        foreach ($errors as $error) {
            echo $error .'<br>';
        }
    }

    
    //mysqli_close( $dbc );
}


?>

<form action="example-password.php" method="post">
	<p>Email Address: <input type="email" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" > </p>
	<p>Current Password: <input type="password" name="pass" size="10" maxlength="20" value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>" ></p>
	<p>New Password: <input type="password" name="pass1" size="10" maxlength="20" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>" ></p>
	<p>Confirm New Password: <input type="password" name="pass2" size="10" maxlength="20" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>" ></p>
	<p><input type="submit" name="submit" value="Change Password"></p>
</form>