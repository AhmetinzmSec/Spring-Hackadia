window.addEventListener('scroll', function () {
   const navbar = document.querySelector('.nav'); // Navbar'ı seç
   const darkSection = document.querySelector('#target'); // Karanlık bölümü seç

   const footer = document.querySelector('.footer__floating'); // Navbar'ı seç
   const darkfooter = document.querySelector('#contact'); // Karanlık bölümü seç

   const darkSectionOffset = darkSection.offsetTop; // Karanlık bölümün sayfa başlangıcından itibaren yüksekliğini al
   const darkSectionHeight = darkSection.offsetHeight; // Karanlık bölümün yüksekliğini al
   const pageScroll = window.pageYOffset; // Sayfanın şu anki scroll pozisyonunu al

   // Eğer sayfa scroll'u, karanlık bölümün başlangıcına ulaştıysa veya içindeyse
   if (pageScroll >= darkSectionOffset && pageScroll < (darkSectionOffset + darkSectionHeight)) {
      navbar.classList.add('dark-mode'); // Navbar'a 'dark-mode' class'ını ekle
   } else {
      navbar.classList.remove('dark-mode'); // Diğer durumlarda 'dark-mode' class'ını kaldır
   }

   // Eğer sayfa scroll'u, karanlık bölümün başlangıcına ulaştıysa veya içindeyse
   if (pageScroll >= darkSectionOffset && pageScroll < (darkSectionOffset + darkSectionHeight)) {
      footer.classList.add('dark-mode'); // Navbar'a 'dark-mode' class'ını ekle
   } else {
      footer.classList.remove('dark-mode'); // Diğer durumlarda 'dark-mode' class'ını kaldır
   }
});