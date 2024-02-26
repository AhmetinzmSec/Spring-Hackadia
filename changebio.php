<?php
include 'connection.php';

session_start();

if (isset($_SESSION['username']) && isset($_POST['newBio'])) {
    $currentUsername = $_SESSION['username'];
    $newBio = $_POST['newBio'];

    // Yeni biyografi bilgisini güncelle
    $updateBioQuery = "UPDATE users SET biography = '$newBio' WHERE username = '$currentUsername'";
    
    if ($conn->query($updateBioQuery) === TRUE) {
        echo "Biography successfully updated.";
    } else {
        echo "Error updating biography: " . $conn->error;
    }
} else {
    header("Location: login.php");
    exit();
}
?>
