<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="ws_s.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="css/scrolling-nav.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div class="B">
  <div>
      <ul>
      <li class="menu"><a href="logout.php" class="active"><span class="glyphicon glyphicon-user"></span> logout</a></li>      
      <li class="menu"><a href="admin.php">Booking</a><li>
      <li class="menu"><a href="update.php">Update</a></li>

      <li class="menu1"><p style="margin-left:15px;">S A Y A</p></li>
      <li class="menu1"><img  id ="logo" src="img/Logo1.png"></li>
      <li class="menu1"><p>B A K E R Y</p></li>
    </ul>

  </div>
</div>

	<?php

 if (isset($_POST['url1'])) {
   $path='img/';
 	 $churl1=$path.$_POST['url1'];
   $chdes1=$_POST['des1'];
   $definition1=$_POST['def1'];
   $cos1=$_POST['cost1'];

	$conn= new mysqli("Localhost","root","","saya");
    $sql1 = "UPDATE photo SET url ='$churl1' WHERE id='1' " ;
    $sql2 = "UPDATE photo SET des ='$chdes1' WHERE id='1' " ;
    $sql3 = "UPDATE photo SET def ='$definition1' WHERE id='1' " ;
    $sql4 = "UPDATE photo SET cost ='$cos1' WHERE id='1' " ;
	
  $result=$conn->query($sql1);
	$result2=$conn->query($sql2);
  $result3=$conn->query($sql3);
  $result4=$conn->query($sql4);	
}

 else if (isset($_POST['url2'])) {
     $path='img/';
     $churl2=$path.$_POST['url2'];
     $chdes2=$_POST['des2'];
     $definition2=$_POST['def2'];
     $cos2=$_POST['cost2'];

	$conn= new mysqli("Localhost","root","","saya");
	$sql5 = "UPDATE photo SET url ='$churl2' WHERE id='2' " ;
  $sql6 = "UPDATE photo SET des ='$chdes2' WHERE id='2' " ;
  $sql7 = "UPDATE photo SET def ='$definition2' WHERE id='2' " ;
  $sql8 = "UPDATE photo SET cost ='$cos2' WHERE id='2' " ;

	$result=$conn->query($sql5);
	$result2=$conn->query($sql6);
  $result3=$conn->query($sql7);
  $result4=$conn->query($sql8);

}
 else if (isset($_POST['url3'])) {
     $path='img/';
     $churl3=$path.$_POST['url3'];
     $chdes3=$_POST['des3'];
     $definition3=$_POST['def3'];
     $cos3=$_POST['cost3'];


	$conn= new mysqli("Localhost","root","","saya");
	$sql9 = "UPDATE photo SET url ='$churl3' WHERE id='3' " ;
  $sql10 = "UPDATE photo SET des ='$chdes3' WHERE id='3' " ;
  $sql11 = "UPDATE photo SET def ='$definition3' WHERE id='3' " ;
  $sql12 = "UPDATE photo SET cost ='$cos3' WHERE id='3' " ;

	$result=$conn->query($sql9);
	$result2=$conn->query($sql10);
  $result3=$conn->query($sql11);
  $result4=$conn->query($sql12);
}


 ?>
<div class="update">
  <form method="post"  >
<h3>Change image,cake and cost</h3>
<HR>
<br>
 1st photo <input name="url1" >
  cake name <input name="des1">
  description<input name="def1">
  cost<input name="cost1">
 <input type="submit" value="Change photo">
</form>
<br>
  <form method="post"  >
 2nd photo <input name="url2" >
  cake name <input name="des2" >
  description<input name="def2">
  cost<input name="cost2">

  <input type="submit" value="Change photo">
</form>
<br>
 <form method="post" >
 3rd photo <input  name="url3" >
  cake name <input name="des3" >
  description<input name="def3">
  cost<input name="cost3">
  <input type="submit" value="Change photo">
</form>
 <br>
</div>



 </body>
 </html>