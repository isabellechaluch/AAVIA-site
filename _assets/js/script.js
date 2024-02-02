// Header scroll
const header = document.querySelector(".header");
const topBar = document.querySelector(".top-menu");

if (window.innerWidth > 570) {
  document.addEventListener("scroll", () => {
    if (window.scrollY >= 100) {
      header.classList.add("fixed");
      topBar.style = "margin-top: -31px";
    } else if (window.scrollY === 0) {
      header.classList.remove("fixed");
      topBar.style = "margin-top: 0";
    }
  });
}

// Sidebar
let barButton = document.querySelector('.bar-button-box');
let closeButton = document.querySelector('.button-close');
let sideMenu = document.querySelector('.side-menu');
let link = document.querySelector('.link-drop-sidemenu');

function openMenu() {
    sideMenu.style.width = '17rem';
}

function closeMenu () {
    sideMenu.style.width = '0px';
}

// Menu dropdown
const linkDrops = document.querySelectorAll('.link-drop-sidemenu');

linkDrops.forEach(function (clickDrop) {
    clickDrop.addEventListener('click', function (dropdown) {
        dropdown.preventDefault(); // Impede o link de redirecionar para #
        const submenu = this.nextElementSibling; //acessar o próximo elemento irmão do elemento atual 
        const arrow = this.querySelector('.arrow-menu');

        submenu.style.display = (submenu.style.display === 'block') ? 'none' : 'block';
        arrow.classList.toggle('arrow-up');
    })
});

barButton.addEventListener('click', openMenu);
closeButton.addEventListener('click', closeMenu);

// Make the cards draggable
function makeCardsDraggable() {
  const cards = document.querySelectorAll('.tour-card');
  
  cards.forEach(card => {
    card.draggable = true;
    
    card.addEventListener('dragstart', () => {
      card.classList.add('dragging');
    });

    card.addEventListener('dragend', () => {
      card.classList.remove('dragging');
    });
  });

  const containers = document.querySelectorAll('.popular-tours');

  containers.forEach(container => {
    container.addEventListener('dragover', e => {
      e.preventDefault();
      const afterElement = getDragAfterElement(container, e.clientY);
      const dragging = document.querySelector('.dragging');
      if (afterElement == null) {
        container.appendChild(dragging);
      } else {
        container.insertBefore(dragging, afterElement);
      }
    });
  });

  function getDragAfterElement(container, y) {
    const draggableElements = [...container.querySelectorAll('.tour-card:not(.dragging)')];

    return draggableElements.reduce((closest, child) => {
      const box = child.getBoundingClientRect();
      const offset = y - box.top - box.height / 2;
      if (offset < 0 && offset > closest.offset) {
        return { offset: offset, element: child };
      } else {
        return closest;
      }
    }, { offset: Number.NEGATIVE_INFINITY }).element;
  }
}

// Chame a função para tornar os cards arrastáveis quando o conteúdo HTML for carregado
document.addEventListener('DOMContentLoaded', makeCardsDraggable);
