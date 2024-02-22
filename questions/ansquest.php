<?php
// Veritabanı bağlantısı
$host = 'localhost';
$dbUsername = 'root';
$dbPassword = 'root';
$dbName = 'hackadia';

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}

// Soru formu gönderildiğinde
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["question_text"])) {
    $questionText = $_POST["question_text"];
    $userId = $_POST["user_id"];

    // Soruyu veritabanına ekle
    $sqlQuestion = "INSERT INTO questions (user_id, question_text) VALUES ($userId, '$questionText')";
    $conn->query($sqlQuestion);
}

// Cevap formu gönderildiğinde
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["answer_text"]) && isset($_POST["question_id"]) && isset($_POST["user_id"])) {
    $answerText = $_POST["answer_text"];
    $questionId = $_POST["question_id"];
    $userId = $_POST["user_id"];

    // Cevabı veritabanına ekle
    $sqlAnswer = "INSERT INTO answers (user_id, question_id, answer_text) VALUES ($userId, $questionId, '$answerText')";
    $conn->query($sqlAnswer);
}

// Tüm soruları çek
$sql = "SELECT questions.id AS question_id, questions.question_text, users.username
        FROM questions
        INNER JOIN users ON questions.user_id = users.id
        ORDER BY questions.id DESC";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basit Forum</title>
</head>
<body>
    <h2>Soru Sor</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Kullanıcı Seç: 
        <select name="user_id">
            <?php
            $userResult = $conn->query("SELECT * FROM users");
            while ($userRow = $userResult->fetch_assoc()) {
                $userId = $userRow["id"];
                $username = $userRow["username"];
                echo "<option value='$userId'>$username</option>";
            }
            ?>
        </select>
        Soru: <input type="text" name="question_text" required>
        <input type="submit" value="Soru Sor">
    </form>

    <?php
    if ($result->num_rows > 0) {
        echo "<h2>Sorular</h2>";
        while ($row = $result->fetch_assoc()) {
            $questionId = $row["question_id"];
            $questionText = $row["question_text"];
            $username = $row["username"];
            echo "<div>";
            echo "<strong>Kullanıcı:</strong> $username<br>";
            echo "<strong>Soru:</strong> $questionText<br>";

            // Soruya ait cevapları çek
            $sqlAnswers = "SELECT answers.answer_text, users.username
                           FROM answers
                           INNER JOIN users ON answers.user_id = users.id
                           WHERE answers.question_id = $questionId
                           ORDER BY answers.id DESC";
            $resultAnswers = $conn->query($sqlAnswers);

            if ($resultAnswers->num_rows > 0) {
                echo "<ul>";
                while ($rowAnswer = $resultAnswers->fetch_assoc()) {
                    $answerText = $rowAnswer["answer_text"];
                    $answerUsername = $rowAnswer["username"];
                    echo "<li><strong>$answerUsername:</strong> $answerText</li>";
                }
                echo "</ul>";
            } else {
                echo "<em>Bu soruya henüz cevap verilmemiş.</em>";
            }

            // Cevap formunu göster
            echo "<form method='post' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>";
            echo "<input type='hidden' name='question_id' value='$questionId'>";
            echo "<input type='hidden' name='user_id' value='$userId'>";
            echo "Cevap: <input type='text' name='answer_text' required>";
            echo "<input type='submit' value='Cevap Ver'>";
            echo "</form>";

            echo "</div>";
            echo "<hr>";
        }
    } else {
        echo "<em>Henüz soru eklenmemiş.</em>";
    }
    ?>

</body>
</html>

<?php
$conn->close();
?>
