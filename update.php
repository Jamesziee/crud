<?php
include 'register.php'; 

if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];

    $sql = "SELECT * FROM crud WHERE id=$id"; 
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


    if ($row) {
        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $number = $row['number'];
        $password = $row['password'];

        echo '<!DOCTYPE html>
              <html lang="en">
              <head>
                  <meta charset="UTF-8">
                  <meta http-equiv="X-UA-Compatible" content="IE=edge">
                  <meta name="viewport" content="width=device-width, initial-scale=1.0">
                  <title>Edit User</title>
                  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css">
              </head>
              <body>
                  <div class="container">
                      <h2>Edit User</h2>
                      <form action="update_process.php" method="POST">
                          <input type="hidden" name="id" value="'.$id.'">
                          <input type="text" name="fname" value="'.$fname.'" placeholder="First Name" required><br>
                          <input type="text" name="lname" value="'.$lname.'" placeholder="Last Name" required><br>
                          <input type="email" name="email" value="'.$email.'" placeholder="Email" required><br>
                          <input type="text" name="number" value="'.$number.'" placeholder="Number" required><br>
                          <input type="password" name="password" value="'.$password.'" placeholder="Password" required><br>
                          <input type="submit" name="submit" value="Update">
                      </form>
                  </div>
              </body>
              </html>';
    } else {
        echo "Record not found!";
    }
}
?>
