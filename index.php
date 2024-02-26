<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== FAVICON ===============-->
   <link rel="shortcut icon" href="assets/img/hackadia.png" type="image/x-icon">

   <!--=============== REMIXICONS ===============-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.4.0/remixicon.css" crossorigin="">

   <!--=============== CSS ===============-->
   <link rel="stylesheet" href="assets/css/styles.css">

   <link rel="stylesheet" href="assets/css/slider.css">

   <link rel="stylesheet" href="assets/css/snowflake.css">

   <link rel="stylesheet" href="assets/css/footer.css">

   <title>Hackadia</title>

   <link rel="manifest" href="./manifest.json">

</head>

<body>

   <!--==================== HEADER ====================-->
   <header class="header" id="header">
      <nav class="nav container">
         <a href="" class="nav__logo">

            <img src="assets/img/hackadia.png" alt="" class="logo">

         </a>

         <div class="nav__menu" id="nav-menu">
            <ul class=" nav__list">

            <li class="nav__item"><a href="#home" class="nav__link">Ana Sayfa</a></li>
            <li class="nav__item"><a href="#projects" class="nav__link">Projeler</a></li>
            <li class="nav__item"><a href="#target" class="nav__link">Hedef</a></li>
            <li class="nav__item"><a href="#contact" class="nav__link">İletişim</a></li>

            <?php
            include 'connection.php';
            if (isset($_SESSION['username'])) {
               echo '<li class="nav__item"><a href="profile.php" class="nav__link">' . $_SESSION['username'] . '</a></li>';
            } else {
               echo '<li class="nav__item"><a href="login.php" class="nav__link">Giriş</a></li>';
            }
            ?>

            </ul>

            <div class="nav__buttons">

               <a href="https://github.com/hackadia" class="nav__button-ghost">GitHub</a>
               <p class="nav__button-ghost-dark" id="toggle-mode">🌑</p>

            </div>

            <div class="nav__close" id="nav-close">

               <i class="ri-close-line"></i>

            </div>

         </div>

         <div class="nav__toggle" id="nav-toggle">
            <i class="ri-menu-line"></i>
         </div>

      </nav>

   </header>

   <!--==================== MAIN ====================-->
   <main class="main">

      <!--==================== HOME ====================-->
      <section class="home" id="home">

         <div class="home__container container">

            <div class="home__content">

               <div class="home__data">

                  <h3 class="home_subtitle">
                     SİBER GÜVENLİĞİN ÖNCÜLERİ
                  </h3>

                  <h1 class="home__title">
                     HACKADIA
                  </h1>

                  <p class="home__description">
                     Hackadia siber güvenlik ve modern arayüzü birleştirerek yeni bir çağ başlatıyor
                  </p>

                  <a href="questions/index.php" class="home__button">
                     Deneyimle
                  </a>

               </div>

               <img src="assets/img/bird-1.svg" alt="" class="home__bird-1">
               <img src="assets/img/bird-2.svg" alt="" class="home__bird-2">

            </div>


            <div class="home__images">

               <img src="assets/img/img-4.svg" alt="" class="home__img-4">
               <img src="assets/img/img-3.svg" alt="" class="home__img-3">
               <img src="assets/img/img-2.svg" alt="" class="home__img-2">
               <img src="assets/img/img-1.svg" alt="" class="home__img-1">

            </div>

         </div>

      </section>

      <section class="target" id="target">

         <div class="home__container container">

            <div class="box-area">
               <div class="box active">
                  <img src="https://cdn.discordapp.com/attachments/836225187132473364/1166723146926264340/group4.png?ex=65955a9a&is=6582e59a&hm=2011aac3b7a85fff984e5d2275d7dbfde1545e44ed4e2958a5b9ea8706ce7845&" alt="img">

                  <h2>Neuron Player</h2>
                  <p>
                     Gelişmiş Müzik Oynatıcısı
                  </p>
               </div>
               <div class="box">
                  <img src="https://cdn.discordapp.com/attachments/836225187132473364/1166723146926264340/group4.png?ex=65955a9a&is=6582e59a&hm=2011aac3b7a85fff984e5d2275d7dbfde1545e44ed4e2958a5b9ea8706ce7845&" alt="img">

                  <h2>Dock Studio</h2>
                  <p>
                     DNS Sunucusunu Arayüzü
                  </p>
               </div>
               <div class="box">
                  <img src="https://cdn.discordapp.com/attachments/836225187132473364/1166723146926264340/group4.png?ex=65955a9a&is=6582e59a&hm=2011aac3b7a85fff984e5d2275d7dbfde1545e44ed4e2958a5b9ea8706ce7845&" alt="img">

                  <h2>Thunar Dock</h2>
                  <p>
                     Windows Programları Gruplayın
                  </p>
               </div>
               <div class="box">
                  <img src="https://cdn.discordapp.com/attachments/836225187132473364/1166723146926264340/group4.png?ex=65955a9a&is=6582e59a&hm=2011aac3b7a85fff984e5d2275d7dbfde1545e44ed4e2958a5b9ea8706ce7845&" alt="img">

                  <h2>Typegraf</h2>
                  <p>
                     MD Tabanlı Not Defteri
                  </p>
               </div>
               <div class="box">
                  <img src="https://cdn.discordapp.com/attachments/836225187132473364/1166723146926264340/group4.png?ex=65955a9a&is=6582e59a&hm=2011aac3b7a85fff984e5d2275d7dbfde1545e44ed4e2958a5b9ea8706ce7845&" alt="img">

                  <h2>Project 12 (TULGAR: Algan)</h2>
                  <p>
                     GraphQL Tabanlı Node Editor
                  </p>
               </div>
            </div>

            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
            <script src="assets/js/slider.js"></script>

         </div>

      </section>

      <section class="contact" id="contact">

         <div class="home__container container">

         </div>

      </section>

      <section class="footer" id="footer">

         <div class="homr__container container">

            <footer class="footer__floating">

               <div class="footer__content">

                  <a href="#home" class="footer__logo">

                     <img src="assets/img/hackadia.png" alt="Hackadia Logo" class="footer__logo-img">

                  </a>

                  <p class="footer__copy">&#169; Hackadia. All rights reserved.</p>

               </div>

            </footer>

         </div>

      </section>

   </main>

   <script>
      window.addEventListener('scroll', function() {
         // Sayfa kaydıkça navbarın konumunu güncelle
         // Animasyonlu bir şekilde güncelleme yapılabilir
      });
   </script>

   <!--=============== GSAP ===============-->
   <script src="assets/js/gsap.min.js"></script>

   <!--=============== MAIN JS ===============-->

   <!-- Navbar Burger Sistemi -->
   <script src="assets/js/main.js"></script>

   <!-- PWA Kodları -->
   <script src="./script.js"></script>

   <!-- Karanlık Mod Ayarı -->
   <script src="assets/js/darkmode.js"></script>

   <!-- Slider Kodları -->
   <script src="assets/js/slider.js"></script>

   <!-- Navbar Yazı Optimizasyonu  -->
   <script src="assets/js/navdark.js"></script>

   <!-- İletişim Formu -->
   <script src="assets/js/contact.js"></script>

</body>

</html>