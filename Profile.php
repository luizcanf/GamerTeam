<?php
	header("Content-Type: text/html; charset=ISO-8859-1",true);

  session_start();
	$nick = $_SESSION['usuarioPHP']['nick'];
  $pontos = $_SESSION['usuarioPHP']['pontuacao'];
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <div id="side-things-title"></div>
    <div id="P-Title">
        <button id="blogin" class="Butons" style="width:20%;">News</button>
        <button id="bsignup" class="Butons" style="left: 30%; width:45%">Best Plays!</button>
    </div>
    <div id="title-complement-profile"></div>
    <div id="side-complement"></div>
    <div id="profile-complement">
        <div id="Profile_image"></div>
        <div id="Profile_Info">
            <p><?php echo $nick?></p>
            <p>XP: <?php echo $pontos?></p>
            <div id="Notfications">2</div>
        </div>
    </div>
</head>
<body>
    <div id="side-things">
        <div id="chatP" style="position: fixed; top: 11%;">
            <img src="images/megaman.jpg" style="height:100%; width:5%; margin-left:13.5%; border-radius: 50%;" />
        </div>
        <div id="chatP" style="position: fixed; top: 21%;">
            <img src="images/Hotteck.png" style="height:100%; width:5%; margin-left:10%; border-radius: 50%;" />
        </div>
        <div id="chatP" style="position: fixed; top: 31%;">
            <img src="images/Yu-Gi-Oh.png" style="height:100%; width:5%; margin-left:6.5%; border-radius: 50%;" />
        </div>
        <div id="chatP" style="position: fixed; top: 41%;">
            <img src="images/UrvwrBlackWallPaper.png" style="height:100%; width:5%;  margin-left:3%; border-radius: 50%;" />
        </div>
        <div id="chatP" style="position: fixed; top: 51%;">
            <img src="images/megaman.jpg" style="height:100%; width:5%; border-radius: 50%;" />
        </div>
        <div id="chatP" style="position: fixed; top: 61%;">
            <img src="images/chopper.jpg" style="height:100%; width:5%; border-radius: 50%;" />
        </div>
        <div id="chatP" style="position: fixed; top: 71%;">
            <img src="images/Hotteck.png" style="height:100%; width:5%; border-radius: 50%;" />
        </div>
        <div id="chatP" style="position: fixed; top: 81%;">
            <img src="images/Yu-Gi-Oh.png" style="height:100%; width:5%; border-radius: 50%;" />
        </div>
        <input type="text" value="Click to Write!" name="chatbox" onfocus="if (this.value == 'Click to Write!') this.value = '';" onblur="if (this.value == '') this.value = 'Click to Write!'" />
    </div>
    <div id="Postagens">
        <img src="images/megaman.jpg" style="position: absolute; height:5%; width:8%; border-radius: 20%; margin: 2% 2%;" />
        <p style="position:absolute; left: 12%; top: 2%; color:#4D1A57;">CLEBINHO! \o/</p>
        <img src="images/red-dead-redemption-2-leak.jpg" style="position: absolute; left: 9%; top: 8%; height:30%; width:80%;" />
        <div class="React">Nice!</div>
        <div class="React" style="left: 35%;">Coment</div>
        <div class="React" style="left: 65%;">Denunciar</div>
    </div>
    <div id="Events">
        <img src="images/megaman.jpg" style="height:8%; width:15%; margin: 5%; border-radius: 50%;" />
        <p style="position:absolute; top: 4%; right:2%;">Adicionou um Novo Registro!</p>
        <img src="images/Hotteck.png" style="height:8%; width:15%; margin: 5%; border-radius: 50%; position:absolute; top: 10%; left: 0%;" />
        <p style="position:absolute; top: 14.2%; right:7%;">Está Jogando Overwatch!</p>
        <img src="images/UrvwrBlackWallPaper.png" style="height:8%; width:15%; margin: 5%; border-radius: 50%; position:absolute; top: 20%; left: 0%;" />
        <p style="position:absolute; top: 24.2%; right:18%;">Está Jogando Skyrim!</p>
        <img src="images/Yu-Gi-Oh.png" style="height:8%; width:15%; margin: 5%; border-radius: 50%; position:absolute; top: 30%; left: 0%;" />
        <p style="position:absolute; top: 34.2%; right:21%;">Compartilhou Algo!</p>
        <img src="images/UrvwrBlackWallPaper.png" style="height:8%; width:15%; margin: 5%; border-radius: 50%; position:absolute; top: 40%; left: 0%;" />
        <p style="position:absolute; top: 44.2%; right:2%;">Adicionou um Novo Registro!</p>
        <img src="images/megaman.jpg" style="height:8%; width:15%; margin: 5%; border-radius: 50%; position:absolute; top: 50%; left: 0%;" />
        <p style="position:absolute; top: 54.2%; right:11%;">Está Jogando Yu Gi Oh DL!</p>
        <div id="ooo"></div>
        <div id="ooo" style="top: 80%;"></div>
        <div id="ooo" style="top: 90%;"></div>
    </div>
</body>
</html>
