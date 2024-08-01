<?php
echo '<h1>Registered Users</h1>';

require('mysqli_connect.php');

$query = "SELECT CONCAT(first_name, ', ', last_name) AS name, DATE_FORMAT(registration_date, '%b %c, %Y') AS dr FROM users;";
$result = mysqli_query($dbc, $query);
$number = mysqli_num_rows($result);

echo "<p>There are currently $number registered users.</p>";

echo '<table width="60%">
    <thead>
        <tr>
            <th align="left">Name</th>
            <th align="left">Date Registered</th>
        </tr>
    </thead>
    <tbody>';
        while($row = mysqli_fetch_array($result)) {
            echo '<tr><td>'.$row['name'].'</td><td>'.$row['dr'].'</td></tr>';
            //<tr><td>Jones, David</td><td>July 29, 2024</td></tr>
        }
echo '</tbody>
</table>';

mysqli_free_result($result);
mysqli_close($dbc);
