document.addEventListener("DOMContentLoaded", function() {
    const burger = document.getElementById('burger');
    const mainmenu = document.getElementById('mainmenu');

    burger.addEventListener('click', function() {
        mainmenu.classList.toggle('open');
        burger.classList.toggle('open');
    });
});