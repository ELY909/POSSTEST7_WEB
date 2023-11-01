<?php
require "function.php";
if (isset($_POST["submit"])) {
    $username = htmlspecialchars($_POST["username"]);
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $result = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '$username'");
    if (mysqli_num_rows($result) == 0) {
        if ($password === $cpassword) {
            $password = password_hash($password, PASSWORD_DEFAULT);
            $query = mysqli_query($conn, "INSERT INTO pengguna VALUES (NULL, '$username', '$password', 'user')");
            if ($query) {
                echo "
                <script>
                alert('Berhasil Registrasi !');
                document.location.href = 'login.php';
                </script>
                ";
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="data/login.css">
</head>

<body>
    <section>
        <h1>Register</h1>
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
                    <label for="cpassword">Konfirmasi Password</label>
                    <input type="password" name="cpassword" id="cpassword" required>
                </div>
                <div class="row">
                    <button type="submit" name="submit">Register</button>
                </div>
            </form>
        </div>
        <a href="login.php">Back</a>
    </section>
</body>

</html>