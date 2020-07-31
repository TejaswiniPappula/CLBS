<?php
session_start();
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"teja1286");
$book1 = $_POST['bname'];
$author1 = $_POST['author'];
$edition1 = $_POST['edition'];
$query = "select * from book_details where Book = '$book1' and Author = '$author1' and Edition = '$edition1' and Count > 0;";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
if(($row['Book'] == $book1) && ($row['Author'] == $author1) && ($row['Edition'] == $edition1)){
header('location:book_confirm.html');
}
else
header('location:book_fail.html');
mysqli_close($con);
?>
