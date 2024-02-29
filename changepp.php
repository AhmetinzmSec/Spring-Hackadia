<?php
session_start();
include 'connection.php';

$username = $_SESSION['username'];

if ($_FILES['profile_picture']['error'] == 0) {
    $fileTmp = $_FILES['profile_picture']['tmp_name'];
    $fileName = basename($_FILES['profile_picture']['name']);
    $uploadDir = 'uploads/'; // Profil fotoğraflarının yükleneceği klasör

    $targetPath = $uploadDir . $fileName;

    // Profil fotoğrafını güncelle
    $updateQuery = "UPDATE users SET profile_picture = '$targetPath' WHERE username = '$username'";
    mysqli_query($conn, $updateQuery);

    // Profil fotoğrafını belirtilen klasöre taşı
    move_uploaded_file($fileTmp, $targetPath);

    echo 'Profil fotoğrafı güncellendi!';
} else {
    echo 'Profil fotoğrafı yüklenirken bir hata oluştu.';
}
?>
