<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM products WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo "Product deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location: view.php");
?>
