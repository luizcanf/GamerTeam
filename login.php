<?php
  require_once("Config.php");

  session_start();
  $config = new Config();
  $conexao = $config->conectaBanco();

  /*if(isset($_SESSION['usuarioPHP'])){
    header("location: Profile1.php");
  } else {*/
      if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = mysqli_real_escape_string($conexao,$_POST['login']);
        $senha = mysqli_real_escape_string($conexao,$_POST['senha']);

        $sql = "SELECT * FROM usuarios WHERE email = \"$email\" and senha = \"$senha\"";
        $result = mysqli_query($conexao,$sql);
        if(mysqli_num_rows($result) == 1){
  			     $usuarioBD = $result->fetch_array(MYSQLI_ASSOC);
  			     session_start();
  			     $_SESSION['usuarioPHP']['nick'] = $usuarioBD['nickname'];
  			     $_SESSION['usuarioPHP']['nome'] = $usuarioBD['nome_completo'];
  			     $_SESSION['usuarioPHP']['email'] = $usuarioBD['email'];
             $_SESSION['usuarioPHP']['id'] = $usuarioBD['id_usuario'];
             $_SESSION['usuarioPHP']['pontuacao'] = $usuarioBD['pontuacao_usuario'];
  			     header("Location: Profile.php");
  		} else {
        header("Location: falha_login.html");
  		}
    }
  //}

?>
