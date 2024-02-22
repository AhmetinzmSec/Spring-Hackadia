<?php
session_start();

$host = 'localhost'; // veya kendi sunucunuzun adresi
$dbUsername = 'root'; // veya veritabanı kullanıcı adınız
$dbPassword = 'root'; // veya veritabanı şifreniz
$dbName = 'hackadia'; // veritabanı adı
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Tüm oturum değişkenlerini sil
$_SESSION = array();

// Oturumu sonlandır
session_destroy();

// Kullanıcıyı çıkış sayfasından ana sayfaya yönlendir
header("Location: index.php");
exit;
