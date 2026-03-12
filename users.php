<?php

include "../config/config.php";

if(!isset($_SESSION['admin'])){
header("Location: admin_login.php");
}

$q = mysqli_query($conn,"SELECT * FROM users");

?>

<!DOCTYPE html>
<html>
<head>

<title>All Users</title>

<link rel="stylesheet" href="../assets/style.css">

</head>

<body>

<h2>All Users</h2>

<table border="1" width="100%">

<tr>

<th>ID</th>
<th>Username</th>
<th>Email</th>
<th>Balance</th>
<th>Referral Code</th>
<th>Referred By</th>
<th>Action</th>

</tr>

<?php

while($row = mysqli_fetch_assoc($q)){

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['balance']; ?> Tk</td>
<td><?php echo $row['referral_code']; ?></td>
<td><?php echo $row['referred_by']; ?></td>

<td>

<a href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a> |

<a href="delete_user.php?id=<?php echo $row['id']; ?>">Delete</a>

</td>

</tr>

<?php } ?>

</table>

<br><br>

<a href="admin_dashboard.php">Back To Dashboard</a>

</body>
</html>