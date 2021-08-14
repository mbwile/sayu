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
<center ><form method="post" action="">
   <div class="sa">
<h2>Chagua  Pembejeo<h2><h3 style="text-align:left;">
1. Mbolea <br>
2. Mbegu<br>
3. Madawa <br>
0. Kurudi Nyuma<br></h3>
<input type="number" name="selection">
<input type="submit" name="submit" value="Chagua">

<?php

if(isset($_POST['submit'])){

$selection = $_POST['selection'];

if($selection==1){

//do this

header("location:mbolea-mwanjelwa.php");

} else if($selection==2){


//do this
header("location:mbegu-mwanjelwa.php");


}
else  if($selection==3){

//do this
header("location:madawa-mwanjelwa.php");

}

else  if($selection==0){

//do this
header("location:forest.php");

}
else  if($selection >= 4){
    echo"ujazaji sio sahihi";
         }
    
    else  if($selection < 0){
        echo"ujazaji sio sahihi";
             }
}
?>
</div>
</form>
</center>
</div>
</html>