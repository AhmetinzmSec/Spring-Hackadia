<?php
include 'connection.php';

if (isset($_SESSION['username'])) {
} else {
    header("Location: login.php");
    exit();
}
?>

<!--
-----------------
https://github.com/ardacarofficial/links-website is open source project.
-----------------
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    if (isset($_SESSION['username'])) {
        echo '<title>' . $_SESSION['username'] . '</title>';
    } else {
        echo '<h2>Giriş Yap</h2>';
    }
    ?>
    <meta name="description" content="Your Description">
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400&amp;display=swap">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/profilecard.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>

<body>

    <header class="testing">
        <!-- Logo, Title and Description Codes Start -->
        <div class="header_img flex_column_center">
            <img src=" " alt="Profil Fotoğrafı">

        </div>
        <div class="header_text flex_column_center">
            <?php
            if (isset($_SESSION['username'])) {
                echo '<h1 class="header_h_item">' . $_SESSION['username'] . '</h1>';

                // Kullanıcının rolünü çekme
                $username = $_SESSION['username'];
                $query = "SELECT role FROM users WHERE username = '$username'";
                $result = mysqli_query($conn, $query);

                if ($result && mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    $userRole = $row['role'];
                    echo '<h2 class="header_h_item">' . $userRole . '</h2>';
                } else {
                    // Kullanıcı rolü bulunamadıysa bir hata mesajı gösterilebilir
                    echo '<h2 class="header_h_item">Rol Bulunamadı</h2>';
                }
            } else {
                echo '<h1>Giriş Yap</h1>';
            }
            ?>
        </div>

        <!-- Logo, Title and Description Codes End -->

        <!-- Social Media Icons Codes Start -->
        <div class="header_svg_list flex_row_center">
            <!-- Icon 1 Codes -->
            <div class="header_svg_item">
                <a href="#link" target="_blank" rel="nofollow">
                    <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                        <path d="M18,10.561a.494.494,0,0,1-.245-.065,15.2,15.2,0,0,0-10.95-1.55.5.5,0,0,1-.232-.973A16.2,16.2,0,0,1,18.25,9.626a.5.5,0,0,1-.247.935Z"></path>
                        <path d="M16.646,13.632a.5.5,0,0,1-.249-.066,12.459,12.459,0,0,0-9.121-1.292.5.5,0,1,1-.237-.971A13.458,13.458,0,0,1,16.9,12.7a.5.5,0,0,1-.25.933Z"></path>
                        <path d="M15.312,16.583a.5.5,0,0,1-.251-.068,9.777,9.777,0,0,0-7.295-1.033.5.5,0,0,1-.245-.97,10.768,10.768,0,0,1,8.043,1.139.5.5,0,0,1-.252.932Z"></path>
                        <path d="M12,23A11,11,0,1,1,23,12,11.013,11.013,0,0,1,12,23ZM12,2A10,10,0,1,0,22,12,10.011,10.011,0,0,0,12,2Z"></path>
                    </svg>
                </a>
            </div>
            <!-- Icon 2 Codes -->
            <div class="header_svg_item">
                <a href="#link" target="_blank" rel="nofollow">
                    <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                        <path d="m2.538 3 7.425 9.928L2 21h1.5l7.033-7.067L16 21h5.232l-7.662-9.995 6.955-7.514h-1.5L13 10 7.77 3H2.538Zm1.994 1h2.645l12.087 16h-2.525L4.532 4Z"></path>
                    </svg>
                </a>
            </div>
            <!-- Icon 3 Codes -->
            <div class="header_svg_item">
                <a href="#link" target="_blank" rel="nofollow">
                    <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                        <path d="M21.938,7.71a7.329,7.329,0,0,0-.456-2.394,4.615,4.615,0,0,0-1.1-1.694,4.61,4.61,0,0,0-1.7-1.1,7.318,7.318,0,0,0-2.393-.456C15.185,2.012,14.817,2,12,2s-3.185.012-4.29.062a7.329,7.329,0,0,0-2.394.456,4.615,4.615,0,0,0-1.694,1.1,4.61,4.61,0,0,0-1.1,1.7A7.318,7.318,0,0,0,2.062,7.71C2.012,8.814,2,9.182,2,12s.012,3.186.062,4.29a7.329,7.329,0,0,0,.456,2.394,4.615,4.615,0,0,0,1.1,1.694,4.61,4.61,0,0,0,1.7,1.1,7.318,7.318,0,0,0,2.393.456c1.1.05,1.472.062,4.29.062s3.186-.012,4.29-.062a7.329,7.329,0,0,0,2.394-.456,4.9,4.9,0,0,0,2.8-2.8,7.318,7.318,0,0,0,.456-2.393c.05-1.1.062-1.472.062-4.29S21.988,8.814,21.938,7.71Zm-1,8.534a6.351,6.351,0,0,1-.388,2.077,3.9,3.9,0,0,1-2.228,2.229,6.363,6.363,0,0,1-2.078.388C15.159,20.988,14.8,21,12,21s-3.159-.012-4.244-.062a6.351,6.351,0,0,1-2.077-.388,3.627,3.627,0,0,1-1.35-.879,3.631,3.631,0,0,1-.879-1.349,6.363,6.363,0,0,1-.388-2.078C3.012,15.159,3,14.8,3,12s.012-3.159.062-4.244A6.351,6.351,0,0,1,3.45,5.679a3.627,3.627,0,0,1,.879-1.35A3.631,3.631,0,0,1,5.678,3.45a6.363,6.363,0,0,1,2.078-.388C8.842,3.012,9.205,3,12,3s3.158.012,4.244.062a6.351,6.351,0,0,1,2.077.388,3.627,3.627,0,0,1,1.35.879,3.631,3.631,0,0,1,.879,1.349,6.363,6.363,0,0,1,.388,2.078C20.988,8.841,21,9.2,21,12S20.988,15.159,20.938,16.244Z"></path>
                        <path d="M17.581,5.467a.953.953,0,1,0,.952.952A.954.954,0,0,0,17.581,5.467Z"></path>
                        <path d="M12,7.073A4.927,4.927,0,1,0,16.927,12,4.932,4.932,0,0,0,12,7.073Zm0,8.854A3.927,3.927,0,1,1,15.927,12,3.932,3.932,0,0,1,12,15.927Z"></path>
                    </svg>
                </a>
            </div>
            <!-- Icon 4 Codes -->
            <div class="header_svg_item">
                <a href="#link" target="_blank" rel="nofollow">
                    <svg enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                        <path d="M7.285,23.5a.493.493,0,0,1-.191-.038A.5.5,0,0,1,6.785,23V19.571H2.572a.5.5,0,0,1-.5-.5V4.929a.5.5,0,0,1,.146-.354L6.147.646A.5.5,0,0,1,6.5.5H21.429a.5.5,0,0,1,.5.5V12a.5.5,0,0,1-.147.354L14.71,19.425a.5.5,0,0,1-.353.146H11.421L7.639,23.354A.5.5,0,0,1,7.285,23.5ZM3.072,18.571H7.285a.5.5,0,0,1,.5.5v2.722l3.076-3.075a.5.5,0,0,1,.353-.147H14.15l6.779-6.778V1.5H6.707L3.072,5.136Z"></path>
                        <path d="M10.822,17.607a.494.494,0,0,1-.192-.038.5.5,0,0,1-.308-.462v-2.25H7.285a.5.5,0,0,1-.5-.5V3.571a.5.5,0,0,1,.5-.5H18.857a.5.5,0,0,1,.5.5v7.643a.5.5,0,0,1-.147.354L16.068,14.71a.5.5,0,0,1-.354.147H13.779l-2.6,2.6A.5.5,0,0,1,10.822,17.607Zm-3.037-3.75h3.037a.5.5,0,0,1,.5.5V15.9l1.9-1.9a.5.5,0,0,1,.354-.146h1.935l2.85-2.85V4.071H7.785Z"></path>
                        <path d="M15.857,10.386a.5.5,0,0,1-.5-.5V6.072a.5.5,0,1,1,1,0V9.886A.5.5,0,0,1,15.857,10.386Z"></path>
                        <path d="M12.357,10.386a.5.5,0,0,1-.5-.5V6.072a.5.5,0,1,1,1,0V9.886A.5.5,0,0,1,12.357,10.386Z"></path>
                    </svg>
                </a>
            </div>
        </div>
        <!-- Social Media Icons Codes End -->

        <!-- Menu Codes Start -->
        <nav>
            <ul class="header_nav_menu_list flex_no_wrap_row_center">
                <li data-target="#main_section_container_1" id="header_nav_menu_item_1" class="header_nav_menu_item" href="">Profil Bilgisi</li>
                <li data-target="#main_section_container_2" id="header_nav_menu_item_2" class="header_nav_menu_item" href="">Kullanıcı Adı Değiştir</li>
                <li data-target="#main_section_container_3" id="header_nav_menu_item_3" class="header_nav_menu_item" href="">Bio Değiştir</li>
                <li data-target="#main_section_container_4" id="header_nav_menu_item_4" class="header_nav_menu_item" href="">Şifre Değiştir</li>
            </ul>
        </nav>
        <!-- Menu Codes End -->

    </header>
    <main>
        <!-- Menu Container 1 Codes Start -->
        <section id="main_section_container_1" class="flex_column_center">
            <!-- Menu Text Item -->
            <div class="main_text_item">
                <?php
                $currentUsername = $_SESSION['username'];

                // Kullanıcının biyografisini getir
                $getBioQuery = "SELECT biography FROM users WHERE username = '$currentUsername'";
                $getBioResult = $conn->query($getBioQuery);

                if ($getBioResult->num_rows > 0) {
                    $row = $getBioResult->fetch_assoc();
                    $currentBio = $row['biography'];

                    // Biyografi bilgisini göster
                    echo "<p>$currentBio</p>";
                } else {
                    echo "<p>Biyografi bulunamadı.</p>";
                }
                ?>
            </div>
            <!-- Menu Small Item -->
            <div class="main_small_button_list">
                <a class="main_small_a_item" data-target="#main_section_container_2" target="_blank" rel="nofollow">
                    <button class="main_small_button_item">Kullanıcı Adı Değiştir</button>
                </a>

                <a class="main_small_a_item" data-target="#main_section_container_3" target="_blank" rel="nofollow">
                    <button class="main_small_button_item">Şifre Değiştir</button>
                </a>

            </div>
            <!-- Menu Small Item -->
            <div class="main_small_button_list">

                <a class="main_small_a_item" href="logout.php" target="_blank" rel="nofollow">
                    <button class="main_small_button_item">Çıkış Yap</button>
                </a>
            </div>
        </section>
        <!-- Menu Container 1 Codes End -->

        <!-- Menu Container 2 Codes Start -->
        <section id="main_section_container_2" class="flex_column_center">
            <!-- Menu Text Item -->
            <div class="main_text_item">
                <p>Kullanıcı adı ve bio değiştirmek için bu menüyü kullanabilirsiniz.</p>
            </div>

            <!-- Menu Small Item -->
            <div class="main_small_button_list">

                <form method="post" action="changeusername.php">
                    <div class="form-group">
                        <input type="text" name="new_username" class="main_button_item" placeholder="Yeni Kullanıcı Adınız" required><br>

                        <input type="submit" class="main_button_item" value="Kullanıcı Adını Değiştir">
                    </div>
                </form>

                <form action="changepp.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="profile_picture" accept="image/*" required>
                    <input type="submit" value="Profil Fotoğrafını Güncelle">
                </form>


            </div>

        </section>
        <!-- Menu Container 2 Codes End -->

        <section id="main_section_container_3" class="flex_column_center">
            <!-- Menu Text Item -->
            <div class="main_text_item">
                <p>Kullanıcı adı ve bio değiştirmek için bu menüyü kullanabilirsiniz.</p>
            </div>

            <?php

            $currentUsername = $_SESSION['username'];

            // Kullanıcının mevcut biyografi bilgisini getir
            $getBioQuery = "SELECT biography FROM users WHERE username = '$currentUsername'";
            $getBioResult = $conn->query($getBioQuery);

            if ($getBioResult->num_rows > 0) {
                $row = $getBioResult->fetch_assoc();
                $currentBio = $row['biography'];
            } else {
                $currentBio = "";
            }

            echo "<p>Current Biography: " . $currentBio . "</p>";

            ?>

            <!-- Menu Small Item -->
            <div class="main_small_button_list">

                <form action='changebio.php' method='post'>
                    <div class="form-group">
                        <input type="text" name='newBio' id='newBio' class="main_button_item" placeholder="Yeni Bio"></input><br>
                        <input type='submit' class="main_button_item" value='Biyografiyi Güncelle'>
                    </div>
                </form>

            </div>

        </section>

        <!-- Menu Container 3 Codes Start -->
        <section id="main_section_container_4" class="flex_column_center">
            <!-- Menu Text Item -->
            <div class="main_text_item">
                <p>Şifre Değiştirme Test Menüsü</p>
            </div>
            <!-- Menu Small Item -->
            <div class="main_small_button_list">
                <form method="post" action="changepassword.php">
                    <input type="password" name="old_password" class="main_button_item" placeholder="Mevcut Şifre" required><br>
                    <input type="password" name="new_password" class="main_button_item" placeholder="Yeni Şifre" required><br>
                    <input type="password" name="confirm_password" class="main_button_item" placeholder="Yeni Şifre (Tekrar)" required><br>

                    <input type="submit" class="main_button_item" value="Şifreyi Değiştir">
                </form>
            </div>
        </section>
        <!-- Menu Container 3 Codes End -->
    </main>
    <footer class="footer__floating">

        <div class="footer__content">

            <a href="#home" class="footer__logo">

                <img src="assets/img/hackadia.png" alt="Hackadia Logo" class="footer__logo-img">

            </a>

            <p class="footer__copy">&#169; Hackadia. All rights reserved.</p>

        </div>

    </footer>
    <!-- Footer Codes End -->
    <script src="assets/js/profile.js"></script>
</body>

</html>