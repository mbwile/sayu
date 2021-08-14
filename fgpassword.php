<?php
session_start();
//prepare db details
$host="localhost";
$dbuser="root";
$dbname="sayu";
$dbpassword="";
//connect to the database
$con = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
?>
<div class="sawa">
<?php
if(isset($_POST['forgot_btn'])){
    $fname = $_POST['fname'];
	$phonenumber = $_POST['phonenumber'];
	

    $ombi = "SELECT * FROM users 
    WHERE fname='$fname'
    AND
	phonenumber='$phonenumber'";
	 $users = mysqli_query($con, $ombi);
	 $num_row = mysqli_num_rows($users);
	 if($num_row == 1){
		 while($user = mysqli_fetch_array($users)){
			$fname = $user['fname'];
			$lname = $user['lname'];
			$id = $user['id'];
			$shopname = $user['shopname'];
			$location = $user['location'];
			$password = $user['password'];
		
			 if($fname == $user['fname'] && $phonenumber == $user['phonenumber']){
				echo"$password";
			 }else {
				 echo "The data does not match";
			 }
			 
		 }
     }
     else{
        echo "The data does not match";
    }
	 
}
?>
</div>
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
  margin-right:200px;
  margin-top:-20px;
  height:250px;

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
	width:150px;
}
.sawa{
    color:white;
text-align:center;
font-weight: bold;
font-size: 40px;
}
    </style>
<body>
	<div class="header">
		<h2>Forgotten Password</h2>
	</div>
	<form method="post" action="fgpassword.php">

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="fname" >
		</div>
		<div class="input-group">
			<label>phonenumber</label>
			<input type="number" name="phonenumber">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="forgot_btn">check password</button>
		</div>
	</form>
</body>
</html>