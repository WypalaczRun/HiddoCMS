<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Raios">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="robots" content="index, follow">
        <meta name="description" content="Hiddo Hotel - Uma magia em forma de jogo.">
        <meta name="keywords" content="Hiddo, Habbo, Hotel, Habbo Hotel, Hiddo Hotel, Habblet, HabboPop">
        <title>Hiddo Hotel - Página Principal</title>
        <link rel="icon" type="image/x-icon" href="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/favicon.ico" />
        <link href="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/css/raios.css?,=<?= time()?>" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/js/jSlider.min.css">
        <script src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/js/raios.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
		<script src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/js/jquery.jSlider.min.js"></script>
    </head>
    <body>
        <div class="topo">
            <div class="container">
                <div id="logo" href="/me"></div>
                <div class="onlines"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/online.png"> <a><b><?= Game::usersOnline()?> Hiddos Online</b></a></div>
                <div class="clear">
				<?php
                if(User::userData('rank') > 6){
                  echo'
                    <a href="/adminpan"><div class="painel"><h1>Painel de Controle</h1></div></a>
					                ';
                }
				?>
				
                    <a href="/client"><div class="gohotel"><h1>Entrar no Hotel</h1></div></a>
                </div>
            </div>
        </div>
        <div class="menu">
            <div class="container">
                <ul>
                    <a href="/me"><li class="active"><div class="icon"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/home.png"></div>Página Principal</li></a>
                    <a href="/comunidade"><li><div class="icon" style="margin-left: 160px; margin-top: -17px;"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/comunidade.png"></div>Comunidade</li></a>
                    <a href="/loja"><li><div class="icon" style="margin-left: 310px; margin-top: -17px;"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/loja.png"></div>Loja Hiddo</li></a>
                </ul>
            </div>
        </div>
        <div class="submenu">
            <div class="container">
                <ul>
                    <a href="/me"><li class="active3">Home</li></a>
                    <a href="/perfil/<?= User::userData('username')?>"><li>Perfil</li></a>
                    <a href="/confi"><li>Configurações</li></a>
                    <a href="/logout"><li>Sair</li></a>
                </ul>
            </div>
        </div>
    