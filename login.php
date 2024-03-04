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

    <article class="login-article box-inline-centered">
        <div class="container box-inline-centered">
            <div class="bg-img">
                <form action="/action_page.php" class="form-login">
                    <h1>Login</h1>

                    <label for="email"><b>Email</b></label>
                    <input type="text" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" placeholder="Enter Email" name="email" required>

                    <label for="psw"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <button type="submit" class="button primary-button">Login</button>
                </form>
            </div>
        </div>
    </article>

    <?php include "_assets/_includes/footer.php"; ?>
</body>


</html>