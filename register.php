<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_ope";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];

    $email_check_sql ="SELECT * FROM crud WHERE email='$email'";
    $email_check_result = $conn->query($email_check_sql);

    if ($email_check_result->num_rows > 0) {
        echo '<script>alert("Email already exists");</script>';
        header('location:index.php');
    } else {
        $sql = "INSERT INTO crud (fname, lname, email, number, password) VALUES ('$fname', '$lname', '$email', '$number', '$password')";

        if ($conn->query($sql) === TRUE) {
            header('location:displayy.php');
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
?>
