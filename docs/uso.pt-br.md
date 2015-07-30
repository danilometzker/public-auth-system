Inicialmente obrigado por usar este sistema que desenvolvi para facilitar o trabalho de quem não tem muita experiencia em PHP!
Se mesmo com a documentação você continuar com dificuldades, veja os exemplos de uso, isso irá facilitar bastante.

---------------------------------------------------------
<h1>Introdução ao Public Auth System</h1>
O <b>Public Auth System</b> é um sistema de cadastro/login criado para facilitar o trabalho de implementar um sistema de autenticação em seu site. Este sistema é de código aberto sob a licença <a href="http://opensource.org/licenses/GPL-2.0">GNU GPL-2.0</a>. A distribuição deste código é permitida contanto que não haja mudança dos creditos do criador e que não seja para fins lucrativos.
<hr>
<br>
<h2>1. Começando a usar</h2>
Você só precisará do arquivo <a href="https://github.com/DMZK/public-auth-system/blob/master/src/lib/AuthSystem.class.php">AuthSystem.class.php</a>.
Coloque este arquivo em alguma pasta do seu site. Para usá-lo em uma página php, lembre-se de incluir a classe com o codigo abaixo:
<pre>&lt;?php require_once 'lib/AuthSystem.class.php'; ?&gt;</pre>
"lib" é a pasta onde se encontra a classe, você pode alterar isto.
  
Agora você precisa criar um banco de dados MySQL para que o sistema possa funcionar.<br>
Tendo um banco de dados MySQL criado, você terá que criar a tabela onde serão guardados os dados dos usuários. Simplesmente importe <a href="https://github.com/DMZK/public-auth-system/blob/master/src/sql/table.sql">esta tabela</a> no seu servidor MySQL como o phpmyadmin ou crie-a manualmente com o mesmo codigo deste arquivo:
<pre>
CREATE TABLE users (
  id INT NOT NULL auto_increment,
  email VARCHAR(255),
  username VARCHAR(255),
  password VARCHAR(255),
  token VARCHAR(255),
  primary KEY (id)
);
</pre>

Após seguir estes passos você poderá prosseguir e implementar o sistema com sucesso em seu site.
<hr>

<h2>2. Funções</h2>
<h3>2.1 - Como registrar um usuário</h3>
