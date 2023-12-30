<?php include 'koneksi.php'; ?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "UPDATE custumer SET nama='$nama', email='$email' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diperbarui";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header('Location: datapemesan.php');
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM custumer WHERE id='$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
</head>
<style> * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 25px 30px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .navbar a.active {
            background-color: #4CAF50;
            color: white;
        }

        .navbar-right {
            float: right;
        }
        form{
            border: 1px solid black;
            padding: 10px;
            margin: 20px;
            padding : 18px;
        }
        .h{
            text-align: center ;
            padding: 20px;
        }
        </style>
<body>
<div class="navbar">
        <a href="admin_page.php" class="active">Home</a>
        <a href="datapemesan.php">DATA PEMESAN</a>
        <div class="navbar-right">
        <a href="logout.php" class="btn">logout</a>
        </div>
    </div>
    <div class="form">
    <h1 class="h">Update Data</h1>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <label>Nama:</label>
        <input type="text" name="nama" value="<?php echo $row['nama']; ?>" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>

        <input type="submit" value="Submit">
    </form>

    </div>
</body>
</html>

<?php
}
?>