

//buger toggle header

const header = document.querySelector('header');
const burger = document.querySelector('.burger');

function toggleMenu() {
    burger.addEventListener('click', () => {
        burger.classList.toggle('close_burger')
        header.classList.toggle("show_nav");
    });
}

toggleMenu();

// btn back to top
const btnBackToTop = document.getElementById('myBtn');

window.onscroll = function () { scrollFunction() };

// btn appear after some scrolling
function scrollFunction() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        btnBackToTop.style.display = "block";
    } else {
        btnBackToTop.style.display = 'none';
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}