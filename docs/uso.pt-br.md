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
<em>Por enquanto a tabela precisa necessariamente se chamar "users"</em>.<br>
Após seguir estes passos você poderá prosseguir e implementar o sistema com sucesso em seu site.
<hr>

<h2>2. Funções</h2>
<h3>2.1 - Chamando a classe</h3>
Tendo em mãos os dados do seu banco de dados (host, nome de usuario, senha e nome do banco de dados) você irá iniciar o uso da classe.
<pre>
&lt;php
require_once 'lib/AuthSystem.class.php';

$auth = new AuthSystem("localhost", "username", "password", "database");
?&gt;
</pre>
Onde: <br>
"localhost" = Endereço do seu servidor MySQL;<br>
"username" = Nome de usuário do seu banco de dados;<br>
"password" = Senha de acesso ao seu banco de dados;<br>
"database" = Nome que você deu ao seu banco de dados (geralmente, o nome é igual ao nome de usuário em casos de hospedagem de sites comuns).<br><hr>
<h3>2.2 - Como registrar um usuário</h3>
A função usada para registrar usuários é:
<pre>userRegister($email, $name, $pass); </pre>
Onde <b style="background:rgba(0,0,0,0.2)">$email</b> é o email do usuario a ser registrado, <b style="background:rgba(0,0,0,0.2)">$name</b> é o nome de usuário, e <b style="background:rgba(0,0,0,0.2)">$pass</b> é a senha de acesso.<br>Esta função irá retornar <i>true</i> ou <i>false</i>, caso seja true, significa que o usuário foi registrado com sucesso, caso seja false, ocorreu um erro ao registrar o usuário ou já existe outro usuário com o mesmo email ou mesmo nome no banco de dados.<br><hr>
<h3>Como efetuar login</h3>
A função usada para logar-se é:
<pre>userLogin($name, $pass, true);</pre>ou<pre>userLogin($name, $pass, false);</pre>
Onde <b>$name</b> é o nome de usuário, <b>$pass</b> é a senha de acesso, e <b>true</b>/<b>false</b> é o modo como ele será logado (cookies ou sessions).<br><b>true</b> equivale a login com cookies (o usuário permanecerá logado durante um mês, mesmo fechando o navegador).<br><b>false</b> equivale a login com sessions (o usuário ficará logado apenas enquanto o navegador estiver aberto).<br>
Esta função retornará <i>true</i> ou <i>false</i>, caso seja true, significa que o usuário efetuou login com sucesso, caso seja false, os dados de acesso estão incorretos.<br><hr>
<h3>2.3 - Como checar se o usuário está logado</h3>
A função usada para verificar se o usuário está logado é:
<pre>isLogged();</pre>
Esta função é bastante simples e retornará true ou false.<br>Caso seja <b>true</b>, significa que o usuário está logado, e caso seja <b>false</b>, o usuário não está logado.
<h4>-------- Exibindo dados apenas para quem estiver logado</h4>
<hr>
