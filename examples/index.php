<?php
session_start();
require_once 'lib/AuthSystem.class.php';
$auth = new AuthSystem("localhost", "root", "", "database"); /*host, username, password, database name*/
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Index page / Pagina inicial</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <h1>Sign in Example / Exemplo de Login</h1>

  
  <?php if($auth->isLogged()): /* caso usuario esteja logado */ ?>
  
  <h2>Seja bem vindo <?php $auth->getName(true); ?>!</h2>
  Clique <a href="sair.php">aqui</a> para fazer logout
  
  <?php else: /* caso usuario nao esteja logado */ ?>
  
  <h2>Olá visitante, você não está logado ainda.</h2>
  Faça login clicando <a href="login.php">aqui</a> ou Registre-se clicando <a href="register.php">aqui</a>.
  
  <?php endif; ?>
  

</body>
</html>
