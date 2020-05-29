<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db = "cookbook";
// Create connection
$connection = mysqli_connect($servername, $username, $password, $db);
// Check connection
if (!$connection) {
   die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

// Step 2: Preform Database Query
$query = "SELECT * FROM recipes";
$result = mysqli_query($connection, $query);


// Check there are no errors with SQL statement
if (!$result) {
    die ("Database query failed.");
}

?>