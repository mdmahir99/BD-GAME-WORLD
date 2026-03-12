<?php

include "../config/config.php";

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM users WHERE id='$id'");

echo "User Deleted";

?>