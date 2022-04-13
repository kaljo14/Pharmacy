<?php
//adds emelemt to the database 
include_once '../include/conect.php';
// mysqli_real_escape_string checkes for sql code to prevent error
$first_name= mysqli_real_escape_string($conn,$_POST['first_name']);
$last_name= mysqli_real_escape_string($conn,$_POST['last_name']);
$address=mysqli_real_escape_string($conn,$_POST['address']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$sql =" INSERT INTO Client (first_name, last_name,address,phone_number)
VALUES('$first_name','$last_name','$address','$phone');";
mysqli_query($conn,$sql);
header("Location: ../view/customers.php?singup=succes");
?>