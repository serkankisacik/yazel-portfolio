<?php
require_once 'config.php';

try {
    // Veritabanı ismini alıp veritabanı olmadan bağlanıyoruz
    $host = DB_HOST;
    $user = DB_USER;
    $pass = DB_PASS;
    $dbname = DB_NAME;

    $pdo = new PDO("mysql:host=$host", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 1. Veritabanını oluştur
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci");
    echo "✅ Veritabanı '$dbname' hazır.<br>";

    // 2. Veritabanına bağlan
    $pdo->exec("USE `$dbname` ");
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 3. SQL dosyasını oku ve çalıştır
    $sql = "
    SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";
    SET time_zone = \"+00:00\";

    CREATE TABLE IF NOT EXISTS `kisiler` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `ad` varchar(50) NOT NULL,
      `soyad` varchar(50) NOT NULL,
      `telefon` varchar(20) DEFAULT NULL,
      `email` varchar(100) DEFAULT NULL,
      `uzmanlik_alani` varchar(100) DEFAULT NULL,
      `deneyim_suresi` int(3) DEFAULT NULL,
      `ulke` varchar(50) DEFAULT NULL,
      `dogum_tarihi` date DEFAULT NULL,
      `dil` varchar(50) DEFAULT NULL,
      `resim` varchar(255) DEFAULT 'default.jpg',
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

    INSERT INTO `kisiler` (`id`, `ad`, `soyad`, `telefon`, `email`, `uzmanlik_alani`, `deneyim_suresi`, `ulke`, `dogum_tarihi`, `dil`, `resim`) 
    SELECT 1, 'Yazel', 'Yüce', '05551234578', 'yazelyuce@gmail.com', 'Bilişim Sistemleri', 2, 'Türkiye', '2004-08-11', 'Türkçe', 'default.jpg'
    WHERE NOT EXISTS (SELECT 1 FROM `kisiler` WHERE id = 1);

    CREATE TABLE IF NOT EXISTS `mesajlar` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `ziyaretci_ad` varchar(100) DEFAULT NULL,
      `ziyaretci_email` varchar(100) DEFAULT NULL,
      `telefon` varchar(20) DEFAULT NULL,
      `konu` varchar(255) DEFAULT NULL,
      `mesaj_icerik` text DEFAULT NULL,
      `tarih` timestamp NOT NULL DEFAULT current_timestamp(),
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
    ";

    $pdo->exec($sql);
    echo "✅ Tablolar oluşturuldu ve örnek veriler eklendi.<br>";
    echo "🚀 Kurulum başarıyla tamamlandı! <b>config.php</b> dosyasını kontrol etmeyi unutmayın.";

} catch (PDOException $e) {
    die("❌ Hata: " . $e->getMessage());
}
?>
