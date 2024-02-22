<?php
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'hackadia';

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Veritabanından tüm soruları çek
$sql = "SELECT * FROM forum";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Sorular</h2>";
    echo "<ul>";
    while ($row = $result->fetch_assoc()) {
        echo "<li><strong>Soru:</strong> " . $row["question_text"] . "<br>";
        echo "<strong>Cevap:</strong> " . $row["answer_text"] . "</li><br>";
    }
    echo "</ul>";
} else {
    echo "Henüz soru eklenmemiş.";
}

$conn->close();
?>
