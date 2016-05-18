<?php session_start();
if (!isset($_SESSION['name'])) {
header("location:http://".$_SERVER["SERVER_NAME"]."/AYA/B_order.php");
}

if(isset($_POST["count"])) {
  $count=$_POST["count"];
  $weight=$_POST["weight"];
  $name1=$_POST["name1"];
  $del=$_POST["del"];
  $phone=$_POST["phone"];

  $conn=new mysqli("Localhost","root","","saya");
  $sql="INSERT INTO zakaz (count,weight,name,delivery,phone) VALUES('$count','$weight','$name1','$del','$phone')";   
  $conn->query($sql);
header("location:http://".$_SERVER["SERVER_NAME"]."/AYA/");

    } 
?>

<form method="post" action="order.php">
<div class="order">
    <h5>Count</h5>
<select class="w3-select w3-border" name="count">
  <option>Choose your option</option>
  <?php  
    for ($i=1; $i <= 12 ; $i++) { 
      echo "<option value=\"$i\">$i</option>";
    }
  ?>
</select>
</div>

<div class="order">
    <h5>Weight(kg)</h5>
<select class="w3-select w3-border" name="weight">
  <option >Choose your option</option>
  <?php  
    for ($i=1; $i <= 12 ; $i++) { 
      echo "<option value=\"$i\">$i</option>";
    }
  ?>
  </select>
</div>

<div class="order">
    <h5>Name</h5>
<select class="w3-select w3-border" name="name1">
  <option>Choose your option</option>
  <?php  

  $conn=new mysqli("Localhost","root","","saya");
$sql = "SELECT * FROM photo";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<option value=\"".$row['des']."\">".$row['des']."</option>";
        $counter=$counter+1;
    }} 
$conn->close();
  ?>
</select>
</div>


<div class="order">
    <h5>Delivery</h5>
<select class="w3-select w3-border" name="del">
  <option >Choose your option</option>
  <option value="with">with delivery</option>
  <option value="without">without delivery</option>
</select>
</div>

<div class="order">
    <h5>Phone number</h5>
    <p><input name="phone" type="text" required></p>
</div>


<div class="order" style="margin-left:70px;">
    <input type="submit">
</div>
</form>

<br>
<br>

<div>
    <h1 style="text-align:center;font-family:maira;">Our Products</h1>
    <img src="img/Adown.png" style="width:64px;margin-left:47%;">
</div>
<br>
<div id="ck1">
<?php
$conn=new mysqli("Localhost","root","","saya");
$sql="SELECT * FROM photo ";
$result=$conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $e=$row['url'];
      $des=$row['des'];
      $def=$row['def'];
      $c=$row['cost'];
        echo "<div class=\"cakes\"><img src=".$e."><h4>$des</h4><h4>$def<h4>Price per kg. $c KZT</h4>
  </h4></div>";
      }}         
?>
  
</div>
</body>
</html>