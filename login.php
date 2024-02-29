<?php
session_start();

include "connection.php";


if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $username;
        header('Location: index.php');
        exit;
    } else {
        echo "<script>alert('Geçersiz kullanıcı adı veya şifre')</script>";
    }
}

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Kullanıcı adında küfür içeren kelime kontrolü
    $profanityWords = array("küfürlü_kelime1", "küfürlü_kelime2", "küfürlü_kelime3");
    foreach ($profanityWords as $word) {
        if (stripos($username, $word) !== false) {
            echo "<script>alert('Kullanıcı adında küfürlü bir kelime içeremez.')</script>";
            break;
        }
    }

    // Şifrenin basit ardışık sayılardan oluşup olmadığını kontrol etme
    if (preg_match('/\d{4,}/', $password)) {
        echo "<script>alert('Şifre basit ardışık sayılardan oluşamaz.')</script>";
    }

    // Kullanıcı adının benzersiz olup olmadığını kontrol etme
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Bu kullanıcı adı zaten kullanımda.')</script>";
    } else {
        // Kullanıcıyı veritabanına kaydetme
        $role = "Hackadia Üyesi"; // Yeni eklenen satır
        $biography = "Burası çok sessiz";
        $query = "INSERT INTO users (username, password, email, role, biography) VALUES ('$username', '$password', '$email', '$role', '$biography')";
        mysqli_query($conn, $query);
        $_SESSION['username'] = $username;
        header('Location: login.php');
        exit;
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Giriş Yap</title>
    <link rel="stylesheet" type="text/css" href="assets/css/reg.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="" method="POST" class="sign-in-form">
                    <h2 class="title">Giriş Yap</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" id="username" placeholder="Kullanıcı Adı" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Şifre" required>
                    </div>

                    <input type="submit" name="login" value="Giriş Yap" class="btn solid">

                    <p class="social-text">Ya da Sosyal Medya Hesaplarınızla Hızlı Giriş Yapın (In-Dev)</p>
                    <div class="social-media">
                        <a href="#" class="social-icon" style="cursor: no-drop;">
                            <i class="fab fa-facebook-f" style="cursor: no-drop;"></i>
                        </a>
                        <a href="#" class="social-icon" style="cursor: no-drop;">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon" style="cursor: no-drop;">
                            <i class="fab fa-google" style="cursor: no-drop;"></i>
                        </a>
                        <a href="#" class="social-icon" style="cursor: no-drop;">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>


                <form action="" method="POST" class="sign-up-form">
                    <h2 class="title">Kayıt Ol</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" id="username" placeholder="Kullanıcı Adı" required>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="email" placeholder="E-Mail" required>
                        <!-- <button onclick="togglePasswordVisibility()">Görünür yap</button> -->
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" placeholder="Şifre" required>
                        <!-- <button onclick="togglePasswordVisibility()">Görünür yap</button> -->
                    </div>
                    <input type="submit" name="register" value="Kayıt Ol" class="btn solid">

                    <p class="social-text">Ya da Sosyal Medya Hesaplarınızla Hızlı Giriş Yapın (In-Dev)</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="panels-container">

            <div class="panel left-panel">
                <div class="content">
                    <h3>Yeni misin?</h3>
                    <p>Hemen kaydol ve bizimle birlikte ol. Siber güvenliğin muhteşem dünyasına katıl.</p>
                    <button class="btn transparent" id="sign-up-btn">Kayıt Ol</button>
                </div>
                <img src="./img/log.svg" class="image" alt="">
            </div>

            <div class="panel right-panel">
                <div class="content">
                    <h3>Bizden biri misin?</h3>
                    <p>Siber güvenliğin kapısı aralamışken böylece bırakıp gitme. Hemen giriş yap.</p>
                    <button class="btn transparent" id="sign-in-btn">Giriş Yap</button>
                </div>
                <img src="./img/register.svg" class="image" alt="">
            </div>
        </div>
    </div>

    <script src="assets/js/logreg.js"></script>
</body>

</html>