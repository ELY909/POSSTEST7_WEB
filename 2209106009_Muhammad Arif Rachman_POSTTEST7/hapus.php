<?php
session_start();
require "function.php";
if (!isset($_SESSION["login"])) {
    header("Location:login.php");
    exit;
} else {
    if ($_SESSION["type"] != "admin") {
        header("Location:index.php");
        exit;
    }
}
$id = $_GET["id"];

$result = mysqli_query($conn, "DELETE FROM senjata WHERE id_senjata = $id");

if ($result) {
    echo "
    <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'index.php';
    </script>";
}
