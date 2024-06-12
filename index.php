<?php
include ('_assets/_includes/head.php');
?>

<body>
    <?php
    include ('_assets/_includes/header.php');
    ?>
    <main class="main-index">
        <article class="call-article">
            <!-- Implementar carrosel com React -->
            <!-- <div id="carouselExampleCaptions" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagens/folhas_g_resized.jpg" class="d-block w-100" alt="folhas verdes">
                        <div class="carousel-caption d-md-block chamada">
                            <h5>Guia de plantas</h5>
                            <p>Guia completo de todas as plantas.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imagens/casamento_g_resized.jpg" class="d-block w-100"
                            alt="maos assinando papel com rosas brancas ao fundo">
                        <div class="carousel-caption d-md-block chamada">
                            <h5>Decorações</h5>
                            <p>Dicas para decoração de casamentos.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="imagens/rosa_g_resized.jpg" class="d-block w-100" alt="rosa vermelha">
                        <div class="carousel-caption d-md-block chamada">
                            <h5>Ideias de flores</h5>
                            <p>Inpirações e ideias de flores.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div> -->
        </article>

        <article class="intro-article">
            <div class="container">
                <section class="box-column intro-article__section">
                    <h2>Bem vindo(a) à Tour Flare!</h2>

                    <div class="intro-article__section-text">
                        <p>
                            Com mais de 25 anos de experiência, somos a escolha ideal para viagens excepcionais.
                            Personalizamos excursões para todos os gostos, mantendo preços acessíveis, construindo uma
                            comunidade de entusiastas que confiam em nós para realizar suas explorações. Ao se
                            cadastrar,
                            você ganha acesso a roteiros detalhados, atendendo desde amantes de aventura até buscadores
                            de
                            relaxamento à beira-mar.
                            <br>
                            <br>
                            Não perca a oportunidade de começar sua própria jornada conosco. Registre-se agora e
                            mergulhe em
                            uma variedade de descobertas. Nossa equipe de especialistas está pronta para criar uma
                            experiência emocionante, proporcionando lembranças duradouras enquanto você explora locais
                            deslumbrantes e se conecta com diferentes culturas, tornando cada momento memorável. Sua
                            próxima
                            grande aventura está a um clique de distância!
                        </p>
                    </div>

                </section>
            </div>
        </article>

        <article class="features-article">
            <div class="container">
                <section class="features-section">
                    <div class="features-section__iconbox box-column">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" aria-label="Ícone de excursões">
                            <path
                                d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm306.7 69.1L162.4 380.6c-19.4 7.5-38.5-11.6-31-31l55.5-144.3c3.3-8.5 9.9-15.1 18.4-18.4l144.3-55.5c19.4-7.5 38.5 11.6 31 31L325.1 306.7c-3.2 8.5-9.9 15.1-18.4 18.4zM288 256a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z" />
                        </svg>

                        <h2 class="features-section__iconbox-title">Excursões</h2>

                        <p class="features-section__iconbox-text">Explore o mundo com nossas emocionantes excursões!
                            Descubra destinos
                            incríveis, faça novos amigos
                            e crie memórias inesquecíveis. Reserve agora e embarque na aventura dos seus sonhos.</p>
                    </div>

                    <div class="features-section__iconbox box-column">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                            aria-label="Ícone de preços acessíveis">
                            <path
                                d="M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zm64 320H64V320c35.3 0 64 28.7 64 64zM64 192V128h64c0 35.3-28.7 64-64 64zM448 384c0-35.3 28.7-64 64-64v64H448zm64-192c-35.3 0-64-28.7-64-64h64v64zM288 160a96 96 0 1 1 0 192 96 96 0 1 1 0-192z" />
                        </svg>

                        <h2 class="features-section__iconbox-title">Preços acessíveis</h2>

                        <p class="features-section__iconbox-text">Viaje com facilidade! Nossas emocionantes excursões
                            oferecem
                            experiências
                            incríveis a preços
                            acessíveis. Descubra o mundo sem quebrar o banco. Reserve agora e comece a explorar!</p>
                    </div>

                    <div class="features-section__iconbox box-column">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            aria-label="Ícone de viagens o ano todo">
                            <path
                                d="M176 56V96H336V56c0-4.4-3.6-8-8-8H184c-4.4 0-8 3.6-8 8zM128 96V56c0-30.9 25.1-56 56-56H328c30.9 0 56 25.1 56 56V96v32V480H128V128 96zM64 96H96V480H64c-35.3 0-64-28.7-64-64V160c0-35.3 28.7-64 64-64zM448 480H416V96h32c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64z" />
                        </svg>

                        <h2 class="features-section__iconbox-title">Viagens o ano todo</h2>

                        <p class="features-section__iconbox-text">Aventuras o ano todo, a qualquer momento! Com nossas
                            excursões, você
                            pode
                            explorar destinos incríveis em qualquer época do ano! Fale conosco agora para viajar quando
                            e
                            onde quiser!</p>
                    </div>
                </section>
            </div>
        </article>


        <!-- Tornar os cards arrastáveis -->
        <article class="travels">
            <div class="container">
                <section class="travels__section">
                    <h1 class="title travels__title">Nossas excursões</h1>

                    <div class="box-inline-centered travel__cards-box">

                        <div class="travel__card nature-card">
                            <a href="natureza.php" aria-label="Excursão na Natureza">
                                <span class="card-label">Natureza</span>
                            </a>
                        </div>

                        <div class="travel__card resort-card">
                            <a href="resorts.php" aria-label="Excursão no Resort">
                                <span class="card-label">Resort</span>
                            </a>
                        </div>

                        <div class="travel__card city-card">
                            <a href="cidades.php" aria-label="Excursão na Cidade">
                                <span class="card-label">Cidade</span>
                            </a>
                        </div>

                        <div class="travel__card beach-card">
                            <a href="praias.php" aria-label="Excursão na Praia">
                                <span class="card-label">Praia</span>
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </article>

        <article class="video-article">
            <div class="container">
                <div class="video-section">
                    <div class="video-section__box">
                        <div class="video-section__box-text">
                            <h2>Descubra Aventuras Incríveis!</h2>
                            <p>Junte-se a nós para explorar os destinos mais emocionantes ao redor do mundo. De
                                mergulhos em recifes exuberantes a caminhadas por trilhas selvagens, nossas excursões
                                oferecem experiências inesquecíveis para os amantes da aventura.
                            </p>

                            <a href="" class="primary-button">Fazer login</a>
                        </div>
                    </div>
                    <div class="video-section__box">
                        <video width="640" height="360" controls>
                            <source src="https://videos.pexels.com/video-files/3135808/3135808-sd_640_360_24fps.mp4"
                                type="video/mp4">
                            Seu navegador não suporta o elemento de vídeo.
                        </video>
                    </div>

                </div>
            </div>
        </article>

        <article class="review-article">
            <div class="container">
                <section class="reviews-section">
                    <div class="title-reviews">
                        <h1>Veja as avaliações dos nossos clientes!</h1>
                    </div>

                    <div class="reviews-container">
                        <div class="box-column review-box">
                            <img src="_assets/_media/pexels-spencer-selover-428328.jpg" alt="Foto usuário">

                            <h3>Carlos Eduardo</h3>

                            <p class="review-classification">⭐⭐⭐⭐⭐</p>

                            <p>"Minha experiência com as excursões deste site foi simplesmente incrível! Os preços
                                acessíveis
                                tornaram possível explorar destinos maravilhosos sem esvaziar minha carteira. Além
                                disso, a
                                variedade de opções durante o ano todo me deu a flexibilidade de viajar quando quisesse.
                                Mal
                                posso esperar pela próxima aventura!"</p>
                        </div>

                        <div class="box-column review-box">
                            <img src="_assets/_media/pexels-kamunya-18153185.jpg" alt="Foto usuário">

                            <h3>Amanda Ferreira</h3>

                            <p class="review-classification">⭐⭐⭐⭐⭐</p>

                            <p>"Eu não poderia estar mais satisfeita com as excursões oferecidas por este site. Os
                                preços
                                acessíveis tornaram o sonho de viajar realidade, e a disponibilidade o ano todo garantiu
                                que
                                eu
                                pudesse escolher o momento perfeito para minha viagem. Recomendo a todos que buscam
                                aventuras
                                memoráveis!"</p>
                        </div>

                        <div class="box-column review-box">
                            <img src="_assets/_media/pexels-mwabonje-ringa-1820559.jpg" alt="Foto usuário">

                            <h3>Luiza Medeiros</h3>

                            <p>⭐⭐⭐⭐⭐</p>

                            <p>"Estou encantada com as excursões oferecidas por este site. Os preços acessíveis me
                                permitiram
                                realizar viagens que nunca pensei serem possíveis. E a possibilidade de viajar durante o
                                ano
                                todo torna essa plataforma simplesmente perfeita para qualquer amante de viagens. Mal
                                posso
                                esperar para a próxima aventura!" </p>
                        </div>

                        <div class="box-column review-box">
                            <img src="_assets/_media/pexels-atanasio-andrew-18173196.jpg" alt="Foto usuário">

                            <h3>Samanta Souza</h3>

                            <p>⭐⭐⭐⭐⭐</p>

                            <p>"Esta plataforma de excursões é simplesmente incrível! Os preços são extremamente
                                acessíveis,
                                permitindo que eu explore o mundo sem preocupações financeiras. Além disso, a
                                disponibilidade
                                durante todo o ano tornou possível planejar viagens com total flexibilidade. Não posso
                                esperar
                                para continuar explorando novos destinos com eles!" </p>
                        </div>
                    </div>
                </section>
            </div>
        </article>
    </main>

    <?php
    include ('_assets/_includes/footer.php')
        ?>
</body>

</html>