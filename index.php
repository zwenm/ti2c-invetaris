<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputkan | Selamat Datang</title>
    <style>
        html,
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #E9BCB7;
            color: #333;
            overflow: hidden;
        }

        header {
            background-color: #101935;
            padding: 20px 0;
            color: #F2FDFF;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        header h1 {
            margin: 0;
            font-size: 2em;
        }

        .hero {
            background-color: #fff;
            padding: 80px 0;
            text-align: center;
        }

        .container-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            align-items: center;
        }

        .text-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            margin: -50px auto 0;
        }

        .text-content h2 {
            margin: 0;
            font-size: 2.5em;
            color: #353535;
        }

        .buttons {
            margin-top: 20px;
        }

        .buttons a {
            display: inline-block;
            padding: 15px 30px;
            background-color: #564787;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .buttons a:hover {
            background-color: #3C315E;
        }

        .image img {
            max-width: 100%;
            max-height: 400px;
            border-radius: 10px;
        }

        footer {
            background-color: #101935;
            color: #F2FDFF;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <h1>INPUTKAN</h1>
        </div>
    </header>
    <main>
        <section class="hero">
            <div class="container-grid">
                <div class="text-content">
                    <h2>SISTEM INVENTARIS BARANG</h2>
                    <p>Barang apapun selama itu berbentuk tetap dihitung barang</p>
                    <div class="buttons">
                        <a href="tampilkan-barang.php">Mulai Input</a>
                    </div>
                </div>
                <div class="image">
                    <img src="image/Untitled17_20240423192730.png" alt="Anime Character Image">
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="container">
            <p>2024 Kos Waifu. All Rights Reserved </p>
        </div>
    </footer>
</body>

</html>