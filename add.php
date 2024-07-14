<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>HOME</title>
    <style>
        body{
    background-image: url(Assets/bg1.jpg);
    /* background-position:10rem; */
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
    <form class="form-box" action="add.php" method="post">
            <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control" id="floatingInput" placeholder="John Doe">
            <label for="floatingInput">NAME</label>
            </div>
            <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="floatingPassword" placeholder="name@example.com">
            <label for="floatingPassword">EMAIL</label>
            </div>
            <div class="form-floating mb-3">
            <input type="number" name="num" class="form-control" id="floatingPassword" placeholder="123456789">
            <label for="floatingPassword">PH-NUMBER</label>
            </div>
            <input type="submit" name="Add" value="Add" class="btn btn-outline-success" id="Add">
    </form>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php
    if(isset($_POST["Add"])){
        if(empty($_POST["name"])){
            echo "<p> ENTER NAME </p>";
        }
        else if(empty($_POST["email"])){
            echo "<p> ENTER EMAIL </p>";
        }
        else if(empty($_POST["num"])){
            echo "<p> ENTER NUMBER </p>";
        }
        else{
            $name = $_POST["name"];
            $email = $_POST["email"];
            $ph_num = $_POST["num"];
            
            try{
                $con = mysqli_connect('localhost','root','','details');
            }
            catch(mysqli_sql_exception){
                echo "Not connected";
            }
            $INSERT = " INSERT INTO form_details(Name,Email,Ph_num) VALUES('$name','$email','$ph_num') ";
            $query_res = mysqli_query($con,$INSERT);
            echo "<p> INSERTED SUCCESSFULLY </p>";
        }
        
        header('Location:'."home.php");
    }
?>