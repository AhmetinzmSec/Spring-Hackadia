const darkModeToggle = document.getElementById('toggle-mode');
const body = document.body;

// Sayfa yüklendiğinde, kullanıcının tercihini kontrol et
document.addEventListener('DOMContentLoaded', function () {
    const darkModeEnabled = localStorage.getItem('darkModeEnabled');

    // Kullanıcının tercihini yerel depolamada ve arayüzde güncelle
    if (darkModeEnabled === 'true') {
        enableDarkMode();
    } else {
        disableDarkMode();
    }

    // Sistem temasını takip et
    const prefersDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
    
    // Tema değişikliklerini dinle
    prefersDarkMode.addListener(handleSystemThemeChange);
    
    // İlk kontrol
    handleSystemThemeChange(prefersDarkMode);
});

// Karanlık/aydınlık modu değiştirmek için düğmeye tıklandığında
darkModeToggle.addEventListener('click', function () {
    if (body.classList.contains('dark-mode')) {
        disableDarkMode();
    } else {
        enableDarkMode();
    }
});

// Sistem teması değiştiğinde çağrılacak işlev
function handleSystemThemeChange(event) {
    if (event.matches) {
        enableDarkMode();
    } else {
        disableDarkMode();
    }
}

// Karanlık modu etkinleştiren yardımcı işlev
function enableDarkMode() {
    body.classList.add('dark-mode');
    darkModeToggle.textContent = "☀️";
    localStorage.setItem('darkModeEnabled', 'true');
}

// Aydınlık modu etkinleştiren yardımcı işlev
function disableDarkMode() {
    body.classList.remove('dark-mode');
    darkModeToggle.textContent = "🌑";
    localStorage.setItem('darkModeEnabled', 'false');
}
