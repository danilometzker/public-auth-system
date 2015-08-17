<?php
require_once 'lib/AuthSystem.class.php';
$auth = new AuthSystem("localhost", "root", "", "database"); /*host, username, password, database name*/

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $mode = (!isset($_POST['cookie_on'])) ? false : true;
      
    $login = $auth->userLogin($username, $password, $mode);
    if($login){
      echo "<script>alert(\"Logado com sucesso!\"); window.location.href = 'index.php';</script>";
    }else{
      echo "<script>alert(\"Dados incorretos!\");</script>";
    }
      
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Sign in Example / Exemplo de Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <h1>Sign in Example / Exemplo de Login</h1>
  
  <form method="post">
    <input type="text" placeholder="Insira seu username" required name="username">
    <input type="password" placeholder="Insira sua senha" required name="password">
    <input type="checkbox" name="cookie_on" id="cookie_on"> <label for="cookie_on">Continuar conectado</label>
    
    <button type="submit">Logar-se</button>
  </form>

</body>
</html>
