<!DOCTYPE html>
<html>

<head>
    <title>Blog sem Painel Administrativo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">

        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Será que isso funciona?</h4>
            <p>Isso é um teste de função de contador de tempo!</p>
            <hr>
            <?php
            require_once 'config.php';
            echo ContandoTempo('2023-02-15 11:24') . '; <p class="mb-0">Se você estiver vendo essa mensagem, é pq funcionou!</p>';
            ?>
        </div>
    </div>
</body>

</html>