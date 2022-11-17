<?php
// include database connection file
include 'connect.php';
if(isset($_POST['insert']))
{
// Posted Values
$id=$_POST['qid'];
$pid=$_POST['pid'];
$scr=$_POST['scr'];
$evln=$_POST['evln'];
// Call the store procedure for insertion
$sql ="insert into `result` (Quiz_ID,Participant_ID,Score,Evaluation)
value('$id','$pid','$scr','$evln')";
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
<title>PHP for add result</title>
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
<h3>Result</h3>
<hr />
</div>
</div>
<div class="row">
<div class="col-md-2">
<a href="add_participant.php"><button class="btn btn-primary"> Add Participant</button></a>
</div>
</div>
<form name="insertquiz" method="post" style="margin-top:1%">
<div class="row">
<div class="col-md-4"><b>Quiz ID</b>
<input type="text" name="qid" class="form-control" required>
</div>
<div class="col-md-4"><b>Participant ID</b>
<input type="text" name="pid" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Score</b>
<input type="text" name="scr" class="form-control" required>
</div>
<div class="col-md-4"><b>Evaluation</b>
<input type="text" name="evln" class="form-control" required>
</div>
</div>

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="insert" value="Submit">
</div>
</div>
</form>
<div class="row">
<div class="col-md-4">
<?php
$sql = "select Quiz_ID, Quiz_name from quiz";
$result = mysqli_query($con, $sql);
echo "</br>Existed Quiz IDs and names";
while($row = mysqli_fetch_array($result)){
	echo "<li>{$row['Quiz_ID']} : {$row['Quiz_name']}</li>";
}
?>
</div>
<div class="col-md-4">
<?php
$sql = "select Participant_ID, Participant_name from participant";
$result = mysqli_query($con, $sql);
echo "</br>Existed Participant IDs and names";
while($row = mysqli_fetch_array($result)){
	echo "<li>{$row['Participant_ID']} : {$row['Participant_name']}</li>";
}
?>
</div>
</div>
</div>
</body>
</html>



