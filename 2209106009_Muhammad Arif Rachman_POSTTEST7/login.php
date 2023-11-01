<?php
session_start();
require "function.php";
if (isset($_POST["submit"])) {
    $username = htmlspecialchars($_POST["username"]);
    $password = $_POST["password"];

    $query = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '$username'");
    if (mysqli_num_rows($query) == 1) {
        $row = mysqli_fetch_assoc($query);
        if (password_verify($password, $row["password"])) {
            $nama = $row["username"];
            $_SESSION["type"] = $row["type"];
            $_SESSION["login"] = true;
            echo "
            <script>
            alert('Selamat Datang $nama !');
            document.location.href = 'index.php';
            </script>
            ";
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="data/login.css">
</head>

<body>
    <section>
        <h1>Login</h1>
        <div class="cont-form">
            <form action="" method="post">
                <div class="row">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required autofocus>
                </div>
                <div class="row">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="row">
                    <button type="submit" name="submit">Login</button>
                </div>
            </form>
        </div>

        <a href="register.php">Buat Akun</a>
    </section>
</body>

</html>