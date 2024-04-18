<?php
include 'register.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    echo '<script>';
    echo 'var result = confirm("Are you sure you want to delete this record?");';
    echo 'if (result) {';
    echo '  window.location.href = "delete.php?id='.$id.'&confirm=true";';
    echo '} else {';
    echo '  window.history.back();'; 
    echo '}';
    echo '</script>';
}

if(isset($_GET['id']) && isset($_GET['confirm']) && $_GET['confirm'] === 'true') {
    $id = $_GET['id'];

    $sql = "DELETE FROM crud WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header('location:displayy.php');
        exit;
    } else {
        die(mysqli_error($conn));
    }
}
?>
