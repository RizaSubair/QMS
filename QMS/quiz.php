<?php
// include database connection file
include 'connect.php';
if(isset($_POST['insert']))
{
// Posted Values
$id=$_POST['id'];
$qname=$_POST['quizname'];
$secId=$_POST['secId'];
$proId=$_POST['proId'];
$time=$_POST['time'];
// Call the store procedure for insertion
$sql ="insert into `quiz` (Quiz_ID,Quiz_name,Section_ID,Provider_ID,Duration)
value('$id','$qname','$secId','$proId','$time')";
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
<title>PHP for add quiz </title>
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
<h3>Register Quiz</h3>
<hr />
</div>
</div>
<div class="row">
<div class="col-md-2">
<a href="provider.php"><button class="btn btn-primary"> Add Provider</button></a>
</div>
<div class="col-md-2">
<a href="section.php"><button class="btn btn-primary"> Add Section</button></a>
</div>
<div class="col-md-2">
<a href="question.php"><button class="btn btn-primary"> Add Question</button></a>
</div>
</div>

<form name="insertquiz" method="post" style="margin-top:1%">
<div class="row">
<div class="col-md-4"><b>Quiz ID</b>
<input type="text" name="id" class="form-control" required>
</div>
<div class="col-md-4"><b>Quiz name</b>
<input type="text" name="qname" class="form-control" maxlength="10" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Section_ID</b>
<input type="text" name="secId" class="form-control" required>
</div>
<div class="col-md-4"><b>Provider_ID</b>
<input type="number_format" name="proId" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Duration</b>
<input type="number_format" name="time" class="form-control" required>
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
<div class="row">
<div class="col-md-4">
<?php
$sql = "select Provider_ID, Provider_name from quiz_provider";
$result = mysqli_query($con, $sql);
echo "</br>Existed Quiz provider IDs and names";
while($row = mysqli_fetch_array($result)){
	echo "<li>{$row['Provider_ID']} : {$row['Provider_name']}</li>";
}
?>
</div>
<div class="col-md-4">
<?php
$sql = "select Section_ID, Section_name from section";
$result = mysqli_query($con, $sql);
echo "</br>Existed Section IDs and names";
while($row = mysqli_fetch_array($result)){
	echo "<li>{$row['Section_ID']} : {$row['Section_name']}</li>";
}
?>
</div>
</div>
</div>
</div>
</body>
</html>



