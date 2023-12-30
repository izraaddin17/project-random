<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Result</title>
</head>
<style>
        * {
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

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 18px;
        }

        th {
            background-color: #dddddd;
        }

        .h{
            padding: 20px;
            text-align: center ;
        }

        .form{
            border: 1px solid black;
            padding: 10px;
            margin: 20px;
            padding : 18px;
        }
        .table {
            font-family: Arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
    margin: 20px; /* mengatur margin */
    padding: 20px; /* mengatur padding */
    border-radius: 10px; /* mengatur ukuran sudut */
        }

    .table th, .table td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .table th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }

    .button {
        background-color: #f44336; 
        border: none;
        color: white;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
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
    <h1>Data yang di cari</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Action</th>
        </tr>

        <?php
        $query = $_GET['query'];
        $sql = "SELECT * FROM custumer WHERE nama LIKE '%$query%' OR email LIKE '%$query%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td><a href='update.php?id=" . $row['id'] . "'>Update</a> | <a href='delete.php?id=" . $row['id'] . "' onclick='return confirm('Yakin ingin menghapus data ini?')'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No results found</td></tr>";
        }
        ?>
    </table>
</body>
</html>