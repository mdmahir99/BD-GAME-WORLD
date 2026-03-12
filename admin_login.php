<?php

include "../config/config.php";

if(isset($_POST['login'])){

$user=$_POST['username'];
$pass=$_POST['password'];

$q=mysqli_query($conn,"SELECT * FROM admin WHERE username='$user' AND password='$pass'");

if(mysqli_num_rows($q)){

$_SESSION['admin']=1;

header("Location:admin_dashboard.php");

}

}

?>

<form method="post">

<input name="username">
<input name="password" type="password">

<button name="login">Login</button>

</form>