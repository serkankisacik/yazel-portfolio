<?php
require_once 'config.php';
$sira = 1;


try {
    // 1. Veritabanı Bağlantısı
    $baglanti = new PDO(DB_DSN, DB_USER, DB_PASS);
    $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 2. Veriyi Hazırlama ve Çekme
    $sorgu = $baglanti->prepare("SELECT * FROM kisiler WHERE id = ?");
    $sorgu->bindParam(1, $sira, PDO::PARAM_INT);
    $sorgu->execute();

    // 3. Veriyi bir değişkene ($cikti) atıyoruz
    $cikti = $sorgu->fetch(PDO::FETCH_ASSOC);

    // DİKKAT: Burada artık echo (ekrana yazdırma) yapmıyoruz. 
    // Bilgiler sadece $cikti değişkeninin içinde bekliyor.

} catch (PDOException $e) {
    die("Bağlantı Hatası: " . $e->getMessage());
}
?>