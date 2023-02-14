<?php
require_once "vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

/**
 * Acesso ao banco de dados
 */
$host = 'localhost';
$user = getenv('user');
$pass = getenv('pass');
$dbname = 'cadastro';
$port = '3306';

/*
 *
 * Tenta conexão com banco de dados, caso seja um sucesso, retorna que está funcionando
 * Caso contrário, retorna o erro que foi encontrado.
 *
 */
try {
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    // echo "Funcionando!";
} catch (PDOException $err) {
    echo $err->getMessage();
}

$dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if (! empty($dadosForm['AdicionandoNoDB'])) {
    // var_dump($dadosForm);

    // Validação de campos
    if (empty($dadosForm['nome'])) {
        echo "<p style='color:red;'>Nome é um campo obrigatório</p>";
        
    }elseif (empty($dadosForm['email'])){
        echo "<p style='color:red;'>Email é um campo obrigatório</p>";
        
        
    }else {

        // Se os dados do formulario nao forem vazios, adiciona cada string em sua devida coluna
        $query = "INSERT INTO contatos (nome, email, assunto) VALUES (:nome, :email, :assunto)";
        $contato = $conn->prepare($query);
        $contato->bindParam(':nome', $dadosForm['nome']);
        $contato->bindParam(':email', $dadosForm['email']);
        $contato->bindParam(':assunto', $dadosForm['assunto']);

        $contato->execute();

        /*
         * Checa se houve inserção e retorna mensagem de Sucesso
         */
        if ($contato->rowCount()) {
            echo "<p style='color:green;'>Mensagem enviada com sucesso!</p>";
        } else {
            echo "<p style='color:red;'>Erro</p>";
        }
    }
}

?>