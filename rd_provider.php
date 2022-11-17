<?php
// include database connection file
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>PHP CRUD Operations  </title>
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
src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><
/script>
<script
src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Quiz Provider List</h3> <hr />
<div class="table-responsive">
<table id="mytable" class="table table-bordred table-striped">
<thead>
<th>ID</th>
<th>Name</th>
<th>Username</th>
<th>Email</th>
<th>Edit</th>
</thead>
<tbody>
<?php
$sql = "select Provider_ID, Provider_name, Username, Provider_mail from quiz_provider";
$output =mysqli_query($con, $sql);
$row=mysqli_num_rows($output);
if($row>0){
while ($result=mysqli_fetch_array($output)) {
?>
<tr>
<td><?php echo htmlentities($result['Provider_ID']);?></td>
<td><?php echo htmlentities($result['Provider_name']);?></td>
<td><?php echo htmlentities($result['Username']);?></td>
<td><?php echo htmlentities($result['Provider_mail']);?></td>
<td><a href="upd_provider.php?id=<?php echo
htmlentities($result['Provider_ID']);?>"><button class="btn btn-primary btnxs">Update</button></a></td>
</tr>
<?php
} } else { ?>
<tr>
<td colspan="9" style="color:red; font-weight:bold;textalign:center;"> No Record found</td>
</tr>
<?php } ?>
</tbody>

</table>
</div>
</div>
</div>
</div>
</body>
</html>