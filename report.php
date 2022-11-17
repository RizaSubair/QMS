<?php
// include database connection file
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PHP for Report </title>
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
<h3>Results Report</h3>
<hr />
<form method="get">
<?php
$sql = mysqli_query($con, "select * from `quiz`");
echo "<select name='qid'>";
while($row = mysqli_fetch_array($sql)){
echo "<option value='{$row['Quiz_ID']}'>{$row['Quiz_name']}</option>";
}
echo "</select>";
?>
<input type="submit" value="Search">
</form>
<?php
if(isset($_GET['qid'])){
	$qid = $_GET['qid'];
	$query = "select Participant_name,Quiz_name,Score,Evaluation 
	from `result`r,`participant`p,`quiz`q
	where p.Participant_ID=r.Participant_ID
	and q.Quiz_ID=r.Quiz_ID
	and r.Quiz_ID = '{$qid}'";
	$result = mysqli_query($con, $query);
	$count = mysqli_num_rows($result);
	echo "<br/>$count Records Found";
	echo "<table border='1' align='center' style='width:75%' height='100'>";
	echo "<tr>";
	echo "<th style='text-align: center'>Participant name</th>";
	echo "<th style='text-align: center'>Quiz name</th>";
	echo "<th style='text-align: center'>Score</th>";
	echo "<th style='text-align: center'>Evaluation</th>";
	echo "</tr>";
	
	while($row = mysqli_fetch_array($result)){
		$report = mysqli_query($con,$query);
		$quizname = mysqli_fetch_array($report);
		echo "<tr>";
		echo "<td style='text-align: center'>{$row['Participant_name']}</td>";
		echo "<td style='text-align: center'>{$row['Quiz_name']}</td>";
		echo "<td style='text-align: center'>{$row['Score']}</td>";
		echo "<td style='text-align: center'>{$row['Evaluation']}</td>";
		echo "</tr>";
	}
	echo "</table>";
}
?>
</div>
</div>
</div>
</body>
</html>