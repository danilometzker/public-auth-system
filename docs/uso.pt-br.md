Inicialmente obrigado por usar este sistema que desenvolvi para facilitar o trabalho de quem não tem muita experiencia em PHP!
Se mesmo com a documentação você continuar com dificuldades, veja os exemplos de uso, isso irá facilitar bastante.

---------------------------------------------------------
<h2>1. Começando a usar</h2>
Você só precisará do arquivo <a href="https://github.com/DMZK/public-auth-system/blob/master/src/lib/AuthSystem.class.php">AuthSystem.class.php</a>.
Coloque este arquivo em alguma pasta do seu site. Para usá-lo em uma página php, lembre-se de incluir a classe com o codigo abaixo:
<pre>&lt;?php require_once 'lib/AuthSystem.class.php'; ?&gt;</pre>
"lib" é a pasta onde se encontra a classe, você pode alterar isto.
  
Agora você precisa criar um banco de dados MySQL para que o sistema possa funcionar.
