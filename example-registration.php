<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'mysqli_connect.php';
    $errors = [];
    
    // first name
    if (empty($_POST['first_name'])) {
        $errors [] = 'You forgot to enter your first name';
    } else {
        $fn = mysqli_real_escape_string($dbc, trim($_POST['first_name']));
    }

    // last name
    if (empty($_POST['last_name'])) {
        $errors [] = 'You forgot to enter your last name';
    } else {
        $ln = mysqli_real_escape_string($dbc, trim($_POST['last_name']));
    }

    // email 
    if (empty($_POST['email'])) {
        $errors [] = 'You forgot to enter your email';
    } else {
        $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
    }

    // password
    if (!empty($_POST['pass1'])) {
        if ($_POST['pass1'] != $_POST['pass2']) {
            $errors [] = 'Your passwords do not match';
        } else {
            $pw = mysqli_real_escape_string($dbc, trim($_POST['pass1']));
        }
        
    } else {
        $errors [] = 'You forgot to enter your password';
    }
    

    if (empty($errors)) {
        
        $sql = "INSERT INTO users (first_name, last_name, email, pass, registration_date) VALUES ('$fn', '$ln', '$email', SHA1('$pw'), NOW());";
        $result = @mysqli_query($dbc, $sql);
        
        if ($result) {
            echo 'Congratulation! Now you are a registered user';
        } else {
            echo '<h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. 
            We apologize for any inconvenience.</p>';
            echo '<p>' . mysqli_error($dbc) . '<br><br>Query: ' . $q . '</p>';
        }
        

    } else {
        # post the errors
        echo '<h1>Error!</h1>';
        echo '<p class="error">The following error(s) occurred:<br>';
        foreach ($errors as $error) {
            echo $error . '!<br>';
        }
    }


    
    

    
}


?>
<h1>Register</h1>
<form action="example-registration.php" method="post">
	<p>First Name: <input type="text" name="first_name" size="15" maxlength="20" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>"></p>
	<p>Last Name: <input type="text" name="last_name" size="15" maxlength="40" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>"></p>
	<p>Email Address: <input type="email" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" > </p>
	<p>Password: <input type="password" name="pass1" size="10" maxlength="20" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>" ></p>
	<p>Confirm Password: <input type="password" name="pass2" size="10" maxlength="20" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>" ></p>
	<p><input type="submit" name="submit" value="Register"></p>
</form>