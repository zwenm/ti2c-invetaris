<?php

include ("koneksi.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql_delete = "DELETE FROM tb_barang WHERE id = $id";
    $query_delete = mysqli_query($db, $sql_delete);

    if ($query_delete) {
        echo "<script>alert('Data berhasil dihapus'); window.location.href='tampilkan-barang.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus data');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputkan | List Barang </title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Roboto+Condensed:wght@100..900&family=Teko:wght@300..700&display=swap');

        header {
            background-color: #101935;
            color: white;
            padding: 50px;
            text-align: center;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        body {
            font-family: "Nunito Sans", sans-serif;
            margin: 0;
            padding: 40px;
            background-color: #F4F7FA;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
            text-align: left;
            padding: 10px;
            border-bottom: 2px solid #ddd;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        @media(max-width: 500px) {
            .table thead {
                display: none;
            }

            .table,
            .table tbody,
            .table tr,
            .table td {
                display: block;
                width: 100%;
            }

            .table tr {
                margin-bottom: 15px;
            }

            .table td {
                text-align: right;
                padding-left: 50%;
                text-align: right;
                position: relative;
            }
        }

        .custom-button {
            background-color: #564787;
            border: none;
            color: white;
            padding: 8px 16px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin-bottom: 10px;
            cursor: pointer;
            border-radius: 5px;
            transition-duration: 0.4s;
        }

        .custom-button:hover {
            background-color: #3C315E;
        }
    </style>
</head>

<body>
    <header>
        <h2>Sistem Inventaris Barang</h2>
    </header>

    <nav>
        <button class="custom-button" type="button" name="tambah"
            onclick="location.href='registrasi-barang.php'">Tambahkan barang</button>
        <button class="custom-button" type="button" name="kembali" onclick="location.href='index.php'">Kembali ke Menu
            Utama</button>
    </nav>

    <div class="container">
        <table border="1">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Merk Barang</td>
                    <td>Warna</td>
                    <td>Jumlah</td>
                    <td>Tindakan</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM tb_barang";
                $query = mysqli_query($db, $sql);

                while ($barang = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>" . $barang['id'] . "</td>";
                    echo "<td>" . $barang['merk_barang'] . "</td>";
                    echo "<td>" . $barang['warna'] . "</td>";
                    echo "<td>" . $barang['jumlah'] . "</td>";

                    echo "<td>";
                    echo "<a href='?id=" . $barang['id'] . "' onclick=\"return confirm('Apakah anda yakin ingin menghapus data ini?')\">Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <p>Total barang : <?php echo mysqli_num_rows($query) ?>
        </p>
    </div>
</body>

</html>