<?php
session_start();
include("conn.php");

if ($_POST) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $sorgu = $baglanti->prepare("SELECT * FROM kullanicilar WHERE username=? AND password=?");
    $sorgu->execute([$user, $pass]);
    $kullanici = $sorgu->fetch();

    if ($kullanici) {
        $_SESSION['oturum'] = true;
        $_SESSION['username'] = $user;
        header("Location: admin.php");
    } else {
        echo "<script>alert('Hatalı kullanıcı adı veya şifre!');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Giriş Yap</title>
    <style>
        body { font-family: sans-serif; background: #222; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .login-box { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 0 20px rgba(0,0,0,0.5); }
        input { display: block; width: 250px; margin-bottom: 15px; padding: 10px; }
        button { width: 100%; padding: 10px; background: #f39c12; border: none; color: white; cursor: pointer; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Yönetim Paneli</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Kullanıcı Adı" required>
            <input type="password" name="password" placeholder="Şifre" required>
            <button type="submit">Giriş Yap</button>
        </form>
    </div>
</body>
</html>