<?php
//prepare db details
$host="localhost";
$dbuser="root";
$dbname="sayu";
$dbpassword="";
//connect to the database
$con = mysqli_connect($host,$dbuser,$dbpassword,$dbname);

if(isset($_POST['register_btn'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $phonenumber = $_POST['phonenumber'];
    $shopname = $_POST['shopname'];
	
	
    $ombi = "INSERT INTO users VALUES('','$fname','$lname','$password','$email','$location','$phonenumber','$shopname','normal')";
	mysqli_query($con, $ombi);
	
	header('location: create_user.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
<style>
body{
background-color: darkgreen;
background-size: cover;
background-repeat: no-repeat;
background-position: center;
background-image: linear-gradient(to right,darkgreen,greenyellow);
}
 
form{
  width:430px;
  background-color:greenyellow;
  position:relative;  
  padding-top:10px;
  padding-right:10px;
  padding-left:50px;
  text-align:center;
  border-radius: 25px;
  box-shadow: 10px 10px white;
  margin-right:187px;
  margin-top:-20px;
  height:650px;
}
.header{
	width:450px;
    text-align:center;
	color:white;
	background-color:green;
	margin-left:400px;
    padding-top:40px;
    box-shadow: 10px 10px white;
}
.btn{
	background-color:yellow;
	color:black;
}
 .btn:hover{
	background-color:darkgreen;
	color:white;
}
	</style>
	<button style="margin-left:420px; margin-top:5px;width:220px;" class="btn"><a href="admin.php">GO BACK </a></button>
	<button style="margin-left:10px; margin-top:5px;width:220px;" class="btn"><a href="forestshop.php">GO FORWARD</a></button>
<div class="header">
	<h2>Create Users</h2>
</div>
<form method="post" action="create_user.php">
	<div class="input-group">
		<label>Firstname</label>
		<input type="text" name="fname" value="">
	</div>
	<div class="input-group">
	<label>Lastname</label>
		<input type="text" name="lname" value="">
	</div>
    <div class="input-group">
		<label>Password</label>
		<input type="password" name="password">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="">
	</div>
	
	<div class="input-group">
	<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
                       <select class="form-control" name="location" required="required">
                           <option disabled>Select your street</option>
                           <option>mwasyoge</option>
                           <option>nyibuko</option>
                           <option>utukuyu</option>
                           <option>mbata</option>
                           <option>kabwe</option>
                           <option>mwanjelwa</option>
                           <option>soweto</option>
                       </select>
	</div>
	<div class="input-group">
		<label>Phone number</label>
		<input type="text" name="phonenumber">
	</div>
	<div class="input-group">
		<label>Shop name</label>
		<input type="text" name="shopname">
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>
</form>
</body>
</html>