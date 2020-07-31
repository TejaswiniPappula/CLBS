<?php
session_start();
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"teja1286");
$rno = $_POST['Rno'];
$phonenumber = $_POST['Phonenumber'];
$book1 = $_POST['bname'];
$author1 = $_POST['author'];
$edition1 = $_POST['edition'];
$query = "insert into allocated_books values('".$rno."','".$phonenumber."','".$book1."','".$author1."','".$edition1."');";
$r = mysqli_query($con,$query);
if($r){
$update = "update book_details set Count = Count-1 where Book = '$book1' and Author = '$author1' and Edition = '$edition1';";
mysqli_query($con,$update);
header('location:final.html');
}
mysqli_close($con);
?>

