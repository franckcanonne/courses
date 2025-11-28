<?php
include 'config.php';

$id = $_POST['id'];
$nom_produit = $_POST['nom_produit'];

$sql = "UPDATE produits SET nom_produit='$nom_produit' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "Product updated successfully";
} else {
    echo "Error updating product: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
