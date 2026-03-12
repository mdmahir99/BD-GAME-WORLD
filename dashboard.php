<?php

include "config/config.php";

$id=$_SESSION['user'];

$q=mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
$user=mysqli_fetch_assoc($q);

?>

<h2>Welcome <?php echo $user['username']; ?></h2>

Balance: <?php echo $user['balance']; ?> Tk

<br><br>

Your Referral Code

<br>

<?php echo $user['referral_code']; ?>