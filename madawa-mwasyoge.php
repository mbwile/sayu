<?php
session_start();

$host="localhost";
$dbuser="root";
$dbname="sayu";
$dbpassword="";
//connect to the database
$con = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
?>
<div class="container">
<h3 style="color:white;text-align:center;"> <?php echo $fname ; ?></h3>
<h3 style="color:white;text-align:center;"> <?php echo $lname ; ?></h3>

<?php
$ombi = "SELECT madawa.name as name, madawa.quantity as quantity, madawa.price as price,
 madawa.postdate as postdate, CONCAT(users.fname, '', users.lname) as username, users.phonenumber as phonenumber,
  users.shopname as shopname from  madawa, users where madawa.users_id = users.id and users.location = 'mwanjelwa'";
$jibu = mysqli_query($con,$ombi);

$news = '';

while($results = mysqli_fetch_array($jibu)){
    $name = $results['name']; 
    $quantity = $results['quantity'];
    $price = $results['price'];
    $postdate = $results['postdate'];
    $username = $results['username'];
    $phonenumber = $results['phonenumber'];
    $shopname = $results['shopname'];
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
html{
    height: 100%;
}
body{

background-size: cover;
background-repeat: no-repeat;
background-position: center;
width:100px;
height:400px;
margin-top: -420px;
margin-left: -180px;
}


.yu{
    background-color:white;
    height: 1000px;
    text-align: center;
    margin-top: 80px;
    margin-left: 400px;
    margin-right: 400px;
    padding-top: 3px;
    padding-right: 50px;
    padding-left: 0px;
    width:800px;
    background: url(image/41.jpg) center bottom no-repeat;
    background-size: 600px 980px;
    box-shadow:3px 3px 3px 3px gray;
    font-size:20px;
}
.sa{
    word-wrap: break-word;
    /* line-height: 201px; */
    overflow:auto;
    background-color:white;
    height:360px;
    width:360px;
    padding-top: 10px;
    margin-top: 120px;
    margin-left: 50px;
    border-radius: 10px;
    box-shadow:3px 3px 3px 3px gray;
}
.post{
    /*text-align:left;*/
}
    </style>
<body>
<div class="yu">

<center>
<div class="sa">
        <?php
$host="localhost";
$dbuser="root";
$dbname="sayu";
$dbpassword="";
//connect to the database
$con = mysqli_connect($host,$dbuser,$dbpassword,$dbname);

        $ombi= "SELECT madawa.name as name, madawa.quantity as quantity, madawa.price as price, madawa.postdate as postdate,
         CONCAT(users.fname, ' ', users.lname) as username, users.phonenumber as phonenumber,users.shopname as shopname, 
         users.shopname as shopname from  madawa,users where madawa.users_id = users.id  and users.location = 'mwasyoge'";
        $result = mysqli_query($con, $ombi);
        $post_zetu = '';
// die(print_r(mysqli_fetch_array($result)));
        while($row = mysqli_fetch_array($result)){
        //    $id = $row['id'];
        //    $users_id = $row['users_id'];
           $name = $row['name'];
           $quantity = $row['quantity'];
           $price = $row['price'];
           $postdate = $row['postdate'];
           $username = $row['username'];
            $phonenumber = $row['phonenumber'];
            $shopname = $row['shopname'];
           
    
            //echo "<h1>Name</h1>";
            //echo "<h1>" .$row['name']. "</h1>";
            //echo "<h1>Area</h1>";
            //echo "<h4>" .$row['area']. "</h4>";
            //echo "<button onclick='futaPost($id)'>Delete</button>";  
            // echo "</div>";
            // $post_zetu = '';
            
            $post_zetu .= "
            <div class='post'>
                
                <h4>Jina la madawa::$name </h4>
                <h4>kiasi cha madawa::$quantity </h4>
                <h4> bei ya madawa::$price</h4>
                <h4> jina la mwenye duka::$username</h4>
                <h4>$phonenumber</h4>
                <h4>jina la duka $shopname</h4>
                <h4>$postdate</h4>
            
            </div>
            <hr>
            ";
            
        }   
        
        echo "$post_zetu";
       ?>
        </div>
        </center>
    </div>
    
</body>
</html>