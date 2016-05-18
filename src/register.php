<?php
session_start();
  
if (isset($_POST['name'])) {

  $name=$_POST['name'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $password=$_POST['password'];

$conn=new mysqli("Localhost","root","","saya");
$sql="INSERT INTO baker(name,surname,email,pass) VALUES ('$name','$lname','$email','$password') ";

if ($conn->query($sql)===TRUE) {
		echo " yerkin ";
         header("Location: /AYA/index.php");  
}}?>