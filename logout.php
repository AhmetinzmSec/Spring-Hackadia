<?php
session_start();

include "connection.php";

// Tüm oturum değişkenlerini sil
$_SESSION = array();

// Oturumu sonlandır
session_destroy();

// Kullanıcıyı çıkış sayfasından ana sayfaya yönlendir
header("Location: index.php");
exit;
