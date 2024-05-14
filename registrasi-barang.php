<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inventory Management | Form Registrasi Barang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        header {
            background-color: #101935;
            color: white;
            padding: 50px;
            text-align: center;
            width: 100%;
            box-sizing: border-box;
        }

        .container {
            background-color: #fff;
            padding: 70px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .container div {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #564787;
            border: none;
            border-radius: 4px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #3C315E;
            box-shadow: 0 0 10px rgba(76, 175, 80, 0.5);
        }

        .info-file input[type="file"] {
            padding: 3px;
        }

    </style>
</head>

<body>
    <header>
        <h1>Registrasi Barang</h1>
    </header>
    <div class="container">
        <form action="proses-registrasi.php" method="POST">
            <div class="info-merk">
                <label for="nama">Nama Merk</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan merk barang" required>
            </div>
            <div class="warna-barang">
                <label for="warna">Warna Barang</label>
                <input type="text" id="warna" name="warna" placeholder="Masukkan warna barang" required>
            </div>
            <div class="info-jumlah">
                <label for="qty">Jumlah</label>
                <input type="text" id="qty" name="qty" placeholder="Masukkan jumlah barang" required>
            </div>
            <div class="submit">
                <input type="submit" name="submit" value="Tambah">
            </div>
        </form>
    </div>
</body>

</html>
