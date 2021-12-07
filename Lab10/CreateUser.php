<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);



$mysqli = new mysqli("mysql.eecs.ku.edu", "m691s257", "oyuK4aiw", "m691s257");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error); exit();
}

$stmt = $mysqli->prepare("INSERT INTO Users(user_id) VALUES(?)");
$stmt->bind_param("s", $usname);
$usname = $_POST["user"];
if($usname == null)
{
    echo "Cannot add blank username";
} else {

    if($stmt->execute())
    {
        echo "Added User Successfully";
    } else {
        echo "user already exists";
    }
}
/*
$query = "SELECT user_id FROM Users";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        printf ("%s \n", $row["user_id"]);
    }


$result->free();
}
*/
$stmt->close();
$mysqli->close();

?>