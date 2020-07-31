<?php
session_start();
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"teja1286");
$rno = $_POST['Rno'];
$password = $_POST['Password'];
$password1 = md5($password);
$query = "select * from student_login where Registerno = '$rno' and Password = '$password1';";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
if(($row['Registerno'] == $rno) && ($row['Password'] == $password1)){
header('location:book_search.html');
}
else{
header('location:login_fail.html');
}
mysqli_close($con);
?>
