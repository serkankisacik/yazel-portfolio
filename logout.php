<?php
session_start(); // Mevcut oturumu yakala
session_destroy(); // Oturumu tamamen sonlandır
header("Location: login.php"); // Kullanıcıyı giriş sayfasına fırlat
exit;
?>