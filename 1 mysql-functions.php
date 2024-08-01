<?php
// Make the connection:
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('Could not connect to MySQL: ' . mysqli_connect_error() );

// Set the encoding...
mysqli_set_charset($dbc, 'utf8');

mysqli_query($dbc,'');
mysqli_error($dbc);
mysqli_close($dbc);
mysqli_real_escape_string($dbc,'');
mysqli_multi_query();


mysqli_fetch_array();
mysqli_free_result();

mysqli_affected_rows($dbc);