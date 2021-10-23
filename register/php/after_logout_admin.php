<?php
session_start();
$connect=mysqli_connect('localhost:3306','root','grisilda','userdb');
 if(!isset($_SESSION['id'])){
 	echo 'err';
} 
?>