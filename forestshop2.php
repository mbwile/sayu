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
$fname = $_SESSION['fname'];
$users_id = $_SESSION['id'];

$host="localhost";
$dbuser="root";
$dbname="sayu";
$dbpassword="";
//connect to the database
$con = mysqli_connect($host,$dbuser,$dbpassword,$dbname);
?>
<button  class="btn"><a href="user.php">GO BACK</a></button>
<div class="container">
<h2 style="color:white;text-align:center;">Welcome <?php echo $fname ; ?>
<a href="login.php"class="btn btn-primary my-2" style="float:right;background-color:yellow;">Log out</a>
</h2>
<?php
// Check connection
if(isset($_POST['add'])){
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $now = date('Y-m-d H:i:s');
   
$ombi = "INSERT INTO madawa VALUES('','$users_id','$name','$quantity','$price','$now')";
mysqli_query($con, $ombi);
}

$ombi= "SELECT *FROM madawa WHERE `users_id` = $users_id";
$result = mysqli_query($con, $ombi);
while($row = mysqli_fetch_array($result)){
   $id = $row['id'];
   $users_id = $row['users_id'];
   $name = $row['name'];
   $quantity = $row['quantity'];
   $price = $row['price'];
   $postdate = $row['postdate'];
   
   
 
  // echo "<h1>" .$row['name']. "</h1>";
    //echo "<p>" .$row['content']. "</p>";
   // echo" <a href='?isEditing=1&editId=$id'>Edit</a>
    //<button onclick='futaPost($id)'>Delete</button>";
    echo "</div>";
    $post_zetu = '';
    

    $post_zetu .= "
    <div class='post'>  
        <h2> $name </h2>
        <p>$quantity</p>
        <p>$price</p>
        <p>$postdate</p>
        <div>
       
        <a href='editmadawa.php?id=$id'>Edit</a>
        <button onclick='futaPost($id)'>Delete</button>
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
     $query = "SELECT * FROM madawa WHERE id = '$editId'";
     $result = mysqli_query($con, $query);
     
     while($post = mysqli_fetch_array($result)){
         $editName = $post['name'];
         $editId = $post['id'];
         $editQuantity = $post['quantity'];
         $editPrice = $post['price'];
         
     }
 }
 //Update
 if(isset($_POST['update'])){
    $name = $_POST['name'];
    $editId = $_POST['editId'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];

    $update_query = "UPDATE madawa SET name='$name',quantity='$quantity',price='$price'WHERE id='$editId'";
    $result = mysqli_query($con, $update_query);

    $editName = '';
    $editId = '';
    $editQuantity = '';
    $editPrice = '';
    $isEditing = 0;
    header('location: forestshop2.php');
}
if(isset($_GET['deletePostId']) && $_GET['deletePostId']!=''){
    $id = $_GET['deletePostId'];
    $delete_query = "DELETE FROM madawa WHERE id = $id";
    $result = mysqli_query($con,$delete_query);
}

?>
<form action="" method="POST">
                <label for="name">1:Jina la Madawa:</label>
                <br>
                <input type="text" name="name"id="name" required value="<?php echo @$editName;?>" >
                <br>
                <label for="name">2:Kiasi cha madawa:</label>
                <br>
                <input type="text"id="quantity" name="quantity" required value="<?php echo @$editQuantity;?>" >
                <br>
                <label for="price">3:bei ya madawa:</label>
                <br>
                <input type="text" name="price"id="price" required value="<?php echo @$editPrice;?>" >
                <br>
                <input type="hidden" name="editId" value="<?php echo @$editId;?>">
                <?php if($isEditing == 0){ ?>
                <br>
                <input type="submit" name="add" value="upload">
                <?php } else { ?>
                    <input type="submit" value="Update" name="update">
                <?php } ?>
            </form>
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
</html>