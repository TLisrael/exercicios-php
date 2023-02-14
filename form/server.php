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
 *  Tenta conexão com banco de dados, caso seja um sucesso, retorna que está funcionando
 *  Caso contrário, retorna o erro que foi encontrado.
 * 
 */
try {
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    echo "Funcionando!";
} catch (PDOException $err) {
    echo $err->getMessage();
}


/**

 * 
 * Puxa os dados de todos os inputs com o metodo POST, se os dados do formulário
 * não estiverem vazios, ele insere nome, email e assunto no banco de dados criado previamente
 * 
 */
$dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if (!!empty($dadosForm['AddMsgCont'])) {

    $query_contato = "INSERT INTO contatos (nome, email, assunto) VALUES (:nome, :email, :assunto)";
    $add_contato = $conn->prepare($query_contato);
    $add_contato->bindParam(':nome', $dadosForm['nome'], PDO::PARAM_STR);
    $add_contato->bindParam(':email', $dadosForm['email'], PDO::PARAM_STR);
    $add_contato->bindParam(':assunto', $dadosForm['assunto'], PDO::PARAM_STR);

    $add_contato->execute();

    /*
     * Checa se houve inserção e retorna mensagem de Suc
     */
    if ($add_contato->rowCount()) {
        echo "<p style='color:green;'>Mensagem enviada com sucesso!</p>";
    } else {
        echo "<p style='color:#F00;'>Erro: Mensagem não enviada</p>";
    }
}

?>