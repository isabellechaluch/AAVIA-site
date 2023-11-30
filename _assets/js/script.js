// Header scroll
const header = document.querySelector(".header");
const topBar = document.querySelector(".top-menu");

document.addEventListener("scroll", () => {
  if (window.scrollY >= 100) {
    header.classList.add("fixed");
    topBar.style = "margin-top: -31px";
  } else if (window.scrollY === 0) {
    header.classList.remove("fixed");
    topBar.style = "margin-top: 0";
  }
});

// Menu dropdown
const linkDrops = document.querySelectorAll('.link-drop');

linkDrops.forEach(function (clickDrop) {
    clickDrop.addEventListener('click', function (dropdown) {
        dropdown.preventDefault(); // Impede o link de redirecionar para #
        const submenu = this.nextElementSibling; //acessar o próximo elemento irmão do elemento atual 
        const arrow = this.querySelector('.arrow-down');

        submenu.style.display = (submenu.style.display === 'block') ? 'none' : 'block';
        arrow.classList.toggle('arrow-up');
    })
});

// Sidebar
let barButton = document.querySelector('.bar-button-box');
let closeButton = document.querySelector('.button-close');
let sideMenu = document.querySelector('.side-menu');

function openMenu() {
    sideMenu.style.width = '17rem';
}

function closeMenu () {
    sideMenu.style.width = '0px';
}

barButton.addEventListener('click', openMenu);
closeButton.addEventListener('click', closeMenu);
