<?php
include_once "conn.php";


if(isset($_GET['status'])){
    if($_GET['status']==200){
        echo "
        <script>
        alert('Data Updated Successfully !')
        window.location.href='index.php';
        </script>
        ";
    }
    if($_GET['status']==404){
        echo "
        <script>
        alert('Error !')
        window.location.href='index.php';
        </script>
        ";
    }
    if($_GET['status']==201){
        echo "
        <script>
        alert('Record Deleted !')
        window.location.href='index.php';
        </script>
        ";
    }
}

// to calculate the no of rows:
$sql="select count('reg_no') from students_data";
$results=mysqli_query($conn,$sql);
$data=mysqli_fetch_row($results);
$rows=$data[0][0];





$sql="select * from students_data";
$results=mysqli_query($conn,$sql);
$row=mysqli_fetch_all($results);


?>

<html>
<head>
    <title>
        BCA-D Inc. | Fetch Data
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<center style="margin-top: 5%">


    <div style="width: 500px" class="responsive">

        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">Reg. No.</th>
                <th scope="col">Roll No.</th>
                <th scope="col">Name</th>
                <th scope="col">Dept.</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>


            <?php
            for($i=0;$i<$rows;$i++){
                ?>



                <tr>
                    <form action="update_db.php" method="post">

                    <th scope="row"> <input class="form-control" type="text" name="reg_no" value=" <?php echo $row[$i][0] ?> "> </th>
                    <td> <input class="form-control" type="text" name="roll" value="<?php echo $row[$i][1] ?>"></td>
                    <td> <input  class="form-control" type="text" name="name" value="<?php echo $row[$i][2] ?>"></td>


                    <td>

                        <?php

                        if($row[$i][3]=='CSE'){
                            echo '
                            
                            <select name="dept" required style="margin-top: 3%;border-radius: 0px" class="form-control" >
                            <option>SELECT DEPARTMENT</option>
                            <option selected value="CSE">CSE</option>
                            <option value="CIVIL" >CIVIL</option>
                            <option value="MECHANICAL" >MECHANICAL</option>
                        </select>
                            ';
                        }

                        if($row[$i][3]=='CIVIL'){
                            echo '
                            
                            <select name="dept" required style="margin-top: 3%;border-radius: 0px" class="form-control" >
                            <option>SELECT DEPARTMENT</option>
                            <option  value="CSE">CSE</option>
                            <option selected value="CIVIL" >CIVIL</option>
                            <option value="MECHANICAL" >MECHANICAL</option>
                        </select>
                            ';
                        }

                        if($row[$i][3]=='MECHANICAL'){
                            echo '
                            
                            <select name="dept" required style="margin-top: 3%;border-radius: 0px" class="form-control" >
                            <option>SELECT DEPARTMENT</option>
                            <option  value="CSE">CSE</option>
                            <option  value="CIVIL" >CIVIL</option>
                            <option selected value="MECHANICAL" >MECHANICAL</option>
                        </select>
                            ';
                        }

                        ?>



                    </td>
                    <td><input name="update" class="btn btn-success" type="submit" value="UPDATE"></td>
                        <td><input name="del" class="btn btn-danger" type="submit" value="DELETE"></td>
                    </form>
                </tr>

                <?php
            }
            ?>
            </tbody>
        </table>

    </div>
</center>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>