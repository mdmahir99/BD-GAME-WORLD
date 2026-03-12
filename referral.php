<?php

include "config/config.php";

$id = $_SESSION['user'];

$q = mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
$user = mysqli_fetch_assoc($q);

?>

<h2>Your Referral Code</h2>

<?php echo $user['referral_code']; ?>

<br><br>

<p>Per Successful Referral = 20 Tk Bonus</p>