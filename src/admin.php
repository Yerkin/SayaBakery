<?php session_start();
?>

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
  $conn=new mysqli("Localhost","root","","saya");
$sql = "SELECT * FROM zakaz";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    	
        echo "<div class=\"col-sm-4\">
      <div class=\"panel panel-primary\">
        <div class=\"panel-heading\">".$row['id'].'    '.'<a href="delete.php?id=' . $row['id'] . '">Delete</a>'.''."</div>
        <div class=\"panel-footer\">".'Count-'.$row['count']."<br>".
        'Wheight-'.$row['weight']."<br>".'Name-'.$row['name']."<br>".
        'Delivery-'.$row['delivery']."<br>".'Phone number-'.$row['phone']."<br></div>
      </div>
    </div>";
    }
} else {
    echo "No Booking";
}
$conn->close();
?>


</div>
</body>
</html>
