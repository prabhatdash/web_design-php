<?php

$email=$_POST['email'];

$pas=$_POST["password"];

include_once "../update_delete_data/conn.php";

$sql="select email,pass from users where email='$email' and pass='$pas'";


$results=mysqli_query($conn,$sql);

$data=mysqli_fetch_all($results);


if($email==$data[0][0] && $pas==$data[0][1]){
    session_start();
    $_SESSION['user']=$email;
    header("location: ../update_delete_data/index.php");
}
else{
    echo "
    <script>
    alert('Invalid Username or Password')
    window.location.href='index.php';
    </script>
    ";

}
?>

