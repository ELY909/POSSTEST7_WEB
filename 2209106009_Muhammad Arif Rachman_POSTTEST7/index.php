<?php
require "function.php";
session_start();

$query = mysqli_query($conn, "SELECT * FROM senjata");

while ($row = mysqli_fetch_assoc($query)) {
    $weapons[] = $row;
}

date_default_timezone_set("Asia/Makassar");

$nomor = 1;

if (!isset($_SESSION["login"])) {
    $_SESSION["login"] = false;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resident Evil 4</title>
    <link rel="stylesheet" href="data/style.css">
</head>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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

        document.getElementById('openPopupButton').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'block';
        });

        document.getElementById('closePopup').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'none';
        });

    });
</script>

<body>
    <nav>
        <div class="logo">
            <img src="img/Resident_Evil_4-removebg-preview.png" alt="menu">
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="Get.php">Detail</a></li>
            <?php if (isset($_SESSION["type"])) : ?>
                <?php if ($_SESSION["type"] == "admin") : ?>
                    <li><a href="tambah.php">Tambah</a></li>
                <?php endif ?>
            <?php endif ?>
            <?php if ($_SESSION["login"] == false) { ?>
                <li><a href="login.php" onclick="alert('Anda Akan Login !')">Login</a></li>
            <?php } else { ?>
                <li><a href="logout.php" onclick="return confirm('Anda Yakin Ingin Logout ?')">Logout</a></li>
            <?php } ?>
        </ul>
        <button id="darkModeToggle">dark/light</button>
        <button id="openPopupButton">Open Pop-up</button>
        <li>Tanggal : <?= date("l, d-m-Y e") ?></li>
    </nav>
    <div class="wrapper">
        <section id="home">
            <div class="cont-image">
                <img src="img/wp11811990-resident-evil-4-2023-wallpapers.png" width="1100px" alt="Resident Evil 4">
                <div class="overlay-text">
                    <h1>Weapon List</h1>
                    <table border="1" width="100%">
                        <thead>
                            <th>No.</th>
                            <th width="100px">Gambar</th>
                            <th width="100px">Weapon</th>
                            <th width="100px">Power</th>
                            <th width="100px">Ammo Capacity</th>
                            <th width="100px">Reload Speed</th>
                            <th width="100px">Rate of Fire</th>
                            <th width="100px">Precision</th>
                            <?php if (isset($_SESSION["type"])) : ?>
                                <?php if ($_SESSION["type"] == "admin") : ?>
                                    <th width="100px">Aksi</th>
                                <?php endif ?>
                            <?php endif ?>
                        </thead>
                        <tbody>
                            <?php foreach ($weapons as $weapon) : ?>
                                <tr>
                                    <td><?= $nomor ?></td>
                                    <td><img width="auto" height="150px" src="img/data/<?= $weapon["gambar"] ?>"></td>
                                    <td><?= $weapon["nama"] ?></td>
                                    <td><?= $weapon["power"] ?></td>
                                    <td><?= $weapon["ammo_capacity"] ?></td>
                                    <td><?= $weapon["reload_speed"] ?></td>
                                    <td><?= $weapon["rate_fire"] ?></td>
                                    <td><?= $weapon["precision_senjata"] ?></td>
                                    <?php if (isset($_SESSION["type"])) : ?>
                                        <?php if ($_SESSION["type"] == "admin") : ?>
                                            <td><a href="ubah.php?id=<?= $weapon["id_senjata"] ?>">Ubah</a> <a href="hapus.php?id=<?= $weapon["id_senjata"] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data senjata dengan nama : <?= $weapon['nama'] ?>')">Hapus</a></td>
                                        <?php endif ?>
                                    <?php endif ?>
                                </tr>
                            <?php $nomor++;
                            endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <footer>
            <p>ELY</p>
        </footer>
        <script src="../scripts/script.js"></script>
    </div>
    <div id="popup" class="popup">
        <div class="popup-content">
            <span id="closePopup" class="close-popup">&times;</span>
            <p>I'm not good at web programming.</p>
        </div>
    </div>
</body>

</html>