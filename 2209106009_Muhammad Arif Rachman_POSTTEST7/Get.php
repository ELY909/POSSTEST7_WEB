<?php
session_start();
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="data/style.css">
</head>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const body = document.body;

        // Your existing code ...

        document.getElementById('darkModeToggle').addEventListener('click', function() {
            body.classList.toggle('dark-mode');
            const isDarkMode = body.classList.contains('dark-mode');
            localStorage.setItem('darkMode', isDarkMode ? 'enabled' : 'disabled');
        });

        // Open pop-up on button click
        document.getElementById('openPopupButton').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'block';
        });

        // Close pop-up on close button click
        document.getElementById('closePopup').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'none';
        });

        // Close pop-up on outside click
        window.addEventListener('click', function(event) {
            if (event.target === document.getElementById('popup')) {
                document.getElementById('popup').style.display = 'none';
            }
        });

        // Trigger pop-up on accessing get.html and about.html
        const currentPage = window.location.pathname;
        if (currentPage.includes('get.php') || currentPage.includes('about.php')) {
            document.getElementById('popup').style.display = 'block';
        }
    });
</script>

<body>
    <?php include "nav-bar.php" ?>
    </div>
    </section>
    <h1>Melee</h1>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>1. Combat Knife</h2>
            <p>Free To Get: Sebagai bagian dari kampanye utama, Anda akan secara otomatis
                mendapatkan pisau ini sebagai senjata awal Anda segera setelah Anda mulai memainkan game dari Bab 1.</p>
            <p>Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut : <br>
                Power = 1.00 <br>Durability = 2.20 <br>Attack Speed = 1.20</p>
        </div>
        <img src="img/combat-knife-1024x460.webp" width="600" />
    </section>
    <section id="weapom">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>2. Boot Knife</h2>
            <p>Free To Get: Diperoleh sebagai barang koleksi atau item drop di Chapter 7. <br>Note : Tidak bisa di upgrade.</p>
        </div>
        <img src="img/boot-knife-1024x454.webp" width="600" />
    </section>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>3. Kitchen Knife</h2>
            <p>Free To Get: Diperoleh dari Chapter 1 sebagai barang koleksi atau item drop.</p>
            <p>Note : Tidak bisa di upgrade.</p>
        </div>
        <img src="img/kitchen-knife-1024x397.webp" width="600" />
    </section>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>4. Fighting Knife</h2>
            <p>Free To Get: Diperoleh sebagai barang koleksi dari Chapter 14 setelah menyelesaikan pertarungan bos dengan Krauser.</p>
            <p>Note : Tidak bisa di upgrade.</p>
        </div>
        <img src="img/fighting-knife-1024x576.webp" width="600" />
    </section>
    <h1>Magnums</h1>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>5. Broken Butterfly</h2>
            <p>Buy To Get: dibeli dengan Biaya 42.000 ptas di merchant.</p>
            <p>Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut :</p><br>
            <p>Power = 27.0 <br>Ammo Capacity = 10 <br>Reload Speed = 0.86 <br>Rate Of Fire = 1.33 <br>Precision = 2.00
            <p>
        </div>
        <img src="img/broken-butterfly-1024x576.webp" width="600" />
    </section>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>6. Killer Seven</h2>
            <p>Buy To Get: dibeli dengan Biaya 77.700 ptas di pedagang. <br>
                Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut : <br>
                Power = 28.0.<br>Ammo Capacity = 15 <br> Reload Speed = 1.40 <br>Rate Of Fire = 1.16 <br>Precision = 2.50</p>
        </div>
        <img src="img/killer7-1024x576.webp" width="600" />
    </section>
    <h1>Handgun</h1>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>7. Sg-90R</h2>
            <p>Free To Get: Didapat Ketika Pertama Kali memainkan misi sebagai Leon. <br>
                Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut : <br>
                Power = 2.00 <br>Ammo Capacity = 18 <br>Reload Speed = 1.40 <br>Rate Of Fire = 1.63 <br>Precision = 3.50</p>
        </div>
        <img src="img/SG-09-R-1024x576.webp" width="600" />
    </section>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>8. Matilda</h2>
            <p>Buy To Get: Dapat ditukar dengan 5 spinel di merchant. <br>
                Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut : <br>
                Power = 1.90 <br>Ammo Capacity = 24 <br>Reload Speed = 1.50 <br>Rate Of Fire = 1.91 <br>Precision = 4.50</p>
        </div>
        <img src="img/matilda-1024x576.webp" width="600" />
    </section>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>9. Punisher</h2>
            <p>Buy To Get: Dapat ditukar dengan 5 spinel di merchant. <br>Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut : <br>Power = 1.90 <br>Ammo Capacity = 24 <br>Reload Speed = 1.50 <br>Rate Of Fire = 1.91 <br>Precision = 4.50</p>
        </div>
        <img src="img/punisher-1024x576.webp" width="600" />
    </section>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>10. Sentinel Nine</h2>
            <p>Buy To Get: harus membeli Bundel Paket DLC Ekstra. Atau, Anda dapat membeli senjata ini secara terpisah dari bundel seharga $ 1,99. Anda dapat memeriksanya di steam. <br>Ketika sudah Membeli DLC tersebut bisa diambil langsung di penyimpanan / storage disamping tempat save.</p>
            <p>Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut : <br>
                Power = 1.90 <br>Ammo Capacity = 31 <br>Reload Speed = 1.30 <br>Rate Of Fire = 2.00 <br>Precision = 4.00</p>
        </div>
        <img src="img/sentinel-nine-1024x433.webp" width="600" />
    </section>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>11. Blacktail</h2>
            <p>Buy To Get: Dapat dibeli dengan Biaya 24.000 ptas di merchant. <br>Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut : <br>
                Power = 2.40 <br>Ammo Capacity = 13 <br>Reload Speed = 1.60 <br>Rate Of Fire = 2.20 <br>Precision = 4.20</p>
        </div>
        <img src="img/blacktail-1024x576.webp" width="600" />
    </section>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>12. Red9</h2>
            <p>Buy To Get: Diperoleh dari Chapter 4 sebagai barang koleksi. Gunakan perahu di dermaga untuk pergi menuju harta karun di Danau, yang terletak di sebelah utara Rumah Perahu dan di sebelah tenggara Pemukiman Tepi Danau di peta Anda.<br><br>Di sana Anda akan menemukan perahu kosong yang tertutup ganggang hijau. Masuk dan telusuri seluruhnya, jarah setiap peti, di mana salah satunya juga berisi pistol ini.
            <p>Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut : <br>
                Power = 2.70 <br>Ammo Capacity = 16 <br>Reload Speed = 1.25 <br>Rate Of Fire = 1.26 <br>Precision = 3.00</p>
        </div>
        <img src="img/red9-1024x576.webp" width="600" />
    </section>
    <h1> Assault Riffle</Ri:a>
    </h1>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>13. stingray</h2>
            <p>Buy To Get: Dapat dibeli dengan Biaya 30.000 ptas di merchant.<br><br>
                Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut :<br><br>
                Power = 4.90 <br>Ammo Capacity = 18 <br>Reload Speed = 1.18 <br>Rate Of Fire = 0.92 <br>Precision = 5.40</p>
        </div>
        <img src="img/stingray-1024x576.webp" width="600" />
    </section>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>14. CQBR Assault Riffle</h2>
            Buy / free To Get: Dapat dibeli dengan Biaya 40.000 ptas di merchant, Dapat ditemukan di dalam kotak kunci persegi yang terletak di dalam perpustakaan. Anda harus memasukkan perangkat kubik ke dalam kotak untuk membukanya.<br><br>
            Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut :<br><br>
            <p>Power = 3.40 <br>Ammo Capacity = 32 <br>Reload Speed = 1.25 <br>Rate Of Fire = 2.50 <br>Precision = 5.00</p>
        </div>
        <img src="img/cqbr-assault-rifle-1024x576.webp" width="600" />
    </section>
    <h1>SMGs</h1>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>15. LE 5</h2>
            <p>Buy / free To Get: Dapat dibeli dengan Biaya 35.000 ptas di merchant, Anda harus terlebih dahulu mengakses kartu kunci level 1 untuk mendapatkan senjata ini.<br><br>Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut :</p>
            <p>Power = 1.20 <br>Ammo Capacity = 60 <br>Reload Speed = 1.05 <br>Rate Of Fire = 2.50 <br>Precision = 4.50</p>
        </div>
        <img src="img/LE-5-1024x470.webp" width="600" />
    </section>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>16. TMP</h2>
            <p>Buy / free To Get: Dapat dibeli dengan Biaya 10.000 ptas di merchant.</p>
            <p>Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut :</p>
            <p>Power = 1.10 <br>Ammo Capacity = 70 <br>Reload Speed = 1.40 <br>Rate Of Fire = 2.50 <br>Precision = 2.00</p>
        </div>
        <img src="img/tmp-1024x576.webp" width="600" />
    </section>
    <h1> Sniper Rifle</h1>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>17. SR M1903</h2>
            <p>Buy / free To Get: Dapat dibeli dengan Biaya 12.000 ptas di merchant.</p>
            <p>Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut :</p>
            <p>Power = 5.30 <br>Ammo Capacity = 13 <br>Reload Speed = 0.61 <br>Rate Of Fire = 0.53 <br>Precision = 5.20</p>
        </div>
        <img src="img/sr-m1903-1024x576.webp" width="600" />
    </section>
    <h1>Shotguns</h1>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>18. Riot Gun</h2>
            <p>Buy To Get: Dapat dibeli dengan Biaya 28.000 ptas di merchant.</p>
            <p>Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut :</p>
            <p>Power = 12.8 <br>Ammo Capacity = 12 <br>Reload Speed = 0.97 <br>Rate Of Fire = 1.10 <br>recision = 3.50</p>
        </div>
        <img src="img/riot-gun-1024x576.webp" width="600" />
    </section>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>19. W-870</h2>
            <p>free To Get: Pergilah ke tengah alun-alun desa dan masuklah ke rumah yang ditinggalkan dengan tangga yang ditunjukkan pada peta Anda.<br><br>Naiki tangga ke atas, dan Anda akan segera melihat W-870 di dinding dalam bingkai kayu persegi panjang.</p>
            <p>Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut :<br><br>
                Power = 10.1 <br>Ammo Capacity = 10 <br>Reload Speed = 0.95 <br>Rate Of Fire = 0.85 <br>Precision = 2.80</p>
        </div>
        <img src="img/w-870-1024x576.webp" width="600" />
    </section>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>20. Skull shaker</h2>
            <p>buy To Get: Sama seperti Sentinel Nine, Anda harus membeli Deluxe Edition atau Bundel Paket DLC Ekstra untuk menggunakan senjata ini. Sekali lagi, ini juga dapat dibeli secara terpisah dari bundel seharga $ 1,99 jika Anda hanya ingin membeli ini.<br><br>
                Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut :<br><br>
                Power = 9.07 <br>Ammo Capacity = 6 <br>Reload Speed = 1.29 <br>Rate Of Fire = 0.9 <br>Precision = 2.30</p>
        </div>
        <img src="img/skull-shaker-1024x441.webp" width="600" />
    </section>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>21. Striker</h2>
            <p>buy To Get: Dapat dibeli dengan Biaya 38.000 ptas di merchant.<br><br>Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut :
                Power = 16.2 <br>Ammo Capacity = 24 <br>Reload Speed = 0.62 <br>Rate Of Fire = 1.57 <br>Precision = 2.00</p>
        </div>
        <img src="img/striker-1024x576.webp" width="600" />
    </section>
    <h1>Crossbow</h1>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>22. Bolt Thrower</h2>
            <p>buy To Get: Dapat dibeli dengan Biaya 10.000 ptas di merchant.<br><br>Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut :<br><br>
                Power = 2.40 <br>Ammo Capacity = 10 <br>Reload Speed = 0.94 <br>Rate Of Fire = 0.85 <br>Precision = 3.00</p>
        </div>
        <img src="img/bolt-thrower-1024x576.webp" width="600" />
    </section>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>23. Rocket Launcher</h2>
            <p>buy To Get: Dapat dibeli dengan Biaya 80.000 ptas di merchant.</p>
        </div>
        <img src="img/rocket-launcher-1024x576.webp" width="600" />
    </section>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>24. Infinite Rocket Launcher</h2>
            <p>buy To Get: Dapat dibeli dengan Biaya 2.000.000 ptas di merchant.</p>
        </div>
        <img src="img/infinite-rocket-launcher-1024x576.webp" width="600" />
    </section>
    <h1>Bonus Weapons</h1>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>25. Chicago Sweeper</h2>
            <p>buy To Get: Dapat dibeli dengan Biaya 10.000 ptas di merchant.<br>Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut :<br>
                Power = 2.00 <br>Ammo Capacity = ∞ <br>Reload Speed = 0.93 <br>Rate Of Fire = 2.50 <br>Precision = 3.00</p>
        </div>
        <img src="img/chicago-sweeper-1024x447.webp" width="600" />
    </section>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>26. Primal Knife</h2>
            <p>buy To Get: Hilangkan setiap Clockwork Castellan yang ditempatkan di setiap bab.<br><br> Pisau tersebut akan tersedia seharga 1000 CP di toko konten tambahan setelah selesai.</p>
            <p>Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut :<br><br>Power = 1.20 <br>Durability = 2.40 <br>Attack Speed = 1.10</p>
        </div>
        <img src="img/primal-knife-1024x433.webp" width="600" />
    </section>
    <section id="weapon">
        <div class="kolom">
            <p class="deskripsi"></p>
            <h2>27. HandCannon</h2>
            <p>buy To Get: Selesaikan tingkat kesulitan profesional dari awal tetapi tanpa bantuan senjata bonus apa pun.<br><br> Sebagai alternatif, Handcannon juga dapat dengan mudah dicapai dengan menyelesaikan semua level dalam mode Merchenaries dengan peringkat S. Mode ini baru saja diperkenalkan dalam pembaruan game terbaru.</p>
            <p>Ketika Sudah Full Upgrade akan mendapatkan stats sebagai berikut :
                <br>Power = 36.0 <br>Ammo Capacity = ∞ <br>Reload Speed = 0.63 <br>Rate Of Fire = 0.65 <br>Precision = 1.80<br>
            </p>
        </div>
        <img src="img/Handcannon-1-1024x476.webp" width="600" />
    </section>
</body>

</html>