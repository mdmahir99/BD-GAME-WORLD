<?php

include "../config/config.php";

$id = $_GET['id'];

$q = mysqli_query($conn,"SELECT * FROM withdraws WHERE id='$id'");

$d = mysqli_fetch_assoc($q);

$user = $d['user_id'];
$amount = $d['amount'];

mysqli_query($conn,"UPDATE users SET balance = balance - $amount WHERE id='$user'");

mysqli_query($conn,"UPDATE withdraws SET status='approved' WHERE id='$id'");

echo "Withdraw Approved";

?>