<header class="header">
    <div class="container">
        <div class="header__box">
            <a href="index.php" class="header__logo-link box-inline-centered">
                <img src="_assets/_media/logo.png" width="200px" height="33px" alt="Tour Flare - Página inicial">
            </a>

            <nav class="header__nav box-inline-centered" aria-label="Navegação principal">
                <ul class="header__nav-navlist box-inline-centered">
                    <!-- Adicionar pseudo elemento no link da pagina ativa via JS -->
                    <li>
                        <a href="index.php" class="nav-link nav-active">Home</a>
                    </li>

                    <li>
                        <a href="about.php" class="nav-link">Empresa</a>
                    </li>

                    <li>
                        <a href="#" class="nav-link link-drop" aria-haspopup="true" aria-expanded="false">
                            Excursões
                            <img class="arrow-menu" src="_assets/_media/icons/seta.png" alt="">
                        </a>
                        <ul class="submenu" aria-label="Submenu de Excursões" role="menu">
                            <li><a href="excursions.php" class="submenu-link">Todas</a></li>
                            <li><a href="excursions.php" class="submenu-link">Praias</a></li>
                            <li><a href="excursions.php" class="submenu-link">Natureza</a></li>
                            <li><a href="excursions.php" class="submenu-link">Resorts</a></li>
                            <li><a href="excursions.php" class="submenu-link">Cidades</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="contato.php" class="nav-link">Contato</a>
                    </li>
                </ul>
            </nav>

            <div class="header__menu-buttons">
                <div class="header__menu-buttons-login">
                    <a href="register.php" class="secondary-button">Cadastre-se</a>

                    <a href="login.php" class="primary-button">Login</a>
                </div>

                <div class="bar-button-box">
                    <button aria-label="Abrir menu lateral" class="bars-button" id="button-side-menu">
                        <img src="_assets/_media/icons/icons8-menu-squared-50.png" width="30px" height="30px" alt="">
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="side-menu" aria-hidden="true">
        <div class="button-close">
            <button class="close-button side-menu__close-button" aria-label="Fechar menu lateral">X</button>
        </div>
        <ul class="navlist-side" role="menu">
            <li>
                <a href="index.php" class="nav-link">Home</a>
            </li>

            <li>
                <a href="about.php" class="nav-link">Empresa</a>
            </li>

            <li>
                <a href="#" class="link-drop-sidemenu nav-link" aria-haspopup="true" aria-expanded="false">
                    Excursões
                    <img class="arrow-menu" src="_assets/_media/icons/seta.png" alt="">
                </a>
                <ul class="submenu side-submenu" aria-label="Submenu de Excursões" role="menu">
                    <li><a href="excursions.php" class="submenu-link">Todas</a></li>
                    <li><a href="excursions.php" class="submenu-link">Praias</a></li>
                    <li><a href="excursions.php" class="submenu-link">Natureza</a></li>
                    <li><a href="excursions.php" class="submenu-link">Resorts</a></li>
                    <li><a href="excursions.php" class="submenu-link">Cidades</a></li>
                </ul>
            </li>

            <li>
                <a href="contato.php" class="nav-link">Contato</a>
            </li>

            <li>
                <a href="register.php" class="nav-link">Cadastre-se</a>
            </li>

            <li>
                <a href="login.php" class="nav-link">Login</a>
            </li>
        </ul>
    </div>
</header>