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

$sql = "DELETE FROM eBook_metaData WHERE ID = $GET_['deleteHere']"
if ($conn->query($sql) === TRUE) {
    echo "Row has been deleted";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
