<?php
include 'register.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    $email_check_sql = "SELECT * FROM crud WHERE email='$email' AND id <> $id";
    $email_check_result = $conn->query($email_check_sql);

    if ($email_check_result->num_rows > 0) {
    
        echo '<script>alert("Email already exists");</script>';
        header("location:update.php?updateid=$id");
        exit; 
    } else {
    
        $sql = "UPDATE crud SET fname='$fname', lname='$lname', email='$email', number='$number', password='$password' WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            header('location:displayy.php');
            exit;
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}
?>
