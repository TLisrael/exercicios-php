<!DOCTYPE html>

<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Validando Formulário com PHP</title>
<link rel="stylesheet"
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
	integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
	crossorigin="anonymous">
</head>

<body>
<?php 
require_once 'server.php';
?>
	<h2>Formulário de contato</h2>


	<form method="POST" action="">
		<label>Nome: </label> <input type="text" name="nome" id="nome"
			placeholder="Nome Completo" required><br> <br> <label>E-mail </label>
		<input type="text" name="email" id="email"
			placeholder="Seu melhor E-mail" required><br> <br> <label>Assunto: </label>
		<input type="text" id="assunto" name="assunto" placeholder="Assunto da Mensage"
			required>
		<br> <br> <input type="submit" name="addMsgCont" value="Enviar">
		<br><br><input type="reset" name="reset" value="Resetar">
	</form>

</body>
</html>