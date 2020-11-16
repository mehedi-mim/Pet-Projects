<?php
include_once 'dbh.inc.php';
$name = $_POST['user_name'];
$phone = $_POST['user_phn'];
$blood = $_POST['user_blood'];
$occu = $_POST['user_detail'];
$sql = "INSERT INTO maindata(user_name,user_phn,user_blood,user_occu) VALUES('$name','$phone','$blood','$occu');";
mysqli_query($conn,$sql);
header("Location:../DonarBook.php?signup=success");
