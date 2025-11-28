<?php
include 'config.php';

$nom_produit = $_POST['nom_produit'];

$sql = "INSERT INTO produits (nom_produit) VALUES ('$nom_produit')";

if (mysqli_query($conn, $sql)) {
    echo "Product created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
