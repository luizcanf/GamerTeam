<?php
require_once("Config.php");

//4 campos do form
$nome_completo = $_POST['nome_completo'];
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$senha = ($_POST['senha']);

$config = new Config();
$conexao = $config->conectaBanco();

  if (!$conexao){
      die ("Erro de conex�o com localhost, o seguinte erro ocorreu -> ".mysqli_connect_error());
  }
  //conectando com a tabela do banco de dados
  $query = "SELECT email from usuarios where email=\"$email\"";
  if ($result = mysqli_query($conexao,$query)) {
      $row = $result->fetch_row();
      if ($row[0] == null || $row[0] == "") {
          //Query que realiza a inserção dos dados no banco de dados na tabela indicada acima
        $query = "INSERT INTO usuarios (nome_completo, nickname, email, senha, id_usuario) VALUES (\"$nome_completo\", \"$nickname\", \"$email\", \"$senha\", NULL)";
        if($result = mysqli_query($conexao,$query)) {
            echo "Seu cadastro foi realizado com sucesso!";
            header("location: Profile.html");
        } else {
              echo "bosta.";
        }
      } else {
          echo "<br>Email já cadastrado: \"", $row[0],"\".";
      }
  } else {
      echo "bug ao consultar o BD.";
  }
  $result->close();
  mysqli_close($conexao);
?>
