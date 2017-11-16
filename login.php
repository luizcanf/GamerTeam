<?php
  session_start();
  //$email = $_POST['email'];
  //$senha = ($_POST['senha']);
  $user_check = $_SESSION['login_user'];
  $conexao = mysqli_connect("localhost","root","root","gamerteam");
 
  if(isset($_SESSION['login_user'])){
    header("location: Profile.html");
  } else {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = mysqli_real_escape_string($conexao,$_POST['login']);
      $senha = mysqli_real_escape_string($conexao,$_POST['senha']); 
        
      $sql = "SELECT nickname FROM usuarios WHERE email = \"$email\" and senha = \"$senha\"";
      $result = mysqli_query($conexao,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);
        
      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
        //session_register("email");
        $_SESSION['login_user'] = $email;
        
        header("location: Profile.html");
      } else {
        $error = "login ou senha inválidos";
        header("location: falha_login.html");
      }
    }
  }

?>