<?php
// include database connection file
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Quiz Management System</title>
<meta name="viewport" content="width=device-width, initialscale=1">
<link
href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.
css" rel="stylesheet">
<style type="text/css">
</style>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script
src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js
"></script>
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
<script
src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h2>Quiz Management System</h2> <hr />
<a href="result.php"><button class="btn btn-primary"> Add Result</button></a>
<a href="report.php"><button class="btn btn-primary"> View Report</button></a>
</div>
</div>
<div class="row-md-2">
<?php
$sql1 = mysqli_query($con,"select Participant_ID from `participant`");
$count1 = mysqli_num_rows($sql1);
echo "</br> Total number of participants : $count1";
$sql2 = mysqli_query($con,"select Provider_ID from `quiz_provider`");
$count2 = mysqli_num_rows($sql2);
echo "</br> Total number of quiz providers : $count2";
$sql3 = mysqli_query($con,"select Section_ID from `section`");
$count3 = mysqli_num_rows($sql3);
echo "</br> Total number of quiz sections : $count3";
?>
</div>
</div>
</body>
</html>