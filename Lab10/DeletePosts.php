<?php

/*
$mysqli = new mysqli("mysql.eecs.ku.edu", "m691s257", "oyuK4aiw", "m691s257");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error); exit();
}

$query = "SELECT * FROM Posts";
if ($result = $mysqli->query($query)) {
    
    echo "<form action="."DeletePosts.php".">";
    
    while ($row = $result->fetch_assoc()) {
        echo "<input type="."checkbox"." id=". $row["post_id"] ." name=". $row["post_id"] .
             " value=". $row["post_id"] .">";
        echo "<label for=". $row["post_id"] . ">". $row["content"] ."</label><br>";
    }
    
    echo "<input type="."submit"." value="."Submit".">";
    echo "</form>";
    
    $result->free();
}


$mysqli->close();
*/




$mysqli = new mysqli("mysql.eecs.ku.edu", "m691s257", "oyuK4aiw", "m691s257");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error); exit();
}

$stmt = $mysqli->prepare("DELETE FROM Posts WHERE ?");
$stmt->bind_param("s", $target);

$target = $_POST["del"];

  
$stmt->execute();


$stmt->close();
$mysqli->close();


?>