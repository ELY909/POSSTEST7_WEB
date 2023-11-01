<nav>
    <div class="wrapper">
        <div class="menu">
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
        </div>
    </div>
</nav>