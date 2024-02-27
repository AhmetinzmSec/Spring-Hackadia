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

   <link rel="stylesheet" href="assets/css/timeline.css">

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

            <form>

               <input type="radio" name="fancy" autofocus style="display:none;" value="neuron" id="neuron" />
               <input type="radio" name="fancy" style="display:none;" value="ziga" id="ziga" />
               <input type="radio" name="fancy" style="display:none;" value="algan" id="algan" />
               <input type="radio" name="fancy" style="display:none;" value="sedan" id="sedan" />

               <label class="neuron" for="neuron">&#9827; Neuron</label>
               
               <label class="ziga" for="ziga">&#9830; TULGAR: Ziga</label>

               <label class="algan" for="algan">&#9830; TULGAR: Algan</label>

               <label class="sedan" for="sedan">&#9830; TULGAR: Sedan</label>
            </form>
            <script src="assets/js/slider.js"></script>

         </div>

      </section>

      <section class="target" id="target">

         <div class="home__container container">
            <div class="timeline">
               <div class="outer">
                  <div class="card">
                     <div class="info">
                        <h3 class="title">Title 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                     </div>
                  </div>
                  <div class="card">
                     <div class="info">
                        <h3 class="title">Title 2</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                     </div>
                  </div>
                  <div class="card">
                     <div class="info">
                        <h3 class="title">Title 3</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                     </div>
                  </div>
                  <div class="card">
                     <div class="info">
                        <h3 class="title">Title 4</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                     </div>
                  </div>
                  <div class="card">
                     <div class="info">
                        <h3 class="title">Title 5</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                     </div>
                  </div>
               </div>
            </div>
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