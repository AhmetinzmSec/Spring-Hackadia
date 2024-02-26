<?php
include "./connection.php"; // Bağlantı dosyasını ekleyin
include "./connecti.php";

if ($_POST) {

  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  // Formdan gelen verileri alın
  // Formdan gelen verileri alın
  $questionText = isset($_POST["question"]) ? $_POST["question"] : "";

  // Kullanıcı id'sini almak için gerekli kontrolü yapın
  $userId = isset($_SESSION["id"]) ? (int)$_SESSION["id"] : 1; // Bu değeri kullanıcının oturum bilgilerinden almalısınız, burada sadece örnek olarak 1 yazılmıştır.

  // Soruyu veritabanına eklemek için gerekli SQL sorgusunu yapın
  $insertQuestionQuery = "INSERT INTO questions (user_id, question) VALUES (:user_id, :question)";

  // SQL sorgusunu hazırlayın
  $insertQuestionStmt = $db->prepare($insertQuestionQuery);

  // Parametreleri bağlayın
  $insertQuestionStmt->bindParam(':user_id', $userId, PDO::PARAM_INT);
  $insertQuestionStmt->bindParam(':question', $questionText, PDO::PARAM_STR);

  // Sorguyu çalıştırın
  $insertQuestionStmt->execute();

  // Sorguyu kapatın
  $insertQuestionStmt->closeCursor();

  // Soru başarıyla eklenirse kullanıcıyı ana sayfaya yönlendirin
  header("Location: forum.php");
  exit();
}
