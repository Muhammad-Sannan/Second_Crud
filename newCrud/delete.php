<?php
include ('connection.php');
include ('header.php');
if (isset($_GET['deleteid'])) {
    $id=$_GET['deleteid'];
    $sql = "delete from `information` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:display.php?msg=deleted_successfully');
    }
}
?>