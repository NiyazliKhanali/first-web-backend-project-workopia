document.querySelector('#hamburger').addEventListener('click', function() {
    const mobileMenu = document.querySelector('#mobile-menu');
    mobileMenu.classList.toggle('hidden');
    mobileMenu.classList.toggle('block');
})