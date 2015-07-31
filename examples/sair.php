<?php
require_once 'lib/AuthSystem.class.php';
$auth = new AuthSystem("localhost", "root", "", "usuarios"); /*host, username, password, database name*/

$logout = $auth->logout();
if($logout){
	header("Location: index.php");
}else{
	echo "Erro ao fazer logout, voce precisa estar logado primeiro.";
}
?>
