// Sidebar
let barButton = document.querySelector('.bar-button-box');
let closeButton = document.querySelector('.side-menu__close-button');
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


// Pop-ups excursion page

function openCheckPopUp() {
  document.getElementById('pop-up-check').style.display = 'block';
}

function closeCheckPopUp() {
  document.getElementById('pop-up-check').style.display = 'none';
}

function openConfirmPopUp() {
  document.getElementById('pop-up-confirm').style.display = 'block';
}

// Função para conferir o agendamento
function checkAppointment() {

  openConfirmPopUp();

  var selectedDate = document.getElementById('dates').value;
  var numParticipants = document.getElementById('participants').value;
  
  // Aqui você pode adicionar lógica para processar o agendamento
  console.log('Data selecionada:', selectedDate);
  console.log('Número de participantes:', numParticipants);
}

// Chame a função para tornar os cards arrastáveis quando o conteúdo HTML for carregado
document.addEventListener('DOMContentLoaded', makeCardsDraggable);
document.querySelector(".excursion-box__button").addEventListener('click', openCheckPopUp);
document.querySelector(".pop-up-check__box__close-button").addEventListener('click', closeCheckPopUp);
document.querySelector(".pop-up-confirm__send-button").addEventListener('click', checkAppointment);
