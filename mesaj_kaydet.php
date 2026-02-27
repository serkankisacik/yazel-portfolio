<?php
include("conn.php"); // Veritabanı bağlantısı şart

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formdaki 'name' özniteliklerine göre verileri alıyoruz
    $ad      = $_POST['name'];
    $email   = $_POST['email'];
    $tel     = $_POST['phone'];
    $konu    = $_POST['subject'];
    $mesaj   = $_POST['message'];

    try {
        // SQL Injection korumalı (PDO) mesaj kaydı
        $sorgu = $baglanti->prepare("INSERT INTO mesajlar (ziyaretci_ad, ziyaretci_email, telefon, konu, mesaj_icerik) VALUES (?, ?, ?, ?, ?)");
        $islem = $sorgu->execute([$ad, $email, $tel, $konu, $mesaj]);

        if ($islem) {
            // Hata yerine şık bir başarı mesajı
            echo "<script>alert('Mesajınız veritabanına kaydedildi!'); window.location.href='contact.php';</script>";
        }
    } catch (PDOException $e) {
        // Veritabanı hatası varsa burası çalışır
        die("Veritabanı hatası: " . $e->getMessage());
    }
}
?>