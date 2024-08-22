document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menu-toggle');
    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            const navLinks = document.querySelector('.nav-links');
            if (navLinks) {
                navLinks.classList.toggle('active');
            }
        });
    }
});

