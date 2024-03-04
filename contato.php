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

    <article class="contact-article box-inline-centered">
        <div class="container box-inline-centered">
            <div class="bg-img">
                <form action="/action_page.php" class="form-login">
                    <h1>Fale conosco</h1>

                    <label for="contact-name"><b>Nome</b></label>
                    <input type="text" placeholder="Seu nome" name="contact-name" required>

                    <label for="email"><b>Email</b></label>
                    <input type="text" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"
                        placeholder="Seu Email" name="email" required>

                    <label for="contact-tel"><b>Telefone</b></label>
                    <input type="number" pattern="\([0-9]{2}\) [0-9]{4}-[0-9]{4}" name="contact-tel" required>

                    <label for="contact-mesage"><b>Deixe sua mensagem</b></label>
                    <textarea id="mensagem" name="mensagem" rows="4" cols="45" required></textarea>

                    <button type="submit" class="button primary-button">Enviar mensagem</button>
                </form>
            </div>
        </div>
    </article>

    <?php
    include "_assets/_includes/footer.php";
    ?>
</body>

</html>