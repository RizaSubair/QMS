<?php
// include database connection file
include 'connect.php';
if(isset($_POST['insert']))
{
// Posted Values
$secID=$_POST['SectionID'];
$secName=$_POST['Section_name'];


// Call the store procedure for insertion
$sql ="insert into `section` (Section_ID,Section_name)
value('$secID,'$secName')";
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
<title>PHP for add section </title>
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
<h3>Register Section</h3>
<hr />
</div>
</div>
<form name="insertsection" method="post">
<div class="row">
<div class="col-md-4"><b>Section ID</b>
<input type="text" name="SectionID" class="form-control" required>
</div>
<div class="col-md-4"><b>Section name</b>
<input type="text" name="Section_name" class="form-control" maxlength="10" required>
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