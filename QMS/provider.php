<?php
// include database connection file
include 'connect.php';
if(isset($_POST['insert']))
{
// Posted Values
$name=$_POST['name'];
$emailid=$_POST['emailid'];
$uname=$_POST['username'];
$pswrd=$_POST['password'];
// Call the store procedure for insertion
$sql ="insert into `quiz_provider` (Provider_name,provider_mail,Username,Password)
value('$name','$emailid','$uname','$pswrd')";
$result=mysqli_query($con,$sql);
if($result)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try
again');</script>";
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PHP FOR INSERTION </title>
<meta name="viewport" content="width=device-width, initialscale=1">
<link
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.
css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js
"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Quiz Provider Form</h3>
<hr />
</div>
</div>
<form name="insertprovider" method="post">
<div class="row">
<div class="col-md-4"><b>Name</b>
<input type="text" name="name" class="form-control" required>
</div>
<div class="col-md-4"><b>Username</b>
<input type="text" name="username" class="form-control" maxlength="10" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Email id</b>
<input type="email" name="emailid" class="form-control" required>
</div>
<div class="col-md-4"><b>Password</b>
<input type="text" name="password" class="form-control" required>
</div>
</div>
<div class="row">
</div>
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="insert" value="Submit">
</div>
</div>
</form>
</div>
</div>
</body>
</html>