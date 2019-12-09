 <?php 
    include("bases/topocomunidade.php")
?>
<div class="container">
<div class="direita">
                <div class="box">
                    <h1>Fã sites</h1>
                    <div class="fa"><span>Gostaria de ter seu fã site oficializado? <b>Clique aqui!</b></span></div>
                    <div class="banner">
                        <a href="#"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/exempla.png"></a>
                        <a href="#"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/exempla.png"></a>
                        <a href="#"><img src="<?= $config['hotelUrl']?>/templates/<?= $config['skin']?>/images/exempla.png"></a>
                    </div>
                </div>
                <div class="box2">
                    <h1>Pontos em Promoções</h1>
                    <?php 
					$sortidos = $dbh->prepare("SELECT * from users WHERE rank < 5 ORDER BY promo_points DESC  LIMIT 4");
					$sortidos->execute();
					while ($sortido_row = $sortidos->fetch())
					{
					?>
                    <div class="userevento">
                        <div class="usereventoimg" style="background: url('https://habbo.city/habbo-imaging/avatarimage?figure=<?= filter($sortido_row['look']) ?>&action=std,wav&gesture=sml&direction=2&head_direction=3&size=0&img_format=png')"></div>
                        <div class="infoe">
                            <a><b><?= filter($sortido_row['username']) ?></b></a>
                            <a><?= filter($sortido_row['promo_points']) ?> Pontos em eventos</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
</div>
<div class="esquerda">
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
                <div class="box2">
                    <h1>Pontos em Eventos</h1>
                    <?php 
					$sortidos = $dbh->prepare("SELECT * from users WHERE rank < 5 ORDER BY puntos_eventos DESC  LIMIT 4");
					$sortidos->execute();
					while ($sortido_row = $sortidos->fetch())
					{
					?>
                    <div class="userevento">
                        <div class="usereventoimg" style="background: url('https://habbo.city/habbo-imaging/avatarimage?figure=<?= filter($sortido_row['look']) ?>&action=std,wav&gesture=sml&direction=2&head_direction=3&size=0&img_format=png')"></div>
                        <div class="infoe">
                            <a><b><?= filter($sortido_row['username']) ?></b></a>
                            <a><?= filter($sortido_row['puntos_eventos']) ?> Pontos em eventos</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
</div>
</div>
<?php
    include("bases/footer.php")
?>