<?php
// include database connection file
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title align="center">Quiz Management System</title>
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
<div class="sidenav">

  <img src="https://i.pinimg.com/originals/d0/33/30/d0333051d24ff9adba8cc63b100016a9.png" alt="HTML5 Icon" width="250" height="200">

  <br></br>
  <a href="report.php">View Results<a href="report.php">View Results</a></a>
  <a href="result.php">View</a>
  <a href="add_result.php">Add Results</a>
  <a href="add_quiz.php">Add Quiz</a>
  <a href="add_question.php">Add Quiz Question</a> 
  <a href="add_section.php">Add Section</a>
  <a href="login.php">Logout</a>
  
</div>
<style>
.sidenav {
  height: 100%; /* Full-height: remove this if you want "auto" height */
  width: 250px; /* Set the width of the sidebar */
  position: fixed; /* Fixed Sidebar (stay in place on scroll) */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #BFC9CA; 
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 32px;
}

/* The navigation menu links */
.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 22px;
  color: #34495E;
  display: block;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Style page content */
.main {
  margin-left: 250px; /* Same as the width of the sidebar */
  padding: 0px 10px;
  
}

.order-card {
    color: rgb(255, 255, 255);
}
  
.bg-c-blue {
    background: #04868f;
}
  
.bg-c-green {
    background:#4C51BF;
}

.bg-c-yellow {
    background: #F56565;
}
  
.bg-c-pink {
    background: #663a30;
}
  
.card {
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4, 26, 55, 0.16);
    border: 1px solid black;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
  
.card .card-block {
    padding: 16px;
}
  
.order-card i {
    font-size: 26px;
}
  
.f-left {
    float: left;
}
  
.f-right {
    float: right;
}      

/* On smaller screens, where height is less than 450px, change the style of the sidebar (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
<!-- Page content -->
<body>
<div class="main">
<div class="container">
<div class="row">
<div class="col-md-12">
<h1>Quiz Management System</h1> <hr />
</div>
</div>

<div class="container">
    <div class="row">
      <div class="col-md-4 col-xl-3">
        <div class="card bg-c-blue order-card">
          <div class="card-block">
            <h4 class="m-b-20"> <a href="rd_participant.php" style="text-decoration: none;color:white;">Total Participants</a> </h4>
            <h2 class="text-right"><i class="fas fa-user-graduate f-left"></i><span>
<?php
$sql1 = mysqli_query($con,"select Participant_ID from `participant`");
$count1 = mysqli_num_rows($sql1);
echo "</br> $count1";
?>
</span></h2>
            
          </div>
        </div>
      </div>

<div class="col-md-4 col-xl-3">
        <div class="card bg-c-green order-card">
          <div class="card-block">
            <h4 class="m-b-20"><a href="rd_provider.php" style="text-decoration: none;color:white;">Total Quiz Providers</a> </h4>
            <h2 class="text-right"><i class="fas fa-chalkboard-teacher f-left"></i><span>
<?php
$sql2 = mysqli_query($con,"select Provider_ID from `quiz_provider`");
$count2 = mysqli_num_rows($sql2);
echo "</br> $count2";
?>
</span></h2>
            
          </div>
        </div>
      </div>
	  </div>

<div class="row">
<div class="col-md-4 col-xl-3">
        <div class="card bg-c-yellow order-card">
          <div class="card-block">
            <h4 class="m-b-20"><a href="rd_quiz.php" style="text-decoration: none;color:white;">Total Quizzes</a></h4>
           <h2 class="text-right"><i class="fas fa-book f-left"></i><span>
		   <?php
$sql3 = mysqli_query($con,"select Quiz_ID from `quiz`");
$count3 = mysqli_num_rows($sql3);
echo "</br> $count3";
?>
</span></h2>
            
          </div>
        </div>
      </div>

<div class="col-md-4 col-xl-3">
        <div class="card bg-c-pink order-card">
          <div class="card-block">
            <h4 class="m-b-20"><a href="rd_section.php" style="text-decoration: none;color:white;">Total Quiz Sections</a></h4>
            <h2 class="text-right"><i class="fas fa-question-circle f-left"></i><span>
			<?php
$sql4 = mysqli_query($con,"select Section_ID from `section`");
$count4 = mysqli_num_rows($sql4);
echo "</br> $count4";
?>
</span></h2>
            
          </div>
        </div>
      </div>
</div>
</div>
</body>
</html>