<?php
    $con = mysqli_connect('localhost','root','','details');
    $del =$_GET['del'];
    $DELETE = " DELETE FROM form_details WHERE sno = '$del' ";
    $queryres = mysqli_query($con,$DELETE);
    header('Location:'."home.php");
?>