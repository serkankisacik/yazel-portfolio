<?php
// Veritabanı yapılandırma bilgileri
define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'yazel');
define('DB_USER', 'root');
define('DB_PASS', '');

// PDO bağlantı dizesi
define('DB_DSN', "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4");
?>
