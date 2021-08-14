<?php
//session_start();
//$firstname = $_SESSION['firstname'];

$host="localhost";
$dbuser="root";
$dbname="sayu";
$dbpassword="";
//connect to the database
$con = mysqli_connect($host,$dbuser,$dbpassword,$dbname);

$ombi = "SELECT * FROM users";
$jibu = mysqli_query($con,$ombi);

$news = '';

while($results = mysqli_fetch_array($jibu)){
    $fname = $results['fname']; 
    $lname = $results['lname'];

  
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Normal</title>
    <link rel="stylesheet" href="students.css">
</head>
<style>
body{
background-color: darkgreen;
background-size: cover;
background-repeat: no-repeat;
background-position: center;
background-image: linear-gradient(to right,darkgreen,greenyellow);
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
  margin-left:400px;
  text-transform: capitalize;

}
h1{
    text-align:center;
    color:white;
}
.btn{
    margin-left:500px;
    margin-top:5px;
    width:200px;
    height:30px;
    background-color:greenyellow;
    border-radius: 25px; 
}
.btn:hover{
    
    width:202px;
    height:32px;
    background-color:yellow;
    border-radius: 25px; 
}

    </style>
<body>
   <button style="background-color:white; border-radius: 25px; ";
   onclick="window.print()">Print this page
   </button>

<button  class="btn"><a href="admin.php">GO BACK</a></button>
    <div class="container">
        <h1>Welcome Admin</h1>
        
        <hr>
        <?php
        $ombi= "SELECT * FROM users ";
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
             
            //echo "<h1>Name</h1>";
            //echo "<h1>" .$row['name']. "</h1>";
            //echo "<h1>Area</h1>";
            //echo "<h4>" .$row['area']. "</h4>";
            //echo "<button onclick='futaPost($id)'>Delete</button>";  
            echo "</div>";
            $post_zetu = '';
            
            $post_zetu .= "
            <div class='post'>
                
            <h4>$fname </h4>
            <h4>$lname </h4>
            <h4>$location </h4>
    
                <div>    
                <button onclick='futaPost($id)'>Delete</button>                      
                </div>
            </div>
            ";
           
            echo "$post_zetu";
        }   
        if(isset($_GET['deletePostId']) && $_GET['deletePostId']!=''){
            $id = $_GET['deletePostId'];
            $delete_query = "DELETE FROM users WHERE id = $id";
            $result = mysqli_query($con,$delete_query);
        }   
    
        ?>
        <br><br><br>
        <a href="logout.php">Logout</a>
    </div>
    <script>
            function futaPost(id){
                console.log(id)
                var jibu = confirm('Are you sure you want to delete?')
                if(jibu){
                    var url = '?deletePostId='
                    window.location =url+id
                }
            }
        </script>
</body>
</html>