<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    include "_assets/_includes/head.php";
    ?>
</head>

<body>
    <?php include "_assets/_includes/header.php"; ?>

    <article>
        <div class="background-page background-excursions">
            <div class="container">
                <div class="title-page">
                    <h1>Excursões</h1>
                </div>
            </div>
        </div>
    </article>

    <article class="filter-article">
        <div class="container">
            <div class="filters-box">
                <form method="POST" class="filters-form">
                    <div class="filter-title">
                        <h2>Filtros</h2>
                    </div>

                    <div class="time-filter">
                        <select name="time-filter" id="time-filter">
                            <option value="filter1-all">Todos os tempos</option>
                            <option value="filter1-cat1">Day-use</option>
                            <option value="filter1-cat2">2-4 dias</option>
                            <option value="filter1-cat3">5 dias ou mais</option>
                        </select>
                    </div>

                    <div class="price-filter">
                        <select name="price-filter" id="price-filter">
                            <option value="filter2-all">Todos os valores</option>
                            <option value="filter2-cat1">Até 200 reais</option>
                            <option value="filter2-cat2">Até 500 reais</option>
                            <option value="filter2-cat3">Até 1000 reais</option>
                            <option value="filter2-cat4">Até 2000 reais</option>
                            <option value="filter2-cat5">Acima de 2000 reais</option>
                        </select>
                    </div>

                    <div class="category-filter">
                        <select name="category-filter" id="category-filter">
                            <option value="filter3-all">Todas as categorias</option>
                            <option value="filter3-cat1">Praias</option>
                            <option value="filter3-cat2">Natureza</option>
                            <option value="filter3-cat3">Resorts</option>
                        </select>
                    </div>

                    <div class="filter-buttons">
                        <input type="submit" value="Filtrar" class="primary-button">
                        <input type="reset" value="Apagar Filtros" class="secondary-button">
                    </div>
                </form>

                <div class="search-box">
                    <form action="GET" class="form-search">
                        <input type="text" class="search" placeholder="Digite o produto...">
                        <div class="search-button-box">
                            <button type="button" class="search-button" id="search-button" aria-label="Procurar">
                                <img src="_assets/_media/search-icon.png" alt="Procurar">
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </article>

    <article class="excursions-cards-article">
        <div class="container">
            <div class="excursion-card">
                <div class="img-excursion-box">
                    <img src="_assets/_media/back-excursoes.jpeg" alt="">
                </div>

                <div class="text-excursion">
                    <h2>Title</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus animi ullam quos officia
                        nemo ad laudantium ducimus hic eius earum, voluptate expedita aperiam, optio nulla?
                        Aspernatur atque veniam ipsum rerum.</p>

                    <div class="info">
                        <span class="info-duration">
                            <img src="_assets/_media/duration.png" alt="">
                            Duration
                        </span>
                        <span class="info-price">Preço</span>
                    </div>
                </div>
            </div>

            <div class="excursion-card">
                <div class="img-excursion-box">
                    <img src="_assets/_media/back-excursoes.jpeg" alt="">
                </div>

                <div class="text-excursion">
                    <h2>Title</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Delectus animi ullam quos officia
                        nemo ad laudantium ducimus hic eius earum, voluptate expedita aperiam, optio nulla?
                        Aspernatur atque veniam ipsum rerum.</p>

                    <div class="info">
                        <span class="info-duration">
                            <img src="_assets/_media/duration.png" alt="">
                            Duration
                        </span>
                        <span class="info-price">Preço</span>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <?php include "_assets/_includes/footer.php"; ?>
</body>


</html>