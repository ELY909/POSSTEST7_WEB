<?php
require "function.php";
session_start();
if (!isset($_SESSION["login"])) {
    header("Location:login.php");
    exit;
} else {
    if ($_SESSION["type"] != "admin") {
        header("Location:index.php");
        exit;
    }
}

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $power = $_POST["power"];
    $ammo = $_POST["ammo"];
    $reload = $_POST["reload"];
    $rate = $_POST["rate"];
    $precision = $_POST["precision"];
    $gambar = $_FILES["gambar"]["name"];
    $tmpName = $_FILES["gambar"]["tmp_name"];

    $date = date("Y-m-d");

    $ekstensigmbr = explode(".", $gambar);
    $ekstensigmbr = strtolower(end($ekstensigmbr));
    $nm_gambar = "$date $nama-file.$ekstensigmbr";

    if (move_uploaded_file($tmpName, 'img/data/' . $nm_gambar)) {
        $result = mysqli_query($conn, "INSERT INTO senjata VALUES (NULL, '$nm_gambar', '$nama', $power, $ammo, $reload, $rate, $precision)");

        if ($result) {
            echo "
            <script>
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
        } else {
            echo "
            <script>
                alert('Data gagal ditambahkan!');
                document.location.href = 'tambah.php';
            </script>";
        }
    } else {
        echo "Gambar Gagal di upload";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <link rel="stylesheet" href="data/tambah.css">
    <link rel="stylesheet" href="data/style.css">
</head>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const body = document.body;

        const darkMode = localStorage.getItem('darkMode');
        if (darkMode === 'enabled') {
            body.classList.add('dark-mode');
        }

        document.getElementById('darkModeToggle').addEventListener('click', function() {
            body.classList.toggle('dark-mode');
            const isDarkMode = body.classList.contains('dark-mode');
            localStorage.setItem('darkMode', isDarkMode ? 'enabled' : 'disabled');
        });

    });
</script>

<body>
    <?php include "nav-bar.php" ?>
    <br><br><br>
    <section>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <label for="nama">Masukkan Nama Senjata</label>
                <input type="text" name="nama" id="nama" required>
            </div>
            <div class="row">
                <label for="power">Masukkan Power Senjata</label>
                <input type="text" name="power" id="power" required>
            </div>
            <div class="row">
                <label for="ammo">Masukkan Ammo Capacity Senjata</label>
                <input type="number" name="ammo" id="ammo" required>
            </div>
            <div class="row">
                <label for="reload">Masukkan Reload Speed Senjata</label>
                <input type="text" name="reload" id="reload" required>
            </div>
            <div class="row">
                <label for="rate">Masukkan Rate of Fire Senjata</label>
                <input type="text" name="rate" id="rate" required>
            </div>
            <div class="row">
                <label for="precision">Masukkan Precision Senjata</label>
                <input type="text" name="precision" id="precision" required>
            </div>
            <div class="row">
                <label for="gambar">Pilih Gambar Senjata</label>
                <input type="file" name="gambar" id="gambar" accept="image/*" required>
            </div>
            <div class="row akhir">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </section>
</body>

</html>