<?php
include "../config/config.php";

$q = mysqli_query($conn,"SELECT * FROM deposits WHERE status='pending'");

while($row = mysqli_fetch_assoc($q)){

echo "User ID: ".$row['user_id'];
echo " Amount: ".$row['amount'];

echo " <a href='approve_deposit.php?id=".$row['id']."'>Approve</a>";

echo "<br><br>";

}
?>