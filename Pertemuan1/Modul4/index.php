<?php
require_once 'User.php';
require_once 'Admin.php';

// Membuat objek User biasa
$user1 = new User("Barqi Kubra");

// Membuat objek Admin (turunan dari User)
$admin1 = new Admin("Farid Muhammad", "Full Access");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Modul 4: Inheritance</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f4f7f9;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 700px;
            margin: 20px auto;
            background-color: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.05);
        }
        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }
        h2 {
            color: #34495e;
            margin-top: 30px;
        }
        .output {
            background-color: #ecf0f1;
            border-left: 5px solid #3498db;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
        }
        .info {
            background-color: #e8f5e9;
            border-left: 5px solid #4caf50;
            padding: 15px;
            margin-top: 20px;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Modul 4: Inheritance (Pewarisan User dan Admin)</h1>

        <h2>Pengguna Biasa (Kelas User)</h2>
        <div class="output">
            <?php echo $user1->salam(); ?>
            <strong>Peran yang diwarisi: <?php echo $user1->getRole(); ?></strong>
        </div>

        <h2>Administrator (Kelas Admin)</h2>
        <div class="output">
            <?php echo $admin1->salam(); ?>
            <br>
            <?php echo $admin1->kelolaSistem(); ?>
            <strong>Peran yang diwarisi: <?php echo $admin1->getRole(); ?></strong>
        </div>

        <div class="info">
            <strong>💡 Catatan Penting:</strong><br>
            Perhatikan bahwa objek Admin memiliki metode <strong>salam()</strong> yang berbeda dan dapat menggunakan metode dasar <strong>getRole()</strong> dari kelas User.
        </div>
    </div>
</body>
</html>