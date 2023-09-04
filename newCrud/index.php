<?php 
include('connection.php');
include('header.php');
// inserting data
if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $country=$_POST['country'];

    $sql= "insert into `information`(name,gender,country)
    values('$name','$gender','$country') ";
    $result=mysqli_query($conn,$sql);
    if ($result) {
        header('location:display.php');
    }
}
?>
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
            
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>