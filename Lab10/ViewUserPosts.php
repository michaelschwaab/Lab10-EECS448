<?php
$auth_id = $_POST["user"];
$mysqli = new mysqli("mysql.eecs.ku.edu", "m691s257", "oyuK4aiw", "m691s257");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error); exit();
}

$query = "SELECT post_id, content, author_id FROM Posts";
if ($result = $mysqli->query($query)) {
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
            
                printf ("%s %s %s", $row["post_id"], $row["content"], $row["author_id"]);
                echo "<br>";
            
            
        
    }
    
    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();

echo $auth_id;
?>