<?php
include 'register.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">
    <title>Crud</title>
  </head>
  <body>
    <div class="container">
      <button class="btn btn-primary"><a href="index.php" class="text-light"> Add User</a></button>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Number</th>
            <th scope="col">Password</th>
            <th scope="col">Operations</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql = "SELECT * FROM crud"; 
          $result = mysqli_query($conn, $sql);
          if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
              $id = $row['id'];
              $fname = $row['fname'];
              $lname = $row['lname'];
              $email = $row['email'];
              $number = $row['number'];
              $password = $row['password'];
              echo '<tr>
              <th scope="row">'.$id.'</th>
              <td>'.$fname.'</td>
              <td>'.$lname.'</td>
              <td>'.$email.'</td>
              <td>'.$number.'</td>
              <td>'.$password.'</td>
              <td>
          <button class = "btn btn-primary"><a href="update.php?updateid='.$id.'" class = "text-light">Update</a></button>
          <button class = "btn btn-danger"><a href="delete.php?deleteid='.$id.'">Delete</a></button>
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
