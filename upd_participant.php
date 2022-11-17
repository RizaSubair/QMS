<?php
// include database connection file
require_once'connect.php';
if(isset($_POST['update']))
{
// Get the row id
$pid=intval($_GET['id']);
// Posted Values
$pname=$_POST['participantname'];
$uname=$_POST['username'];
$emailid=$_POST['emailid'];
$pswrd=$_POST['password'];

// Store Procedure for Updation
$sql=mysqli_query($con,"call part_update('$pname','$uname','$emailid','$pswrd','$pid')");
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='rd_participant.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PHP Update participant </title>
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
<h3>Update Participant Record</h3>
<hr />
</div>
</div>
<?php
// Get the userid
require_once'connect.php';
$pid=intval($_GET['id']);
$sql =mysqli_query($con, "call part_readarow('$pid')");
while($result=mysqli_fetch_array($sql)){
?>
<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Name</b>
<input type="text" name="participantname" value="<?php echo
htmlentities($result['Participant_name']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Username</b>
<input type="text" name="username" value="<?php echo
htmlentities($result['Username']);?>" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Email id</b>
<input type="email" name="emailid" value="<?php echo
htmlentities($result['Mail_address']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Password</b>
<input type="text" name="password" value="<?php echo
htmlentities($result['Password']);?>" class="form-control" required>
</div>
</div>

<?php } ?>

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="update" value="Update">
</div>
</div>
</form>
</div>
</div>
</body>
</html>


