<?php
// Iniciando conexão com banco de dados utilizando PDO
$host = 'localhost';
$user = 'root';
$pass = '120317';
$dbname = 'cadastro';
$port = '3306';
try {
    // Conexão com a porta
    // $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
    // Conexão sem porta
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    echo "Funcionando!";
} catch (PDOException $err) {
    echo $err->getMessage();
}

// $filterPadrao = FILTER_DEFAULT;
$dadosForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if (!!empty($dadosForm['AddMsgCont'])) {
//     var_dump($dadosForm);

    $query_contato = "INSERT INTO contatos (nome, email, assunto) VALUES (:nome, :email, :assunto)";
    $add_contato = $conn->prepare($query_contato);
    $add_contato->bindParam(':nome', $dadosForm['nome']);
    $add_contato->bindParam(':email', $dadosForm['email']);
    $add_contato->bindParam(':assunto', $dadosForm['assunto']);

    $add_contato->execute();

    if ($add_contato->rowCount()) {
        echo "<p style='color:green;'>Mensagem enviada com sucesso!</p>";
    } else {
        echo "<p style='color:#F00;'>Erro: Mensagem não enviada</p>";
    }
}

?>