<?php

include "../config/config.php";

$id = $_GET['id'];

$q = mysqli_query($conn,"SELECT * FROM deposits WHERE id='$id'");

$d = mysqli_fetch_assoc($q);

$user = $d['user_id'];
$amount = $d['amount'];

mysqli_query($conn,"UPDATE users SET balance = balance + $amount WHERE id='$user'");

mysqli_query($conn,"UPDATE deposits SET status='approved' WHERE id='$id'");

echo "Deposit Approved";

?>