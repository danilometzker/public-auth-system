<?php
require_once 'lib/AuthSystem.class.php';
$auth = new AuthSystem("localhost", "root", "", "database"); /*host, username, password, database name*/
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Register Example / Exemplo de Registro</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <h1>Register Example / Exemplo de Registro</h1>
  
  <?php
  
  if(isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm_password'])){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    if($password == $confirm_password){
      
      $register = $auth->userRegister($email, $username, $password);
      
      if($register){
        echo "<script>alert(\"Registrado com sucesso!\"); window.location.href = 'login.php';</script>";
      }else{
        echo "<script>alert(\"Email ou Username já registrado!\");</script>";
      }
      
    }else{
      echo "<script>alert(\"As senhas não confirmam!\");</script>";
    }
  }
  
  ?>
  
  <form method="post">
    <input type="email" placeholder="Insira seu email" required name="email">
    <input type="text" placeholder="Insira seu username" required name="username">
    <input type="password" placeholder="Insira sua senha" required name="password">
    <input type="password" placeholder="Confirme sua senha" required name="confirm_password">
    
    <button type="submit">Registrar-se</button>
  </form>

</body>
</html>
