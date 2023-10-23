// Menu dropdown

const linkDrops = document.querySelectorAll('.link-drop');

linkDrops.forEach(function(clickDrop) {
    clickDrop.addEventListener('click', function(dropdown) {
        dropdown.preventDefault(); // Impede o link de redirecionar para #
        const submenu = this.nextElementSibling; //acessar o próximo elemento irmão do elemento atual 
        const arrow = this.querySelector('.arrow-down');

        submenu.style.display = (submenu.style.display === 'block') ? 'none' : 'block';
        arrow.classList.toggle('arrow-up');
    })
});
