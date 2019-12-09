<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Raios">
        <link href="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/css/registro.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <title>Hiddo Hotel - Uma aventura contagiante!</title>
    </head>
    <body>
        <div class="header">
            <div class="box">
                <div class="logo"></div>
                <div class="onlines"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/online.png"> <a><b><?= Game::usersOnline()?> Hiddos Online</b></a></div>
                <div class="login">
                    <h1>Registro</h1>
                </div>
            </div>
        </div>
        <div class="box2">
		<?php User::Register(); ?>
            <div class="meio">
			  <form action="" method="post">
                    <input name="username" type="text" placeholder="Nome de usuário">
                    <input name="email" type="text" placeholder="E-mail">
                    <input name="password" type="password" placeholder="Sua senha">
                    <input name="password_repeat" type="password" placeholder="Repita sua senha">
                    <button name="register" type="submit" onclick="location.href='/me';" class="registro">Registrar-me</button>
                    <button class="sair" onclick="location.href='/index';" type="button">Voltar</button> 
              </form>					
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