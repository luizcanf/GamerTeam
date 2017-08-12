<?php require_once('Connections/conexao.php'); ?><?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['login'])) {
  $loginUsername=$_POST['login'];
  $password=$_POST['senha'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "painel.php";
  $MM_redirectLoginFailed = "erro.htm";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_conexao, $conexao);
  
  $LoginRS__query=sprintf("SELECT login, senha FROM sistema_de_login WHERE login='%s' AND senha='%s'",
    get_magic_quotes_gpc() ? $loginUsername : addslashes($loginUsername), get_magic_quotes_gpc() ? $password : addslashes($password)); 
   
  $LoginRS = mysql_query($LoginRS__query, $conexao) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<html>
<head>
<title>Sistema de login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body text="#CCCCCC" link="#FFCC00" vlink="#FFCC00" alink="#FFCC00" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="350" border="0" align="left" cellpadding="0" cellspacing="0" bgcolor="#000066">
  <tr>
    <td align="center" valign="middle"><table width="350" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td align="center" valign="middle"><p align="left"><font face="Arial, Helvetica, sans-serif"><strong>Fazer
          login</strong></font></p></td>
        </tr>
        <tr>
          <td align="center" valign="middle"><hr color="blue">
          </td>
        </tr>
        <tr>
          <td align="center" valign="middle"><form name="form1" method="POST" action="<?php echo $loginFormAction; ?>">
          <table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr align="center" valign="middle">
              <td width="100"><div align="left"><font size="3" face="Verdana, Arial, Helvetica, sans-serif">Login</font></div>
              </td>
              <td width="200"><div align="left">
                  <input name="login" type="text" id="login" size="30">
                </div>
              </td>
            </tr>
            <tr align="center" valign="middle">
              <td><div align="left">
                  <p><font size="3" face="Verdana, Arial, Helvetica, sans-serif">Senha</font></p>
                </div>
              </td>
              <td><div align="left">
                  <input name="senha" type="password" id="senha" size="30">
                </div>
              </td>
            </tr>
            <tr align="center" valign="middle">
              <td>&nbsp;</td>
              <td><div align="left">
                  <input type="submit" name="Submit" value="Entrar">
                </div>
              </td>
            </tr>
            <tr align="center" valign="middle">
              <td>&nbsp;</td>
              <td><p><font size="2">Ainda n&atilde;o &eacute; cadastrado?</font><br>
                    <a href="cadastro.php">Clique aqui!</a></p>
              </td>
            </tr>
          </table>
          </form></td>
        </tr>
        <tr>
          <td align="center" valign="middle">&nbsp;</td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>
