<?php
include "config/config.php";

if(!isset($_SESSION['user'])){
header("Location: login.php");
}

$id = $_SESSION['user'];

if(isset($_POST['withdraw'])){

$amount = $_POST['amount'];

$q = mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
$user = mysqli_fetch_assoc($q);

if($user['balance'] >= $amount){

$new = $user['balance'] - $amount;

mysqli_query($conn,"UPDATE users SET balance='$new' WHERE id='$id'");

echo "Withdraw Request Success";

}else{

echo "Balance Not Enough";

}

}

?>

<h2>Withdraw Money</h2>

<form method="post">

<input type="number" name="amount" placeholder="Amount">

<br><br>

<button name="withdraw">Withdraw</button>

</form>