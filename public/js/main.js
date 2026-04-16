// Main JS for Plastic Association Website

document.addEventListener('DOMContentLoaded', () => {
    console.log('Main association site loaded');

    // Sticky Header logic
    const header = document.querySelector('.main-header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            header.style.padding = '10px 0';
            header.style.background = 'rgba(255, 255, 255, 0.95)';
        } else {
            header.style.padding = '15px 0';
            header.style.background = '#ffffff';
        }
    });

    // Mobile menu placeholder (if implemented later)
});
