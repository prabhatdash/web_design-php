<?php

if(isset($_GET["code"])){
    if($_GET['code']==404){
        echo "
        <script>
        alert('Invalid Credentials !')
        </script>
        ";
    }
}

?>

<html>
<head>
    <title>
       BCA-D Inc. | Log In
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<center style="margin-top: 5%">
    <div  class="card" style="width: 18rem;border-radius: 0px">
        <img src="assets/images/img.png" class="card-img-top" alt="...">
        <div class="card-body">
           <form method="post" action="auth.php">
               <input required style="border-radius: 0px" class="form-control" name="email" type="email" placeholder="ENTER EMAIL">
               <input required style="margin-top: 3%;border-radius: 0px" class="form-control" name="password" type="password" placeholder="PASSWORD">
               <input style="margin-top: 3%;border-radius: 0px;width: 100px" class="btn btn-primary" name="submit" type="submit" value="LOGIN">
           </form>
        </div>
    </div>

</center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
