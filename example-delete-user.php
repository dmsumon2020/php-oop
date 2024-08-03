<?php 
echo '<h1>Delete a User</h1>';

// Check for a valid user ID, through GET or POST:
if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) { // From view_users.php
	$id = $_GET['id'];
} elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) { // Form submission.
	$id = $_POST['id'];
} else { // No valid ID, kill the script.
	echo '<p class="error">This page has been accessed in error.</p>';

	exit();
}

require('mysqli_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if ($_POST['sure'] == 'Yes') { // Delete the record.

		// Make the query:
		$q = "DELETE FROM users WHERE user_id=$id LIMIT 1";
		$r = @mysqli_query($dbc, $q);
		if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.

			// Print a message:
			echo '<p>The user has been deleted.</p>';

		} else { // If the query did not run OK.
			echo '<p class="error">The user could not be deleted due to a system error.</p>'; // Public message.
			echo '<p>' . mysqli_error($dbc) . '<br>Query: ' . $q . '</p>'; // Debugging message.
		}

	} else { // No confirmation of deletion.
		echo '<p>The user has NOT been deleted.</p>';
	}

}  else {

    $query = "SELECT CONCAT(first_name,' ' ,last_name) FROM users WHERE user_id='$id';";
    $result = mysqli_query( $dbc, $query );
     
    if ( mysqli_num_rows( $result ) == 1) {
        $row = mysqli_fetch_array( $result, MYSQLI_NUM );
        echo 'Name: '. $row[0];

        echo    '<p>Are you sure you want to delete this user?</p>
        <form action="example-delete-user.php" method="post">
            <input type="radio" name="sure" value="Yes"> Yes
            <input type="radio" name="sure" value="No" checked="checked"> No
            <input type="submit" name="submit" value="Submit">
            <input type="hidden" name="id" value="'.$id.'">
        </form>';        
    } else{
        echo '<p>The user doesn\'t exists</p>';
    }  
}
