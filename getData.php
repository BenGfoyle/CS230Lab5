<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "eBook_metaData";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = 'SELECT $GET_["getRow"]
        FROM $dbname
        WHERE id = $GET_["getRow"]';

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
