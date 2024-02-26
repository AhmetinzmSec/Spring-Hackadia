<?php
include 'connection.php';

$message = "";

if (isset($_SESSION['username']) && isset($_POST['old_password']) && isset($_POST['new_password']) && isset($_POST['confirm_password'])) {
    $currentUsername = $_SESSION['username'];
    $oldPassword = $_POST['old_password'];
    $newPassword = $_POST['new_password'];
    $confirmPassword = $_POST['confirm_password'];

    // Eski şifreyi doğrula
    $checkPasswordQuery = "SELECT * FROM users WHERE username = '$currentUsername' AND password = '$oldPassword'";
    $checkPasswordResult = $conn->query($checkPasswordQuery);

    if ($checkPasswordResult->num_rows > 0) {
        // Eğer eski şifre doğru ise, diğer kontrolleri yap
        if ($newPassword == $oldPassword) {
            $message = "Yeni şifre, eski şifre ile aynı olamaz. Lütfen farklı bir şifre seçin.";
        } elseif ($newPassword !== $confirmPassword) {
            $message = "Yeni şifreler uyuşmuyor. Lütfen aynı şifreyi doğrulayın.";
        } elseif (preg_match('/123|234|345|456|567|678|789/', $newPassword)) {
            $message = "Ardışık sayı kombinasyonları kullanılamaz. Lütfen farklı bir şifre seçin.";
        } else {
            // Eğer tüm kontroller geçildiyse, yeni şifreyi güncelle
            $updatePasswordQuery = "UPDATE users SET password = '$newPassword' WHERE username = '$currentUsername'";
            
            if ($conn->query($updatePasswordQuery) === TRUE) {
                $message = "Şifre başarıyla değiştirildi.";
            } else {
                $message = "Error updating password: " . $conn->error;
            }
        }
    } else {
        echo "Eski şifre yanlış. Lütfen doğru bir şekilde girin.";
    }
} else {
    header("Location: login.php");
    exit();
}
