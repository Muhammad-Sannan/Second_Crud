<?php
include('connection.php');
include('header.php');
$id=$_GET['updateid'];
$sql = "select * from `information` where id=$id";
$result=mysqli_query($conn,$sql);

if (isset($_POST['update'])) {
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $country=$_POST['country'];

    $sql= "update `information` set id=$id,name='$name',gender='$gender',country='$country' where id=$id ";
    $result=mysqli_query($conn,$sql);
    if ($result) {
        header('location:display.php');
        // echo "updated";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<h1>Information</h1>
    <div class="container">
        <form method="post">
            <div class="mb-3">
                <label>Name :</label>
                <input type="text" class="form-control" name="name" placeholder="Enter your name ">
                
            </div>
            <div class="mb-3">
                <label>Gender :</label>
                <input type="text" class="form-control" name="gender" placeholder="Enter your gender">
            </div>
            <div class="mb-3">
                <label>Country :</label>
                <input type="text" class="form-control" name="country" placeholder="Enter country name">
            </div>
            
            <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
    </div>
</body>
</html>