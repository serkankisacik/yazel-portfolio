<?php
session_start();
include("conn.php"); 
// Oturum kontrolü: Eğer giriş yapılmamışsa login.php'ye yönlendir
if (!isset($_SESSION['oturum']) || $_SESSION['oturum'] !== true) {
    header("Location: login.php");
    exit;
}

try {
    // 2. EĞER "KAYDET" BUTONUNA BASILDIYSA (GÜNCELLEME İŞLEMİ)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $ad       = $_POST['adi'];
        $soyad    = $_POST['soyadi'];
        $email    = $_POST['eposta'];
        $tel      = $_POST['telefon'];
        $uzmanlik = $_POST['uzmanlik'];
        $deneyim  = $_POST['deneyim'];
        $ulke     = $_POST['ulke'];
        $dogum    = $_POST['dogum_tarihi'];
        $dil      = $_POST['dil'];

        // RESİM YÜKLEME İŞLEMİ
        $resim_adi = $cikti['resim']; 

        if (isset($_FILES['profil_resmi']) && $_FILES['profil_resmi']['error'] == 0) {
            $izin_verilenler = ['jpg', 'jpeg', 'png', 'gif'];
            $dosya_adi = $_FILES['profil_resmi']['name'];
            $dosya_uzantisi = strtolower(pathinfo($dosya_adi, PATHINFO_EXTENSION));

            if (in_array($dosya_uzantisi, $izin_verilenler)) {
                $yeni_isim = "profil_" . time() . "." . $dosya_uzantisi;
                $hedef_yol = "uploads/" . $yeni_isim;

                if (!is_dir('uploads')) {
                    mkdir('uploads', 0777, true);
                }

                if (move_uploaded_file($_FILES['profil_resmi']['tmp_name'], $hedef_yol)) {
                    $resim_adi = $yeni_isim; 
                }
            }
        }

        $sql = "UPDATE kisiler SET 
                ad=?, soyad=?, email=?, telefon=?, 
                uzmanlik_alani=?, deneyim_suresi=?, ulke=?, dogum_tarihi=?, dil=?, resim=? 
                WHERE id=1";
        
        $sorgu = $baglanti->prepare($sql);
        $islem = $sorgu->execute([$ad, $soyad, $email, $tel, $uzmanlik, $deneyim, $ulke, $dogum, $dil, $resim_adi]);

        if ($islem) {
            echo "<div style='background:#d4edda; color:#155724; padding:15px; text-align:center;'>✅ Bilgiler ve Resim başarıyla güncellendi!</div>";
            header("Refresh: 2; url=admin.php");
        }
    }

} catch (PDOException $e) {
    die("Hata: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Admin Paneli</title>
    <style>
        body { font-family: sans-serif; background: #f4f4f4; padding: 20px; }
        .form-container { background: white; max-width: 500px; margin: auto; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        
        /* Başlık ve Çıkış Butonu Düzeni */
        .admin-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; border-bottom: 2px solid #eee; padding-bottom: 10px; }
        .logout-btn { background: #dc3545; color: white; padding: 8px 15px; text-decoration: none; border-radius: 4px; font-size: 14px; font-weight: bold; transition: 0.3s; }
        .logout-btn:hover { background: #a71d2a; }

        input { width: 95%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; }
        label { font-weight: bold; font-size: 14px; }
        button { width: 100%; padding: 12px; background: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; margin-top: 10px; }
        button:hover { background: #218838; }
        .current-img { width: 100px; height: 100px; object-fit: cover; border-radius: 50%; display: block; margin: 10px 0; border: 2px solid #ddd; }
    </style>
</head>
<body>

<div class="form-container">
    <div class="admin-header">
        <h2 style="margin:0;">🛠️ Profil Düzenleme</h2>
        <a href="logout.php" class="logout-btn">Güvenli Çıkış</a>
    </div>

    <form method="POST" action="admin.php" enctype="multipart/form-data">
        
        <label>Mevcut Profil Resmi:</label>
        <img src="uploads/<?php echo $cikti['resim']; ?>" class="current-img" alt="Profil">

        <label>Yeni Profil Resmi Seç:</label>
        <input type="file" name="profil_resmi" accept="image/*">

        <hr>

        <label>Ad:</label>
        <input type="text" name="adi" value="<?php echo $cikti['ad']; ?>">

        <label>Soyad:</label>
        <input type="text" name="soyadi" value="<?php echo $cikti['soyad']; ?>">

        <label>Mail</label>
        <input type="email" name="eposta" value="<?php echo $cikti['email']; ?>">

        <label>Telefon:</label>
        <input type="text" name="telefon" value="<?php echo $cikti['telefon']; ?>">

        <label>Uzmanlık:</label>
        <input type="text" name="uzmanlik" value="<?php echo $cikti['uzmanlik_alani']; ?>">

        <label>Deneyim (Yıl):</label>
        <input type="number" name="deneyim" value="<?php echo $cikti['deneyim_suresi']; ?>">

        <label>Ülke:</label>
        <input type="text" name="ulke" value="<?php echo $cikti['ulke']; ?>">

        <label>Doğum Tarihi:</label>
        <input type="date" name="dogum_tarihi" value="<?php echo $cikti['dogum_tarihi']; ?>">

        <label>Dil:</label>
        <input type="text" name="dil" value="<?php echo $cikti['dil']; ?>">

        <button type="submit">Değişiklikleri Kaydet</button>
    </form>
</div>

</body>
</html>