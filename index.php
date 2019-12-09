<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Raios">
        <link href="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/css/indexraios.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <title>Hiddo Hotel - Uma aventura contagiante!</title>
    </head>
    <body>
        <div class="header">
		<?php User::Login(); ?> 
            <div class="box">
			<form action="" method="POST">	
                <div class="logo"></div>
                <div class="onlines"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/online.png"> <a><b><?= Game::usersOnline()?> Hiddos Online</b></a></div>
                <div class="login">
                    <div class="icon" style="position: absolute; margin-left: 26px; margin-top: 37px;"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/login.gif"></div>
                    <input type="text"  name="username" placeholder="Nome de usuário">
                    <div class="icon" style="position: absolute; margin-left: 334px; margin-top: -39px;"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/like.png"></div>
                    <input type="password"  name="password" placeholder="*******">
                    <button  type="submit" name="login"  class="entrar">Entrar</button>
                    <button type="button" onclick="location.href='/register';" class="registro">Registrar-me</button>
					</form>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="meio">
                <div class="novi" style="background: url('<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/1.png')">
                    <p>Crie Amigos!</p>
                </div>
                <div class="novi" style="background: url('<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/2.png')">
                    <p>Crie Quartos!</p>
                </div>
                <div class="novi" style="background: url('<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/3.png')">
                    <p>Crie Jogos!</p>
                </div>
            </div>
        </div>
        <div class="box">
        <div class="footer">
            <a>&copy; Todos os direitos reservados aos seus respectivos donos
                <br /> Criado pelo mito divino <b>Raios</b></a>
        </div>
        </div>
    </body>
</html>