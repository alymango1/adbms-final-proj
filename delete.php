<?php
include 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM students WHERE id=$id";

if($conn->query($sql) === TRUE){
    echo "Deleted Successfully";
} else {
    echo "Error deleting record";
}

header("Location: read.php");
?>
