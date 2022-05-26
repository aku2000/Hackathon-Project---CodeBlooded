<?php
session_start();
$id= $_SESSION['id'];
include 'connection.php';
$sql = "SELECT * FROM `student` WHERE id=$id";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);

$query="SELECT scholarship_name,status FROM `apply_scholarship_student` WHERE id=$id";
$resultquery = mysqli_query($con,$query);
if(mysqli_num_rows($resultquery) > 0){
}
else
{
  $msg = "No Record found";
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Leave Status Student</title>
  <link rel="stylesheet" type="text/css" href="student.css">
	<link rel="stylesheet" type="text/css" href="leave_status.css">
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
              		<li><a href="stafflogin.php">Staff login</a></li>
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
    <br><br>
    <br>
    <h1 style="text-align: center;">Scholarship Status</h1>
    <div class="container">
      <table>
        <tr>
          <thead>
            <th>Scholarship name</th>
            
            <th>Status</th>
            <th>Delete</th>
          </tr>
          </thead>
          <tbody>
						<?php
							while($row = mysqli_fetch_assoc($resultquery))
              {
                echo '<tr>' ;
                echo '<td>' . $row['scholarship_name'] . '</td>' ;
                
                echo '<td>' . $row['status'] . '</td>' ;
                echo "<td><a href='delete_leave_student.php?id=$id'><button type='button' class='btn btn-danger' style='background: lightcoral;'>Delete</button></a></td>";
                echo '<tr>' ;
              }
            ?>
          </tbody>
      </table>
    </div>
</body>
</html>