<?php
session_start();

if (isset($_POST['name'])) {

  $name=$_POST['name'];
  $password=$_POST['password'];

  $conn= new mysqli("Localhost","root","","saya");
  $sql="SELECT * FROM baker WHERE name = '$name' AND pass='$password' ";

  $result=$conn->query($sql);
   if ($result->num_rows>0) {
    echo "yerkin";
       while ($row=$result->fetch_assoc()) {
        if ($row['id']==1) {
        $_SESSION['name'] = $row['name'];
        $_SESSION['password'] = $row['pass'];
         header("Location: /AYA/admin.php");  
       }
       else{
        $_SESSION['name'] = $row['name'];
        $_SESSION['password'] = $row['pass'];
         header("Location: /AYA/");  
}}}

   }
?> 

<form action="login.php" method="post">

<div style="background-image:url(img/Lp5.jpg);height:1000px">
 <div id ="main">
    <div>
<form action="demo_form.asp" method="post">
      <span class="label label-danger">User name</span>
      <input type="text" name="name" class="form-control" id="usr" autocorrect=off autocapitalize=words style="width:200px;" required>
<br>

      <span class="label label-danger">Password </span>
      <input type="password" name="password" class="form-control" id="pwd" autocorrect=off autocapitalize=words style="width:200px;"required>
<br>

      <input type="submit" value="submit">
      </form>
      <br>
      <p id="WRONG"></p>
    </div>
  </div>
</div>
</form>
