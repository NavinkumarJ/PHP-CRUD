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
    </style>
</head>
<body>
    <div class="card m-5">
    <div class="card">
    <div class="card-header">
        <h1>PHP MySQL CRUD</h1>
    </div>
    <div class="card-body">
        <a href="add.php" class="btn btn-success">Add Entry</a>
    </div>
    <table class="table table-hover ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PH-NUMBER</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
  <?php
  $no = 0;
    try{
      $con = mysqli_connect('localhost','root','','details');
  }
  catch(mysqli_sql_exception){
      echo "Not connected";
  }
  $SELECT = ' SELECT * FROM form_details ';
  $query_res = mysqli_query($con,$SELECT);

  if(mysqli_num_rows($query_res)>0){
    while($row = mysqli_fetch_assoc($query_res)){
      $sno =$row['sno'];
      $name =$row['Name'];
      $email =$row['Email'];
      $num = $row['Ph_num'];
      $no++;
      
  ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $name; ?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo $num; ?></td>
      <td>
      <a href='update.php?edit=<?php echo $sno ?>' class="btn btn-warning">UPDATE</a>
      </td>
      <td>
      <a href='delete.php?del=<?php echo $sno ?>' class="btn btn-danger">DELETE</a>
      </td>
    </tr>
    
    <?php }} ?>
  </tbody>
</table>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<?php
  if(isset($_POST['del'])){
    $DELETE =' DELETE FROM form_details WHERE `form_details`.`sno` = 6 ';
  }
?>