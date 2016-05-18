<?php session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="ws_s.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="css/scrolling-nav.css" rel="stylesheet">

  <script type="text/javascript" src="js/myJSfile.js"></script>
  <script src="js/jquery-1.9.1.js"></script>
  <script src="js/jquery-migrate-1.1.0.js"></script>


  

</head>
<body>
<div class="B">
  <div>
      <ul>
      <?php
  if (isset($_SESSION['name'])) {
        echo "
       <li class=\"menu\"><a href=\"logout.php\" id=\"LOGOUT\" class=\"active\"><span class=\"glyphicon glyphicon-user\"></span>logout</a></li>";} 
      else{
        echo "
      <li class=\"menu\"><a class=\"menu_top\"  href=\"Sign.php\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
      <li class=\"menu\"><a class=\"menu_top\"  href=\"login.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>  ";
    }?>
      <li class="menu"><a class="menu_top"  href="order.php">Order</a></li>
      <li class="menu"><a class="menu_top"  href="blog.php">Top</a></li>
      <li class="menu"><a class="menu_top"  href="contact.php">Contacts</a></li>
      <li class="menu"><a class="menu_top"  href="About.php">Recipe</a></li>
      <li class="menu"><a class="menu_top"  href="Saya.php">Home</a></li>
      <li class="menu1"><p style="margin-left:15px;">S A Y A</p></li>
      <li class="menu1"><img  id ="logo" src="img/Logo1.png"></li>
      <li class="menu1"><p>B A K E R Y</p></li>
    </ul>
  </div>
  
  <div id="content_area"></div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script type="text/javascript" src="js/nav.js"></script>

</div>
</body>
</html>