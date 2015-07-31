<?php $auth = new AuthSystem("localhost", "root", "", "usuarios"); /*host, username, password, database name*/ ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Sign in Example / Exemplo de Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <h1>Sign in Example / Exemplo de Login</h1>
  
  <?php if($auth->isLogged()): /* caso usuario esteja logado */?>
  
  <h1>Seja bem vindo <?php $auth->getName(true); ?>!</h1>
  
  <?php else: /* caso usuario nao esteja logado */ ?>
  
  <h1>Olá visitante, você não está logado ainda.</h1>
  Faça login clicando <a href="login.php">aqui</a> ou Registre-se clicando <a href="register.php">aqui</a>.
  
  <?php endif; ?>
  

</body>
</html>
