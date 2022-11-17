<?php
// include database connection file
require_once'connect.php';
if(isset($_POST['update']))
{
// Get the row id
$qid=intval($_GET['id']);
// Posted Values
$qname=$_POST['qname'];
$duration=$_POST['durn'];
$question=$_POST['que'];
$ch1=$_POST['c1'];
$ch2=$_POST['c2'];
$ch3=$_POST['c3'];
$ch4=$_POST['c4'];
$ans=$_POST['ans'];
// Store Procedure for Updation
$sql=mysqli_query($con,"call qz_update('$qname','$duration','$question','$ch1','$ch2','$ch3','$ch4','$ans')");
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='rd_quiz.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PHP Update quiz </title>
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
<h3>Update Quiz Record</h3>
<hr />
</div>
</div>
<?php
require_once'connect.php';
// Get the userid
$id=intval($_GET['id']);
$sql =mysqli_query($con, "call qz_readarow('$id')");
while($result=mysqli_fetch_array($sql)){
?>
<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Quiz Name</b>
<input type="text" name="qname" value="<?php echo
htmlentities($result['Quiz_name']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Duration</b>
<input type="number_format" name="durn" value="<?php echo 
htmlentities($result['Duration']);?>" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Question</b>
<input type="text" name="que" value="<?php echo
htmlentities($result['Question']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Answer</b>
<input type="text" name="ans" value="<?php echo
htmlentities($result['Answer']);?>" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Choice 1</b>
<input type="text" name="c1" value="<?php echo
htmlentities($result['Choice_1']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Choice 2</b>
<input type="text" name="c2" value="<?php echo
htmlentities($result['Choice_2']);?>" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Choice 3</b>
<input type="text" name="c3" value="<?php echo
htmlentities($result['Choice_3']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Choice 4</b>
<input type="text" name="c4" value="<?php echo
htmlentities($result['Choice_4']);?>" class="form-control" required>
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

