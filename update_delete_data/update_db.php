<?php
include_once "conn.php";

$reg_no=trim($_POST['reg_no']);
$roll=trim($_POST['roll']);
$name=trim($_POST['name']);
$dept=trim($_POST['dept']);

if(isset($_POST['del'])){

    $sql="delete from students_data where reg_no='$reg_no'";




    if(mysqli_query($conn,$sql)){
        header("location:index.php?status=201");
    }
    else{
        header("location:index.php?status=404");
    }

}
if(isset($_POST['update'])){
    $sql="update students_data set reg_no='$reg_no', roll_no='$roll',name='$name',dept='$dept' where reg_no='$reg_no'";




    if(mysqli_query($conn,$sql)){
        header("location:index.php?status=200");
    }
    else{
        header("location:index.php?status=404");
    }
}