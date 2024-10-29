<?php

if(isset($_GET['status'])){
    if($_GET['status']==200){
        echo "
        <script>
        alert('REGISTRATION SUCCESSFUL !');
        </script>
        ";
        if($_GET['status']==404){
            echo "
        <script>
        alert('REGISTRATION FAILED !');
        </script>
        ";
        }
    }
}

?>

<html>
<head>
    <title>
        BCA-D Inc. | Insert Data
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<center style="margin-top: 5%">

    <h6 style="font-weight: bold">STUDENTS REGISTRATION </h6>

    <div  class="card" style="width: 18rem;border-radius: 0px">
        <img src="assets/images/img.png" class="card-img-top" alt="...">
        <div class="card-body">
            <form method="post" action="register.php">
                <input style="border-radius: 0px" class="form-control" required name="reg_no" type="text" placeholder="REGISTRATION NO">
                <input style="margin-top: 3%;border-radius: 0px" class="form-control"  required name="roll" type="text" placeholder="ROLL NO">
                <input style="margin-top: 3%;border-radius: 0px" class="form-control"  required name="name" type="text" placeholder="STUDENT NAME">
                <select name="dept" required style="margin-top: 3%;border-radius: 0px" class="form-control" >
                    <option>SELECT DEPARTMENT</option>
                    <option value="CSE">CSE</option>
                    <option value="CIVIL" >CIVIL</option>
                    <option value="MECHANICAL" >MECHANICAL</option>
                </select>

                <br>
                <input style="border-radius: 0px;width: 100px" class="btn btn-success"  type="submit" value="REGISTER">
            </form>
        </div>
    </div>

</center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

