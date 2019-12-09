 <?php 
    include("bases/topostaff.php")
?>
<div class="container">
    <div class="explica">
        <div class="box2">
            <h1>Quem é a equipe?</h1>
            <p>A equipe Hiddo é uma seleção de nomes experientes e credenciados no mundo online do game Habbo. Ela é formada por os seguintes componentes: <b>CEOs, Gerentes, Moderadores, Construtores e Embaixadores</b>. Cada componente desse possui sua respectiva função, destcada logo abaixo do nome do próprio staff. Para compor a equipe do Hiddo Hotel é preciso possuir, além de experiência, muita responsabilidade e respeito. Nenhum cargo é remunerado, possuindo cada um atribuições específicas que geram, dentre outros problemas, muito stress, sendo o staff, portanto, um trabalhador de uma empresa e que em virtude de ações ruins pode em algum momento ser demitido. Nenhum dos staffs do Hiddo Hotel possui vinculação com a Sulake Co.</p>
        </div>
    </div>
    <div class="staff">
        <div class="box2">
            <h1>CEOs</h1>
											<?php
				$getArticles = $dbh->prepare("SELECT * FROM users WHERE rank = 15");
				$getArticles->execute();
				while($news = $getArticles->fetch())
					{ ?>
            <div class="stafflista">
                <div class="staffimg" style="background: url('https://habbo.city/habbo-imaging/avatarimage?figure=<?= $news['look']?>&action=std,wav&gesture=sml&direction=2&head_direction=3&size=0&img_format=png');"></div>
                <h2><?= $news['username']?></h2>
                <a><b>Função.:</b> Manter o Hotel organizado e dentro dos conformes.</a>
                <a><b>Missão.:</b> <?= $news['motto']?></a>
            </div>
			<?php }?>
        </div>
        <div class="box2">
            <h1>Gerentes</h1>
            	<?php
				$getArticles = $dbh->prepare("SELECT * FROM users WHERE rank = 14");
				$getArticles->execute();
				while($news = $getArticles->fetch())
					{ ?>
            <div class="stafflista">
                <div class="staffimg" style="background: url('https://habbo.city/habbo-imaging/avatarimage?figure=<?= $news['look']?>&action=std,wav&gesture=sml&direction=2&head_direction=3&size=0&img_format=png');"></div>
                <h2><?= $news['username']?></h2>
                <a><b>Função.:</b> Manter o Hotel organizado e dentro dos conformes.</a>
                <a><b>Missão.:</b> <?= $news['motto']?></a>
            </div>
			<?php }?>
        </div>
        <div class="box2">
            <h1>Moderadores</h1>
            	<?php
				$getArticles = $dbh->prepare("SELECT * FROM users WHERE rank = 13");
				$getArticles->execute();
				while($news = $getArticles->fetch())
					{ ?>
            <div class="stafflista">
                <div class="staffimg" style="background: url('https://habbo.city/habbo-imaging/avatarimage?figure=<?= $news['look']?>&action=std,wav&gesture=sml&direction=2&head_direction=3&size=0&img_format=png');"></div>
                <h2><?= $news['username']?></h2>
                <a><b>Função.:</b> Manter o Hotel organizado e dentro dos conformes.</a>
                <a><b>Missão.:</b> <?= $news['motto']?></a>
            </div>
			<?php }?>
        </div>
         <div class="box2">
            <h1>Construtores</h1>
            	<?php
				$getArticles = $dbh->prepare("SELECT * FROM users WHERE rank = 12");
				$getArticles->execute();
				while($news = $getArticles->fetch())
					{ ?>
            <div class="stafflista">
                <div class="staffimg" style="background: url('https://habbo.city/habbo-imaging/avatarimage?figure=<?= $news['look']?>&action=std,wav&gesture=sml&direction=2&head_direction=3&size=0&img_format=png');"></div>
                <h2><?= $news['username']?></h2>
                <a><b>Função.:</b> Manter o Hotel organizado e dentro dos conformes.</a>
                <a><b>Missão.:</b> <?= $news['motto']?></a>
            </div>
			<?php }?>
        </div>
                <div class="box2">
            <h1>Gerentes</h1>
            	<?php
				$getArticles = $dbh->prepare("SELECT * FROM users WHERE rank = 11");
				$getArticles->execute();
				while($news = $getArticles->fetch())
					{ ?>
            <div class="stafflista">
                <div class="staffimg" style="background: url('https://habbo.city/habbo-imaging/avatarimage?figure=<?= $news['look']?>&action=std,wav&gesture=sml&direction=2&head_direction=3&size=0&img_format=png');"></div>
                <h2><?= $news['username']?></h2>
                <a><b>Função.:</b> Manter o Hotel organizado e dentro dos conformes.</a>
                <a><b>Missão.:</b> <?= $news['motto']?></a>
            </div>
			<?php }?>
        </div>
    </div>
</div>
<?php
    include("bases/footer.php")
?>