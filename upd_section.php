<?php
// include database connection file
require_once'connect.php';
if(isset($_POST['update']))
{
// Get the row id
$sid=intval($_GET['id']);
// Posted Values
$sname=$_POST['sectionname'];
// Store Procedure for Updation
$sql=mysqli_query($con,"call sec_update('$sname','$sid')");
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='rd_section.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PHP Update section </title>
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
<h3>Update Section Record</h3>
<hr />
</div>
</div>
<?php
// Get the userid
require_once'connect.php';
$sid=intval($_GET['id']);
$sql =mysqli_query($con, "call sec_readarow('$sid')");
while($result=mysqli_fetch_array($sql)){
?>
<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Section Name</b>
<input type="text" name="sectionname" value="<?php echo
htmlentities($result['Section_name']);?>" class="form-control" required>
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
</body>
</html>


