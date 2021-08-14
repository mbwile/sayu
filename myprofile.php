<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
    <style>
    body{
background-color: darkgreen;
background-size: cover;
background-repeat: no-repeat;
background-position: center;
background-image: linear-gradient(to right,darkgreen,greenyellow);
}
.box {
        width: 600px;
        height: 400px;
        padding: 20px;
        margin: 100px auto;
        box-shadow: 0px 0px 10px 2px grey;
        border: 10px solid red;
        background-image: url(2.jpg);
        background-color:cover;
    }
    form{
    height: 310px;
    text-align: center;
    background-color:green;
    margin-left: 80px;
    padding-top: 10px;
    padding-left: 50px;
    padding-right: 250px;
    width:150px;
    float:right;
   border-radius: 25px;
   box-shadow: 10px 10px white;
   color:white;
  
}
.post{
  width:400px;
  background-color:white;
  position:relative;  
  padding-down:10px;
  padding-right:10px;
  padding-left:50px;
  text-align:center;
  border-radius: 25px;
  box-shadow: 10px 10px yellow;
  text-transform: capitalize;

}
.btn{
    margin-left:500px;
    margin-top:5px;
    width:150px;
    height:30px;
    background-color:greenyellow;
    border-radius: 25px; 
}
.btn:hover{
    
    width:152px;
    height:32px;
    background-color:yellow;
    border-radius: 25px; 
}
    </style>
</head>
<?php
session_start();
$id = $_SESSION['id'];
$fname = $_SESSION['fname'];

$host="localhost";
$dbuser="root";
$dbname="sayu";
$dbpassword="";
//connect to the database
$con = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
?>
<div class="container">
<h2 style="color:white;text-align:center;">Welcome <?php echo $fname ; ?>
<a href="login.php"class="btn btn-primary my-2" style="float:right;">Log out</a>
</h2>
<?php

// Check connection

$ombi= "SELECT * FROM users WHERE `id` = $id";
$result = mysqli_query($con, $ombi);
while($row = mysqli_fetch_array($result)){
   $id = $row['id'];
   $fname = $row['fname'];
   $lname = $row['lname'];
   $password = $row['password'];
   $email = $row['email'];
   $location = $row['location'];
   $phonenumber = $row['phonenumber'];
   $shopname = $row['shopname'];
   
   
 
  // echo "<h1>" .$row['name']. "</h1>";
    //echo "<p>" .$row['content']. "</p>";
   // echo" <a href='?isEditing=1&editId=$id'>Edit</a>
    //<button onclick='futaPost($id)'>Delete</button>";
    echo "</div>";
    $post_zetu = '';
    

    $post_zetu .= "
    <div class='post'>  
        <h2> $fname </h2>
        <h2> $lname </h2>
        <p>$email</p>
        <p>$location</p>
        <p>$phonenumber</p>
        <p>$shopname</p>
        <div>
       
     
        <a href='?isEditing=1&editId=$id'>Edit</a>
    </div>
    </div>
    ";
    
    //DB::query('  
    //SELECT usajili.fname,post1.name.content FROM usajili,post1
    //WHERE post1=name.content')
     echo "$post_zetu";
    
}
//Edit
$isEditing = 0;
if(isset($_GET['isEditing']) && $_GET['isEditing']==1){
    $editId = $_GET['editId'];
    $isEditing = 1;
     $query = "SELECT * FROM users WHERE `id` = $editId LIMIT 1";
     $result = mysqli_query($con, $query);
     
     while($post = mysqli_fetch_array($result)){
         $editFname = $post['lname'];
         $editLname = $post['lname'];
         $editId = $post['id'];
         $editPassword = $post['password'];
         $editEmail = $post['email'];
         $editLocation = $post['location'];
         $editPhonenumber = $post['phonenumber'];
         $editShopname = $post['shopname'];
     }
 }
 //Update
 if(isset($_POST['update'])){
    $fname = $_POST['fname'];
    $fname = $_POST['fname'];
    $editId = $_POST['editId'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $phonenumber = $_POST['phonenumber'];
    $shopname = $_POST['shopname'];
     
    $update_query = "UPDATE users SET fname='$fname',lname='$lname',password='$password',email='$email',
    location='$location',phonenumber='$phonenumber',shopname='$shopname'WHERE id='$editId'";
    $result = mysqli_query($con, $update_query);

    $editFname = '';
    $editLname = '';
    $editId = '';
    $editPassword = '';
    $editEmail = '';
    $editLocation = '';
    $editPhonenumber = '';
    $editShopname = '';
    $isEditing = 0;
    header('location: myprofile.php');
}
?>
<form action="" method="POST">
                <label for="fname">1:First name:</label>
                <br>
                <input type="text" name="fname"id="fname" required value="<?php echo @$editFname;?>" >
                <br>
                <label for="lname">2:Last name:</label>
                <br>
                <input type="text"id="lname" name="lname" required value="<?php echo @$editLname;?>" >
                <br>
                <label for="password">3:password:</label>
                <br>
                <input type="text" name="password"id="password" required value="<?php echo @$editPassword;?>" >
                <br>
                <label for="email">4:email:</label>
                <br>
                <input type="text" name="email"id="email" required value="<?php echo @$editEmail;?>" >
                <br>
                <label for="location">5:location:</label>
                <br>
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
                <br>
                <label for="phonenumber">6:phonenumber:</label>
                <br>
                <input type="text" name="phonenumber"id="phonenumber" required value="<?php echo @$editPhonenumber;?>" >
                <br>
                <label for="shopname">7:shopname:</label>
                <br>
                <input type="text" name="shopname"id="shopname" required value="<?php echo @$editShopname;?>" >
                <br>
                <input type="hidden" name="editId" value="<?php echo @$editId;?>">
                <?php if($isEditing == 1){ ?>
                <br>
                <input type="submit" name="update" value="Update">
                <?php } ?>
            </form>
            </div>
</html>