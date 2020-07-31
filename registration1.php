<?php
session_start();
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"teja1286");
$name = $_POST['Name'];
$branch = $_POST['Branch'];
$rno = $_POST['Rno'];
$year = $_POST['Year'];
$phonenumber = $_POST['Phonenumber'];
$email = $_POST['Email'];
$password = $_POST['Password'];
$password1 = md5($password);
$query1 = "insert into student_credentials values('".$name."','".$branch."','".$rno."','".$year."','".$phonenumber."','".$email."');";
$query2 = "insert into student_login values('".$rno."','".$password1."');";
$r1 = mysqli_query($con,$query1);
$r2 = mysqli_query($con,$query2);
if($r1 and $r2)
header('location:success.html');
else
header('location:register_fail.html');
mysqli_close($con);
?>
