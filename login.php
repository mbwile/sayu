<?php
session_start();
//prepare db details
$host="localhost";
$dbuser="root";
$dbname="sayu";
$dbpassword="";
//connect to the database
$con = mysqli_connect($host,$dbuser,$dbpassword,$dbname);

if(isset($_POST['login_btn'])){
    $fname = $_POST['fname'];
	$password = $_POST['password'];
	

    $ombi = "SELECT * FROM users 
    WHERE fname='$fname'
    AND
	password='$password'";
	 $users = mysqli_query($con, $ombi);
	 $num_row = mysqli_num_rows($users);
	 if($num_row == 1){
		 while($user = mysqli_fetch_array($users)){
			$_SESSION['fname'] = $user['fname'];
			$_SESSION['lname'] = $user['lname'];
			$_SESSION['id'] = $user['id'];
			$_SESSION['shopname'] = $user['shopname'];
			$_SESSION['location'] = $user['location'];
		
			 $role = $user['role'];
			 if($role == 'normal'){
				 header('location: user.php');
			 }else if($role == 'admin'){
				 header('location: admin.php');
			 }
			 
		 }
	 }else{
		 echo "Wrong username and password combination please try again";
	 }
	 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
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
	background-color:green;
}
.btn:hover{
	background-color:darkgreen;
	width:70px;
}
    </style>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	<form method="post" action="login.php">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="fname" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>''
		<p><a href="fgpassword.php">Forgot password</a></p>
	</form>
</body>
</html>