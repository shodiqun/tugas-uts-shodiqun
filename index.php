<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter Online</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 60px 0;
            position: relative; /* agar dapat memposisikan tautan login */
        }

        .services {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .service {
            text-align: center;
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 30%;
        }

        .login-container {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 5px;
        }

        .login-container h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-container button:hover {
            background-color: #45a049;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Styling untuk tautan login */
        header ul {
            position: absolute;
            top: 10px;
            right: 10px;
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        header ul li {
            display: inline;
            margin-left: 10px;
        }

        header ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <h1>Selamat Datang di Dokter Online</h1>
        <ul>
            <li><a href="admin/login.php">Login</a></li>
        </ul>
        <p>Konsultasikan masalah kesehatan Anda dengan dokter kami secara online.</p>
    </header>
    <section class="services">
        <h2>Layanan Kami</h2>
        <div class="service">
            <!-- <img src="icon1.png" alt="Service 1"> -->
            <h3>Konsultasi Dokter Secara Online</h3>
            <p>Konsultasikan masalah kesehatan Anda dengan dokter kami secara online.</p>
        </div>
        <div class="service">
            <!-- <img src="icon2.png" alt="Service 2"> -->
            <h3>Resep Obat Online</h3>
            <p>Dapatkan resep obat dari dokter kami tanpa harus datang ke klinik.</p>
        </div>
        <div class="service">
            <!-- <img src="icon3.png" alt="Service 3"> -->
            <h3>Konsultasi Chat</h3>
            <p>Konsultasikan masalah kesehatan Anda melalui obrolan langsung dengan dokter kami.</p>
        </div>
    </section>
    <footer>
        <p>&copy; 2024 Dokter Online. All rights reserved.</p>
    </footer>
</body>
</html>
