<?php
echo '<h1>Registered Users</h1>';
require('mysqli_connect.php');
$displayLimit = 10;


// setting number of pages
if (isset($_GET['numberOfPages']) && is_numeric($_GET['numberOfPages'])) {
    $numberOfPages = $_GET['numberOfPages'];
    echo $numberOfPages . '<br>';
} else {
    $query = "SELECT COUNT(user_id) FROM users;";
    $result = mysqli_query($dbc, $query);
    $row = mysqli_fetch_array($result, MYSQLI_NUM); 
    $records = $row[0];
    if ($records > $displayLimit) {
        $numberOfPages = ceil($records/ $displayLimit);
        echo $numberOfPages . '<br>';
    } else {
        $numberOfPages = 1;
        echo $numberOfPages . '<br>';
    }
}

// setting the values of query start
if (isset($_GET['start']) && is_numeric($_GET['start'])) {
    $start = $_GET['start'];
    echo $start . '<br>';
} else {
    $start = 0;
    echo $start . '<br>';
}

// sorting 
$sort = (isset($_GET['orderBy'])) ? $_GET['orderBy'] : 'rd';

// Determine the sorting order:
switch ($sort) {
	case 'ln':
		$orderBy = 'last_name ASC';
		break;
	case 'fn':
		$orderBy = 'first_name ASC';
		break;
	case 'rd':
		$orderBy = 'registration_date ASC';
		break;
	default:
        $orderBy = 'registration_date ASC';
		$sort = 'rd';
		break;
}
echo $orderBy .'<br>';

//$query = "SELECT user_id, first_name, last_name, DATE_FORMAT(registration_date, '%c %b, %Y') AS dr, user_id FROM users ORDER BY $orderBy LIMIT $start, $displayLimit;";
$query = "SELECT user_id, first_name, last_name, DATE_FORMAT(registration_date, '%c %b, %Y') AS dr, user_id FROM users LIMIT $start, $displayLimit;";
$result = mysqli_query($dbc, $query);

echo $query;

echo '
<table width="60%">
    <thead>
        <tr>
            <th align="left">Edit</th>
            <th align="left">Delete</th>
            <th align="left">User ID</th>
            <th align="left">First Name</th>
            <th align="left">Last Name</th>
            <th align="left">Date Registered</th>
        </tr>
    </thead>
    <tbody>
';

$bgcolor = 'bgcolor="#eeeeee"';

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
$bgcolor = ($bgcolor=='bgcolor="#eeeeee"' ? 'bgcolor="#ffffff"' : 'bgcolor="#eeeeee"');    
echo '
        <tr '.$bgcolor.'>
            <td><a href="edit_user.php?id='.$row['user_id'].'">Edit</a></td>
            <td><a href="delete_user.php?id='.$row['user_id'].'">Delete</a></td>
            <td>'.$row['user_id'].'</td>
            <td>'.$row['first_name'].'</td>
            <td>'.$row['last_name'].'</td>
            <td>'.$row['dr'].'</td>
        </tr>
';
}

echo '
    </tbody>
</table>
';

if ($numberOfPages > 1) {

    //echo $start;
    $currentPage = $start/$displayLimit + 1;

    if ($currentPage != 1) {
        echo '<a href="example-view-users3.php?start='.($start-$displayLimit).'&amp;numberOfPages='.$numberOfPages.'&amp;orderBy='.$sort.'">Previous</a>';
    }

    for ($i = 1; $i <= $numberOfPages; $i++) {
        if ($i !== $currentPage) {
            echo '<a href="example-view-users3.php?start='.($i-1)*$displayLimit.'&amp;numberOfPages='.$numberOfPages.'&amp;orderBy='.$sort.'">'.$i.'</a>  ';
        } else {
            echo $i;
        }
        
    }

    if ($currentPage != $numberOfPages) {
        echo '<a href="example-view-users3.php?start='.($start+$displayLimit).'&amp;numberOfPages='.$numberOfPages.'&amp;orderBy='.$sort.'">Next</a>';
    }
}