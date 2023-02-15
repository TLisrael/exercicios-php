<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Validando Formulário com PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Formulário de contato</h2>


    <div class="container">
        <form method="POST" action="">
            <label>Nome: </label>
            <input type="text" name="nome" id="nome" placeholder="Nome Completo">
            <br>
            <br>
            <label>E-mail </label>

            <input type="text" name="email" id="email" placeholder="Seu melhor E-mail">
            <br>
            <br>
            <label>Assunto: </label>
            <input type="text" id="assunto" name="assunto" placeholder="Assunto da Mensagem" required>
            <br>
            <br>
            <div class="buttons">
                <input class="button" type="submit" name="AdicionandoNoDB" value="Enviar"> <br>
                <br>
                <input class="button" type="reset" name="reset" value="Resetar">
            </div>
            <?php
            require_once 'server.php';
            ?>
        </form>
    </div>

</body>

</html>