<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    include "_assets/_includes/head.php";
    ?>
</head>

<body>
    <?php
    include "_assets/_includes/header.php";
    ?>

    <article class="breadcrumb-article">
        <div class="container">
            breadcrumb
        </div>
    </article>

    <article class="picture-info-excursion">
        <div class="container">
            <div class="excursion-box">
                <div class="images-excursion">
                    <div class="little-images">
                        <img src="_assets/_media/praia_fundo.jpg" alt="">

                        <img src="_assets/_media/back-excursoes.jpeg" alt="">

                        <img src="_assets/_media/fundo-cards.jpg" alt="">
                    </div>

                    <div class="selected-img">
                        <img src="_assets/_media/praia_fundo.jpg" alt="">
                    </div>
                </div>

                <div class="info-excursion">
                    <h2>Nome da excursão</h2>

                    <div class="resume-excursion">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, porro explicabo consequatur
                            quasi error, beatae fugiat illum vitae sapiente quibusdam nihil recusandae ab odio, quo in
                            nulla quisquam officiis maiores. Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Mollitia obcaecati praesentium delectus, placeat enim ex dolores corporis eum quaerat,
                            explicabo, alias sint quos. Odit magni maxime quae cumque molestias vel. Lorem ipsum dolor
                            sit amet, consectetur adipisicing elit. Doloremque deserunt ea inventore cupiditate,
                            similique nobis? Consequatur voluptatum dolores perspiciatis veniam, voluptatem laboriosam
                            nam tempora assumenda eos ipsa deserunt, non quam.</p>
                    </div>

                    <div class="price-time-excursion">
                        <span class="time-excursion">Duration</span>
                        <span class="price-excursion">Price</span>
                    </div>

                    <button class="button primary-button excursion-box__button">Verificar
                        disponibilidade</button>
                    <!-- Abrir uma tela, tipo um pop up com as datas disponíveis e a opção de reservar -->
                </div>
            </div>
        </div>
    </article>

    <div id="pop-up-check" class="pop-up-check">
        <div class="pop-up-check__box">
            <button class="close-button pop-up-check__box__close-button">X</button>
            <form action="" class="pop-up-check__box__form">
                <h2>Nome da Excursão</h2>

                <label for="dates">Selecione a data:</label>
                <select id="dates">
                    <option value="2024-03-10">10 de Março de 2024</option>
                    <option value="2024-03-15">15 de Março de 2024</option>
                    <option value="2024-03-20">20 de Março de 2024</option>
                    <!-- Adicione mais opções de datas conforme necessário -->
                </select>
                <br>
                <label for="participants">Número de Participantes:</label>
                <input type="number" id="participants" min="1" max="10">
                <br><br>
                <button class="button primary-button">Conferir</button>
            </form>
        </div>
    </div>

    <div id="pop-up-confirm" class="pop-up-confirm">
        <div class="pop-up-confirm__box">
            <button class="pop-up-confirm__box__close-button">X</button>
            <h2 id="excursionName">Nome da Excursão</h2>
            <label for="dates">Selecione a data:</label>
            <select id="dates">
                <option value="2024-03-10">10 de Março de 2024</option>
                <option value="2024-03-15">15 de Março de 2024</option>
                <option value="2024-03-20">20 de Março de 2024</option>
                <!-- Adicione mais opções de datas conforme necessário -->
            </select>
            <br>
            <label for="participants">Número de Participantes:</label>
            <input type="number" id="participants" min="1" max="10">
            <br><br>
            <button class="button primary-button pop-up-confirm__send-button">Enviar</button>
        </div>
    </div>

    <article class="excursion-article">
        <div class="container">
            <div class="general-excursion">
                <h2>Visão Geral</h2>

                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad saepe laudantium nam, asperiores
                    voluptatem inventore dignissimos illo iusto vel reiciendis optio. Magni necessitatibus atque
                    tempora. Doloribus optio neque blanditiis ab! Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Iste adipisci iure praesentium corporis quo, quibusdam minus at ab qui soluta ut cumque
                    sapiente impedit assumenda corrupti consectetur eius veritatis facere. Lorem ipsum dolor, sit amet
                    consectetur adipisicing elit. Quisquam pariatur id officia dolor quod illum nobis aspernatur tempore
                    autem adipisci, perferendis explicabo maiores error, incidunt nulla voluptas? Molestiae, sapiente
                    ipsum. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis ex in reprehenderit
                    cumque inventore illo dolores temporibus iure ea tempore neque dolore praesentium assumenda, ratione
                    nemo ipsum consectetur explicabo voluptas!</p>
            </div>
        </div>
    </article>

    <article class="excursion-article">
        <div class="container">
            <div class="includes-route-box">
                <div class="route-excursion">
                    <h2>Trajeto</h2>

                    <ul>
                        <li>Vila xxxx</li>
                        <li>Almoço em txxxxx</li>
                        <li>Passeio em tal lugar</li>
                        <li>Passeio xxxxx</li>
                    </ul>
                </div>

                <div class="includes-excursion">
                    <h2>Inclusos</h2>

                    <ul class="includes-list">
                        <li>Passeio em tal lugar</li>
                        <li>Almoço em tal restaurante</li>
                        <li>Passeio em tal lugar</li>
                        <li>Passeio em tal lugar</li>
                    </ul>
                </div>
            </div>
        </div>
    </article>

    <article class="excursion-article">
        <div class="container">
            <div class="cancel-excursion">
                <h2>Política de cancelamento</h2>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quidem cumque itaque earum
                    assumenda nulla ratione rerum explicabo dignissimos commodi a, quod debitis tempora, error laborum
                    quam, non quia eius.</p>
            </div>
        </div>
    </article>

    <?php
    include "_assets/_includes/footer.php";
    ?>
</body>

</html>