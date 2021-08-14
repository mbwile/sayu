<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AGRICULTURE INPUTS SYSYTEM</title>
 <!-- Bootstrap -->
    
  <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="../../maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
margin-top: -80px;
margin-left: -180px;
}


.yu{
    background-color:white;
    height: 1000px;
    text-align: center;
    margin-top: 80px;
    margin-left: 400px;
    margin-right: 400px;
    padding-top: 250px;
    padding-right: 50px;
    padding-left: 0px;
    width:800px;
    background: url(image/41.jpg) center bottom no-repeat;
    background-size: 600px 980px;
    box-shadow:3px 3px 3px 3px gray;
    font-size:20px;
}
.sa{
    background-color:white;
    height:350px;
    width:360px;
    padding-top: 50px;
    margin-top: -80px;
    margin-left: 50px;
    border-radius: 10px;
    box-shadow:3px 3px 3px 3px gray;
}


    </style>
   <div class="yu">

<center><form method="post" action="" >
<div class="sa">
<label for="name">1:USSD CODE:</label>
                <br>
<textarea name="display" id="display" cols="30" rows="2"required></textarea><br><br>
<input type="submit" name="submit"  required value="call" style="color:darkgreen;background-color:greenyellow;width:150px;border-radius: 8px;"><br>
 
<?php

if(isset($_POST['submit'])){

$display = $_POST['display'];

if($display == '*150*01#'){

//do this

header("location:test.php");

}

else {
    echo"namba ulioweka sio sahihi";
} }
?>
</form><center>
</div>

</div>
</html>