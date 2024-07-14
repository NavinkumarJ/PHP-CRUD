<?php
    $con = mysqli_connect('localhost','root','','details');
    $edit = $_GET['edit'];
    $SELECT = " SELECT * FROM form_details WHERE sno = '$edit' ";
    $query_res = mysqli_query($con,$SELECT);
    while($row = mysqli_fetch_assoc($query_res)){
        $sno =$row['sno'];
        $name =$row['Name'];
        $email =$row['Email'];
        $num = $row['Ph_num'];
    }
?>

<?php
    if(isset($_POST["upd"])){
            $con = mysqli_connect('localhost','root','','details');
            $edit = $_GET['edit'];
            $name = $_POST["name"];
            $email = $_POST["email"];
            $ph_num = $_POST["num"];

            $UPDATE = " UPDATE form_details SET Name = '$name',Email = '$email',Ph_num = '$ph_num' WHERE sno = '$edit' ";
            $query_res = mysqli_query($con,$UPDATE);
        //     if(mysqli_query($con,$UPDATE))
        //    {
        //     //echo '<script> location.replace("index.php")</script>';  
        //    }
        //    else
        //    {
        //    echo "Some thing Error" . $connection->error;

        //    }
         echo "<p> UPDATED SUCCESSFULLY </p>";
         header('Location:'."home.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>HOME</title>
    <style>
        body{
    background-image: url(Assets/bg.jpg);
    /* background-position:top; */
    background-size:cover;
        }
        p{  
    padding: 10px;
    background-color: black;
    color: white;
    text-align: center;
    }
    </style>
</head>
<body>
<div class="card m-5">
    <div class="card p-3">
    <div class="card-header">
        <h1>PHP MySQL CRUD</h1>
    </div>
    <form class="form-box" action="" method="post">
            <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control" id="floatingInput" placeholder="John Doe" value="<?php echo $name; ?>">
            <label for="floatingInput">NAME</label>
            </div>
            <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="floatingPassword" placeholder="name@example.com" value="<?php echo $email; ?>">
            <label for="floatingPassword">EMAIL</label>
            </div>
            <div class="form-floating mb-3">
            <input type="number" name="num" class="form-control" id="floatingPassword" placeholder="123456789" value="<?php echo $num; ?>">
            <label for="floatingPassword">PH-NUMBER</label>
            </div>
            <input type="submit" name="upd" value="UPDATE" class="btn btn-outline-success" id="upd">
    </form>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>



