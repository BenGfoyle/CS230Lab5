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

$sql = 'UPDATE eBook_metaData (row,ID, creator, title, type, identifier, pubDate, langueage, description)
VALUES ($GET_["updateHere"],$GET_["dataID"],$GET_["Creator"],$GET_["Title"],
        $GET_["Type"],$GET_["Identifier"],$GET_["Date"],$GET_["Langueage"],$GET_["Description"])
SET ID = $GET_["dataID"], creator = $GET_["Creator"], title = $GET_["Title"],
         type = $GET_["Type"], identifier = $GET_["Identifier"],
         pubDate = $GET_["Date"], langueage$GET_["Langueage"],
         description = $GET_["Description"]

WHERE ';


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
