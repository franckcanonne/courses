<?php
include 'config.php';

$sql = "SELECT * FROM produits";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $rows = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    echo json_encode($rows);
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
