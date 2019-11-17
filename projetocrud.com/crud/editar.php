<?php
//Conexão
include_once 'php_action/db_connect.php';

//Header
include_once 'includes/header.php';

//Select
if(isset($_GET['id'])):
  $id = mysqli_escape_string($connect, $_GET['id']);

  $sql = "SELECT * FROM clientes WHERE id = '$id'";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);
 endif; 
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light"> Editar Cliente </h3>
    <form action="php_action/update.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
      <div class="input-field col s12">
        <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>">
        <label for="nome">Nome</label>
      </div>

      <div class="input-field col s12">
        <input type="text" name="sobrenome" id="sobrenome" value="<?php echo $dados['sobrenome']; ?>">
        <label for="sobrenome">Sobrenome</label>
      </div>

      <div class="input-field col s12">
        <input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>">
        <label for="email">Email</label>
      </div>

      <div class="input-field col s12">
        <input type="text" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
        <label for="idade">Idade</label>
      </div>

      <button type="submit" name="btn-editar" class="btn"> Atualizar </button>
      <a href="index.php" class="btn green"> Lista de clientes </a>
    </form>
  </div>

<?php
//Footer
include_once 'includes/footer.php';
?>