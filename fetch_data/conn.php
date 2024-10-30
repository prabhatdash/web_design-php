<?php

$servername="localhost";
$username="root";
$password="";
$db="bca_d";


$conn=mysqli_connect($servername,$username,$password,$db);

if(!$conn){
    echo "Error !";
}
else{
    echo "Connected !";
}
