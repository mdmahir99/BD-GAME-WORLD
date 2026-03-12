<?php
include "../config/config.php";

$q = mysqli_query($conn,"SELECT * FROM withdraws WHERE status='pending'");

while($row = mysqli_fetch_assoc($q)){

echo "User ID: ".$row['user_id'];
echo " Amount: ".$row['amount'];

echo " <a href='approve_withdraw.php?id=".$row['id']."'>Approve</a>";

echo "<br><br>";

}
?>