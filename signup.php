<?php

include "config/config.php";

if(isset($_POST['signup'])){

$username=$_POST['username'];
$email=$_POST['email'];
$password=password_hash($_POST['password'],PASSWORD_DEFAULT);

$ref=$_POST['ref'];

$myref=rand(10000,99999);

mysqli_query($conn,"INSERT INTO users(username,email,password,referral_code,referred_by)
VALUES('$username','$email','$password','$myref','$ref')");

if($ref!=""){

mysqli_query($conn,"UPDATE users SET balance=balance+20 WHERE referral_code='$ref'");

}

echo "Signup Success";

}

?>

<form method="post">

<input name="username" placeholder="Username"><br>
<input name="email" placeholder="Email"><br>
<input name="password" type="password" placeholder="Password"><br>
<input name="ref" placeholder="Referral Code"><br>

<button name="signup">Signup</button>

</form>