<?php
include "connect.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Crud Operations</title>
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="users.php" class="text-light">ADD USER</a></button>
        <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM users"; 
    $result = mysqli_query($con, $sql);
    if ($result) {
      while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];
        echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      <td>
<button class="btn btn-primary"><a href="update.php?update_id='.$id.'" class="text-light">Update</a></button>
<button class="btn btn-danger"><a href="delete.php?delete_id='.$id.'" class="text-light">Delete</a></button>
    </td>
    </tr>';
      }
    } 
    ?>
  </tbody>
</table>
        
    </div>
</body>
</html>
