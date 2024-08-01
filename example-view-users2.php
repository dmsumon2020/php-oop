<?php
echo '<h1>Registered Users</h1>';
require('mysqli_connect.php');

$query = "SELECT first_name, last_name, DATE_FORMAT(registration_date, '%c %b, %Y') AS dr, user_id FROM users;";
$result = mysqli_query($dbc, $query);
$number = mysqli_num_rows($result);

echo "<p>There are currently $number registered users.</p>";

if ($number>0) {
    echo '<table width="60%">
            <thead>
                <tr>
                    <th align="left">Edit</th>
                    <th align="left">Delete</th>
                    <th align="left">First Name</th>
                    <th align="left">Last Name</th>
                    <th align="left">Date of Registration</th>
                </tr>
            </thead>
            <tbody>';
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo '
            <tr>
                <td><a href="edit_user.php?id='.$row['user_id'].'">Edit</a></td>
                <td><a href="delete.php?id='.$row['user_id'].'">Delete</a></td>
                <td>'.$row['first_name'].'</td>
                <td>'.$row['last_name'].'</td>
                <td>'.$row['dr'].'</td>
            </tr>        
        ';
    }        
} else {
    echo "<p>There are currently no registered users in the DB.</p>";
}

?>


    </tbody>
</table>