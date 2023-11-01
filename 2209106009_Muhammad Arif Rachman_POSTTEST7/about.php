<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="data/about.css">
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

        document.getElementById('openPopupButton').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'block';
        });

        document.getElementById('closePopup').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'none';
        });

    });
</script>

<body>
    <?php include "nav-bar.php" ?>
    <section class="about">
        <div class="main">
            <img src="img/kl.jpeg" alt="">
            <div class="about-text">
                <h1>Tentang Saya</h1>
                <h5>Gamers<span> & Sleepyhead<span></h5>
                <p>Nama : Muhammad Arif Rachman <br>NIM : 2209106009<br> Kelas : A 22 <br>Tanggal Lahir : 08 - 09 - 2003 <br> Tempat Lahir : Tanah Grogot</p>
                <p></p>
            </div>
        </div>
</body>

</html>