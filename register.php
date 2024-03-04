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

    <article class="register-article box-inline-centered">
        <div class="container box-inline-centered">
            <div class="bg-img">
                <form action="/action_page.php" class="form-login">
                    <h1>Cadastre-se</h1>

                    <label for="full-name"><b>Nome completo</b></label>
                    <input type="text" placeholder="Insira seu nome completo" name="full-name" required>

                    <label for="birth-date"><b>Data de nascimento</b></label>
                    <input type="date" name="birth-date" required>

                    <label for="user-tel"><b>Telefone</b></label>
                    <input type="number" pattern="\([0-9]{2}\) [0-9]{4}-[0-9]{4}" name="user-tel" required>

                    <label for="user-adress"><b>Endereço</b></label>
                    <input type="text" placeholder="Rua das Flores, 000, Cidade - Sigla Estado" name="user-adress" required>

                    <label for="email"><b>Email</b></label>
                    <input type="text" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" placeholder="Seu Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Digite sua senha" name="psw" required>

                    <label for="psw-repeat"><b>Repeat Password</b></label>
                    <input type="password" placeholder="Repita a senha" name="psw-repeat" required>

                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Lembrar minha senha
                    </label>

                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.
                    </p>

                    <button type="submit" class="button primary-button">Cadastrar</button>
                </form>
            </div>
        </div>
    </article>

    <?php include "_assets/_includes/footer.php"; ?>
</body>


</html>