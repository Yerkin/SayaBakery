<?php
 if (!isset($_SESSION['name'])) {
header("location:http://".$_SERVER["SERVER_NAME"]."/AYA/B_order.php");
}
if (isset($_GET['id'])) {

	$id=$_GET['id'];
$conn= new mysqli("localhost","root","","saya");
$sql = "DELETE FROM zakaz WHERE id= '$id'";
$result = $conn->query($sql);
header("Location: http://".$_SERVER["SERVER_NAME"] . "/aya/admin.php");

}
?>
