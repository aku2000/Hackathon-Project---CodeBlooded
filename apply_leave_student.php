<?php
session_start();
$id= $_SESSION['id'];
include 'connection.php';
$sql = "SELECT * FROM `student` WHERE id=$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$dept = $row['department']
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Scholarship Application</title>
	<link rel="stylesheet" href="apply_leave.css">
	<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
	<input type="checkbox" id="check">
    <label for="check">
      	<i class="fas fa-bars" id="btn"></i>
      	<i class="fas fa-times" id="cancel"></i>
    </label>
    <nav class="sidebar">
      	<div>
        	<img class="logo" src="logo.jpeg">
        	<ul>
          		<li><a href="index.php">Home</a></li>
          		<li><a href="#">Login<i class="fas fa-caret-down"></i></a>
            		<ul>
              			<li><a href="adminlogin.php">Admin login</a></li>
              			<li><a href="stafflogin.php">University login</a></li>
              			<li><a href="studentlogin.php">Student login</a></li>
					</ul>
          		</li>
          		<li><a href="about.php">About</a></li>
       		</ul>
      	</div>
    </nav>
    <div class="topbar">
		<div id="nav">
			<ul>
				<li><?php echo '<img src="data:image;base64,'.base64_encode($row['profile_photo']).'" alt="Avatar" class="avatar">'; ?></li>
				<li><a href="#"> Welcome <?php echo($_SESSION['usrname']); ?>  <i class="fas fa-caret-down"></i></a>
					<ul>
					<li><a href="student.php">Profile</a></li>
						<li><a href="apply_leave_student.php">Apply Scholarship</a></li>
						<li><a href="leave_status_student.php">Scholarship Status</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>	
	</div>
	<div class="wrapper">
		<div class="title">Scholarship Application</div><br>
	  	<form action=" " method="POST">
			<div class="input_field">
				<label>Scholarship Name</label>
				<input type="text" name="sname" class="input" required="*">
		    	
			</div>
			<div class="input_field">
				<label>First Name</label>
				<input type="text" name="fname" class="input" required="*">
				<label>Last Name</label>
				<input type="text" name="lname" class="input" required="*">
			</div>
			<div class="input_field">
				<label>Nationality</label>
				<input type="text" name="countrycode" class="input" required="*">
				<label>Phone Number</label>
				<input type="number" name="phno" class="input" required="*">	
			</div>
			
			<div class="input_field">
				<label>Age</label>
				<input type="number" name="age" class="input" required="*">				
			</div>
			<div class="input_field">
				<label>Course name</label>
				<input type="text" name="course" class="input" required="*">
			</div>
			<div class="input_field">
		    	<label>Specially abled</label>
				<div class="custom_select" style="margin-left:60px">
					<select name="category">
						<option value=" ">Select</option>
						<option value="Yes">Yes</option>
						<option value="No">No</option>	
					</select>
				</div>
			</div>
           
			<div class="input_field">
				<label>Category</label>
				<div class="custom_select" style="margin-left:60px">
					<select name="category1">
						<option value=" ">Select</option>
						<option value="Annually">Annually</option>
						<option value="Course based">Course based</option>
						
					</select>
				</div>
			</div>
			
			<div class="input_field">
				<label>Entrance score</label>
				<input type="number" name="score" class="input" required="*">
		    	<label>Family income</label>
				<input type="number" name="income" class="input" required="*">
			</div>
			
			<!--<div class="input_field">
				<label></label>
				<textarea class="textarea" name="reason" required="*"></textarea>
			</div>-->
			<div class="input_field terms">
				<label class="check">
					<input type="checkbox" required="*">
					<span class="checkmark"></span>
				</label>
				<p>Confirm</p>
			</div>
			<div class="input_field">
				<input type="submit" name="submit" value="Submit" class="btn">
			</div>
	 	</form>   
	</div>
	<?php

	
	include('connection.php');
	if(isset($_POST['submit']))
	{
		$id= $_SESSION['id'];
		$sname = $_POST['sname'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$countrycode = $_POST['countrycode'];
		$phno = $_POST['phno'];
		$age=$_POST['age'];
		$course = $_POST['course'];
		$category = $_POST['category'];
		$category1 = $_POST['category1'];
		$score = $_POST['score'];
		$income = $_POST['income'];
	

   		$query = "INSERT INTO `apply_scholarship_student`(`id`,`scholarship_name`,`first_name`,`last_name`,`country_code`,`phno`,`age`,`course`,`category`,`specially_abled`,`score`,`income`) VALUES('$id','$sname','$fname','$lname','$countrycode','$phno','$age','$course','$category','$category1','$score','$income')";
    	$sql = mysqli_query($con,$query);

    	if($sql){
    		echo "<h2>Applied successfully</h2>";
			//echo $age;
    	}
    	else{
    		echo "<h2>Error occurred while applying</h2>";
			//echo $age;
    	}
	}
	?>
</body>
</html>