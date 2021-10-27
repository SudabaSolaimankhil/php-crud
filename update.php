<?php
$user = 'root';
$password = '';
$db = 'php_crud';
$host = 'localhost';
$connection=mysqli_connect($host,$user,$password,$db);


$name= $_POST['name'];
$lastname = $row['lastname'];
$email = $row['email'];
$phonenumber = $row['phonenumber'];
$sql="UPDATE `crudtable` SET name="
?>