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

   <link rel="stylesheet" href="assets/css/footer.css">

   <link rel="stylesheet" href="assets/css/timeline.css">

   <link rel="stylesheet" href="assets/css/pop-up.css">

   <link rel="stylesheet" href="assets/css/contact.css">

   <link rel="stylesheet" href="assets/css/dynamic-island.css">

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
               <li class="nav__item"><a href="#target" class="nav__link">Projeler</a></li>
               <li class="nav__item"><a href="#timeline-con" class="nav__link">Yolculuk</a></li>

               <?php

               include 'connection.php';
               
               if (isset($_SESSION['username'])) {

                  echo '<li class="nav__item"><a href="profile.php" class="nav__link">' . $_SESSION['username'] . '</a></li>';

               } else {

                  echo '<li class="nav__item"><a href="login.php" class="nav__link">Giriş</a></li>';

               }

               ?>

               <!-- <li class="nav__item"><a class="button nav__link" href="#popup1">Bildirimler</a></li> -->

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




               <!-- <div id="popup1" class="overlay">
                  <div class="popup">
                     <h2>Hackadia Evriliyor!</h2>
                     <a class="close" href="#">&times;</a>
                     <div class="content">
                        Çok yakında burada bir tartışma oramı başlatabileceksiniz. Bu ortam ne olacak? Belki de sadece hesap oluşturabildiğiniz bir sayfa olacaktır...
                     </div>
                  </div>
               </div> -->

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

      <hr>

      <section class="timeline-con" id="timeline-con">

         <div class="home__container container">
            <div class="entries">
               <div class="entry" style="backdrop-filter: blur(20px); box-shadow: 0px 0px 2px black; border-radius: 20px;">
                  <div class="title">2022 Ocak - Haziran</div>
                  <div class="body">
                     <p>Hackadia ilk proje Thunar ile beraber açıldı. Beta testleri bu yılda devam etti. Tarihler 28 Haziran 2022'yi gösterdiğinde Thunar ilk güncellemesini aldı ve yolculuk başladı</p>
                  </div>
               </div>
               <div class="entry" style="backdrop-filter: blur(20px); box-shadow: 0px 0px 2px black; border-radius: 20px;">
                  <div class="title">2022 Haziran - Aralık</div>
                  <div class="body">
                     <p>Thunar hızla gelişmeye devam etti. Yepyeni güncellemeler ve dev sistemler ile güçlendirilmiş alt yapıya kavuştu</p>
                  </div>
               </div>
               <div class="entry" style="backdrop-filter: blur(20px); box-shadow: 0px 0px 2px black; border-radius: 20px;">
                  <div class="title big">2023 Ocak - Haziran</div>
                  <div class="body">
                     <p>Geliştirici ekip sadece bıt geliştirmekten sıkılıp farklı projeye yöneldiler. Bir müzik oynatıcısı yazıldı. Neuron Payer Windows ve Linux cihazlara Mart ayında çıkışını gerçekleştirdi. Haziran ayına kadar toplam 8 güncelleme aldı ve v2 ile yaza giriş yaptı</p>
                  </div>
               </div>
               <div class="entry" style="backdrop-filter: blur(20px); box-shadow: 0px 0px 2px black; border-radius: 20px;">
                  <div class="title">2023 Haziran - Aralık</div>
                  <div class="body">
                     <p>Yaza v2 ile giriş yapan Neuron hızla büyüdü. O sırada artık Thunar güncelleme almayı bıraktı. Yaklaşık 6 ay boyunca Thunar'dan tek bir haber alındı. Thunar kodları herkese açılmıştı. Aralık ayına gelindiğinde 2024 Ocak ayında Thunar'ın tarihin tozlu raflarına kaldırılacağı bildirildi. Neuron Player ise güncelleme almaya devam edip v4 ile yılı noktaladı</p>
                  </div>
               </div>
               <div class="entry" style="backdrop-filter: blur(20px); box-shadow: 0px 0px 2px black; border-radius: 20px;">
                  <div class="title">2024 Ocak - Şubat</div>
                  <div class="body">
                     <p>Hackadia, Neuron'dan sonra yeni projelere yöneldi. WEB sitesinde dev bir yenilik yapılmaya hazırlanıldı. Şu anda gördüğünüz gibi de site büyük bir yeniliğe gitti. Ancak bununla sınırlı değil! TULGAR ismi verilen seri projesine başlanıldı. TULGAR projesi Hackadia tarfından girişeln en büyük proje oldu. TULGAR: Ziga, TULGAR: Algan ve TULGAR: Sedan şu anda geliştirme aşamasında olan projelerdir</p>
                  </div>
               </div>
               <div class="entry" style="backdrop-filter: blur(20px); box-shadow: 0px 0px 2px black; border-radius: 20px;">
                  <div class="title big">2024 Hedeflerimiz</div>
                  <div class="body">
                     <p>Yılın 2. çeyreğinde TULGAR: Ziga, 3. çeyreğinde TULGAR: Algan ve son çeyreğinde TULGAR: Sedan projelerinin çıkarılması planlanıyor. İlk çeyrek bitmeden ise Neuron'un 4.1 günellemesi almasına hazırlanılıyor</p>
                  </div>
               </div>
            </div>
         </div>

      </section>

      <section class="footer" id="footer">

         <div class="home__container container">

            <div class="notch-container" tabindex="0">
               <div class="notch">
                  <div class="content">
                     <div class="left">
                        <div class="title"><img src="assets/img/hackadia.png" alt="" srcset=""></div>
                        <div class="text"></div>
                     </div>
                     <div class="right">

                        Hackadia Yönetim Ekibi
                     
                     </div>
                  </div>
               </div>
            </div>
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