<?php

//$message = $_POST["mess"];

//echo $message;


$mysqli = new mysqli("mysql.eecs.ku.edu", "m691s257", "oyuK4aiw", "m691s257");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error); exit();
}

$stmt = $mysqli->prepare("INSERT INTO Posts(content, author_id) VALUES(?, ?)");
$stmt->bind_param("ss", $message, $auth_id);
$message = $_POST["mess"];
$auth_id = $_POST["us"];
if($message == null)
{
    echo "Cannot add blank message";
} elseif($auth_id == null) {
    echo "Cannot add message without a username";
}
 else {
    
   if($stmt->execute())
   {
       echo "Added message Successfully";
   } else {
       echo "invalid username";
   }
    
}

$stmt->close();
$mysqli->close();


?>