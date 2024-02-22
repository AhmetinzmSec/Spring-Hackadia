// const toggleButton = document.getElementById('toggle-mode');
// const body = document.body;

// toggleButton.addEventListener('click', function() {
//     body.classList.toggle('dark-mode');
// });

const darkModeToggle = document.getElementById('toggle-mode');
const body = document.body;

// Sayfa yüklendiğinde, kullanıcının tercihini kontrol et
document.addEventListener('DOMContentLoaded', function() {
    const darkModeEnabled = localStorage.getItem('darkModeEnabled');

    if (darkModeEnabled === 'true') {
        darkModeToggle.textContent = "☀️";
        body.classList.add('dark-mode');
    }
});

// Karanlık/aydınlık modu değiştirmek için düğmeye tıklandığında
darkModeToggle.addEventListener('click', function() {
    body.classList.toggle('dark-mode');

    // Kullanıcının tercihini yerel depolamada güncelle
    if (body.classList.contains('dark-mode')) {
        localStorage.setItem('darkModeEnabled', 'true');
        darkModeToggle.textContent = "☀️";
    } else {
        darkModeToggle.textContent = "🌑";
        localStorage.setItem('darkModeEnabled', 'false');
    }
});