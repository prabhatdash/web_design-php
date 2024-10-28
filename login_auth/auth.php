<?php

$email=$_POST['email'];

$password=$_POST["password"];


if($email=="prabhat@gmail.com" && $password=="12345"){
    header("location:dashboard.php");
}
else{
    header("location:index.php?code=404");
}

?>

