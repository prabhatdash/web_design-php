<?php
include_once "conn.php";

$reg_no=$_POST["reg_no"];
$roll=$_POST["roll"];
$name=$_POST["name"];
$dept=$_POST["dept"];

$sql="insert into students_data (reg_no,roll_no,name,dept) values ('$reg_no','$roll','$name','$dept') ";

$status=mysqli_query($con,$sql);

if(!$status){
    header("location:index.php?status=404");
}
else{
    header("location:index.php?status=200");
}

?>