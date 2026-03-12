<?php

include "config/config.php";

if(isset($_POST['login'])){

$email=$_POST['email'];
$password=$_POST['password'];

$q=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");

$user=mysqli_fetch_assoc($q);

if(password_verify($password,$user['password'])){

$_SESSION['user']=$user['id'];

header("Location:dashboard.php");

}else{

echo "Login Failed";

}

}

?>

<form method="post">

<input name="email" placeholder="Email"><br>
<input name="password" type="password" placeholder="Password"><br>

<button name="login">Login</button>

</form>