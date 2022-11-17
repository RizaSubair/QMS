<?php
// include database connection file
include 'connect.php';
if(isset($_POST['insert']))
{
// Posted Values
$qid=$_POST['qid'];
$que=$_POST['que'];
$ch1=$_POST['ch1'];
$ch2=$_POST['ch2'];
$ch3=$_POST['ch3'];
$ch4=$_POST['ch4'];
$ans=$_POST['ans'];
// Call the store procedure for insertion
$sql ="insert into `question_bank` (Quiz_ID,Question,Choice_1,Choice_2,Choice_3,Choice_4,Answer)
value('$qid','$que','$ch1','$ch2','$ch3','$ch4','$ans')";
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
<title>PHP for add question </title>
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
<h3>Question</h3>
<hr />
</div>
</div>
<form name="insertquiz" method="post">
<div class="row">
<div class="col-md-4"><b>Quiz ID</b>
<input type="text" name="qid" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Question</b>
<input type="text" name="que" class="form-control" required>
</div>
<div class="col-md-4"><b>Answer</b>
<input type="text" name="ans" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Choice 1</b>
<input type="text" name="ch1" class="form-control" required>
</div>
<div class="col-md-4"><b>Choice 2</b>
<input type="text" name="ch2" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Choice 3</b>
<input type="text" name="ch3" class="form-control" required>
</div>
<div class="col-md-4"><b>Choice 4</b>
<input type="text" name="ch4" class="form-control" required>
</div>
</div>
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



