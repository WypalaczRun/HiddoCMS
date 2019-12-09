    <?php 
    include("bases/topo.php")
    ?>
    <div class="meio">
        <div class="container">
            <div class="esquerda">
                <div class="perfil">
                    <div class="esque">
                        <div class="bemvindo"><img src='<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/well.png'> <a>Bem vindo <b><?= User::userData('username')?></b>!</a></div>
                        <div class="user"><img src="https://habbo.city/habbo-imaging/avatarimage?figure=<?= User::userData('look')?>&action=wav&direction=3&head_direction=3&gesture=sml&size=b&img_format=png" style="-webkit-filter: drop-shadow(0 2px 0 #FFFFFF) drop-shadow(0 -2px 0 #FFFFFF) drop-shadow(2px 0 0 #FFFFFF) drop-shadow(-2px 0 0 #FFFFFF);"></div>
                    </div>
                    <div class="direi">
                        <div class="moeda" style="width: 100%; height: 55px; background: #eab125;"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/credits.png"> <a><b><?= User::userData('credits')?> Moedas</b></a></div>
                        <div class="moeda" style="width: 100%; height: 55px; background: #ca47a7;"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/duck.png"> <a><b><?= User::userData('activity_points')?> Duckets</b></a></div>
                        <div class="diamante" style="width: 100%; height: 55px; background: #88bcaf;"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/diamantes.png"> <a><b><?= User::userData('vip_points')?> Diamantes</b></a></div>
                        <a href="#" target="_blank"><div class="entrar"><h1>Entrar no Hotel</h1></div></a>
                    </div>
                </div>
                <div class="aviso"><div class="frank"></div> <a>Não esqueça de ler a <b>Hiddo Etiqueta</b> e conferir nossa Loja!</a></div>
            </div>
            <div class="direita">
                <div class="noticias">
                    <div class="top">
                        <div class="jSlider" id="slider1" data-delay="0">
			<?php
					$sql = $dbh->prepare("SELECT id,title,image,shortstory FROM cms_news ORDER BY id DESC LIMIT 5");
					$sql->execute();
					while ($news = $sql->fetch())
					{ ?>
						
                <div class="selected">
				 <a href="/noticias/<?php echo filter($news["id"]) ?>"><h3 class="appear-top"><?php echo $news["title"] ?></h3>
				 <h4 class="appear-right"><?php echo $news["shortstory"] ?></h4><img src="<?php echo filter($news["image"]) ?>.png" alt="<?php echo $news["title"] ?>">
				</div></a>
                <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="meio3">
        <div class="container">
            <div class="direita">
                <div class="sortidos">
                    <h1>Usuários <b>Sortidos</b></h1>
                    <div class="users">
					<?php 
					$sortidos = $dbh->prepare("SELECT * from users WHERE rank < 5 ORDER BY rand() DESC  LIMIT 5");
					$sortidos->execute();
					while ($sortido_row = $sortidos->fetch())
					{
					?>
                        <a href="/perfil/<?= filter($sortido_row['username']) ?>"><div class="tri" style="background: #303030 url('https://habbo.city/habbo-imaging/avatarimage?figure=<?= filter($sortido_row['look']) ?>&direction=3&head_direction=3&gesture=sml&size=l&img_format=png');"></div></a>
                   <?php } ?>
				   </div>
                </div>
            </div>
            <div class="esquerda">
                <div class="melhores">
                    <h1>Melhores <b>Quartos</b></h1>
					<?php 
					$sortidos = $dbh->prepare("SELECT * from rooms ORDER BY users_now DESC  LIMIT 3");
					$sortidos->execute();
					while ($sortido_row = $sortidos->fetch())
					{
					?>
                    <div class="quarto"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/q1.gif"> <a><?= filter($sortido_row['caption']) ?></a></div>
					<?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    include("bases/footer.php")
    ?>