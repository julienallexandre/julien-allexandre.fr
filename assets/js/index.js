/*
    *** SUMMARY ***
    1. Navigation Mobile
 */

/*
    Navigation Mobile
 */
const menuMobile = document.getElementById('menu_mobile');
const menuBar = document.getElementById('menu_bar');

menuMobile.addEventListener('click', function () {
    if (menuBar.style.display === 'block') {
        menuBar.style.display = 'none'
    } else {
        menuBar.style.display = 'block'
    }
});