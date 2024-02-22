<?php
session_start();

$host = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'hackadia';
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

if(isset($_SESSION['username']) && isset($_POST['new_username'])){
    $newUsername = $_POST['new_username'];
    $currentUsername = $_SESSION['username'];
    
    // Belirtilen kullanıcı adının başka bir kullanıcıya ait olup olmadığını kontrol et
    $checkQuery = "SELECT * FROM users WHERE username = '$newUsername' AND username != '$currentUsername'";
    $checkResult = $conn->query($checkQuery);
    
    if ($checkResult->num_rows > 0) {
        echo "Bu kullanıcı adı zaten başka bir kullanıcı tarafından kullanılıyor. Başka bir kullanıcı adı deneyin.";
    } else {
        // Güncelleme sorgusu
        $updateQuery = "UPDATE users SET username = '$newUsername' WHERE username = '$currentUsername'";
        
        if ($conn->query($updateQuery) === TRUE) {
            $_SESSION['username'] = $newUsername; // Yeni kullanıcı adını session'a kaydet
            echo "Kullanıcı adı başarıyla değiştirildi.";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    
} else {
    header("Location: login.php");
    exit();
}
?>