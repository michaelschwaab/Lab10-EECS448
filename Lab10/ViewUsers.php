<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "m691s257", "oyuK4aiw", "m691s257");
/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error); exit();
}

$query = "SELECT user_id FROM Users";
if ($result = $mysqli->query($query)) {
    /* fetch associative array */
    echo "<table><tr><th>Users</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["user_id"] ."</td></tr>";
        
    }
    echo "</table";
    /* free result set */
    $result->free();
}



/* close connection */
$mysqli->close();


?>
