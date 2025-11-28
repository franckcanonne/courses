<?php
include 'config.php';

$id = $_POST['id'];

$sql = "DELETE FROM produits WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Product deleted successfully";
} else {
    echo "Error deleting product: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
