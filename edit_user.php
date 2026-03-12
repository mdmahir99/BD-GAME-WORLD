<?php

include "../config/config.php";

$id = $_GET['id'];

if(isset($_POST['update'])){

$balance = $_POST['balance'];

mysqli_query($conn,"UPDATE users SET balance='$balance' WHERE id='$id'");

echo "User Updated";

}

?>

<form method="post">

<input name="balance" placeholder="New Balance">

<button name="update">Update</button>

</form>