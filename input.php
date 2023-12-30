<?php include 'koneksi.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    

    $sql = "INSERT INTO custumer(nama, email) VALUES ('$nama', '$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header('Location: datapemesan.php');
}
?>