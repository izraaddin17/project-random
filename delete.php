<?php include 'koneksi.php'; ?>

<?php
$id = $_GET['id'];

$sql = "DELETE FROM custumer WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dihapus";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: datapemesan.php');
?>