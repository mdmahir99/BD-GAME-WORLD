<?php

include "../config/config.php";

$q=mysqli_query($conn,"SELECT * FROM users");

while($row=mysqli_fetch_assoc($q)){

echo $row['username']." - ".$row['balance']." TK <br>";

}

?>