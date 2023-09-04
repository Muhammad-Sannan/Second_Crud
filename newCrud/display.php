<?php
include('connection.php');
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-secondary my-5"><a href="index.php"class="text-light"> Add Data</a></button>
<table class="table table-striped" >
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Country</th>
      <th scope="col">Update/Delete </th>
    </tr>
  </thead>
  <tbody>
      <?php
      $sql="select * from `information`";
      $result=mysqli_query($conn,$sql);
      if ($result) {
        while ($row=mysqli_fetch_assoc($result)) {
            $id =$row['id'];
            $name =$row['name'];
            $gender =$row['gender'];
            $country =$row['country'];
            echo "
            <tr>
                <th>$id</th>
                <td>$name</td>
                <td>$gender</td>
                <td>$country</td>
                <td>
                <button class='btn btn-success'><a href='update.php?updateid=$id'class= text-light>Update</a></button>
                <button class='btn btn-danger'><a href='delete.php?deleteid=$id'class =text-dark>Delete</a></button>
                </td>
            </tr>
            ";

        }   
    } 
      ?>
      
  </tbody>
</table>
    </div>
</body>
</html>