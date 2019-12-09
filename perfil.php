    <?php 
    include("bases/topo.php")
    ?>
        <div class="container">
            <div class="perfi">
                <div class="useri" style="background: #e2aa2a url('https://habbo.city/habbo-imaging/avatarimage?figure=<?= filter(userHome('look')); ?>&direction=3&head_direction=3&gesture=sml&size=l&img_format=png');"></div>
                <h1><?= filter(userHome('username')); ?></h1>
            </div>
            <div class="esquerda">
                <div class="box">
                <div class="emblemas">
                    <h1>Meus <b>Emblemas</b></h1>
									<?php
					$userId = userHome('id');
					$emblema = $dbh->prepare("SELECT*FROM user_badges WHERE user_id = :userid");
					$emblema->bindParam(':userid', $userId);
					$emblema->execute();
					if (!$emblema->RowCount() == 0)
					{
						while($emblema1 = $emblema->fetch())
						{
							echo"<img src=\"".$config['badgeURL']."".filter($emblema1["badge_id"]).".GIF\">";
						}
					}
					else
					{
						echo userHome('username').' não tem emblemas ainda.';
					}
				?>
                </div>
                </div>
            </div>
            <div class="direita">
                <div class="box">
                <div class="video">
                    <h1>Meu <b>Vídeo</b></h1>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/IJrJSWp_tYI" frameborder="0"
                        allowfullscreen></iframe>
                </div>
                </div>
                <div class="box">
                    <h1>Etiquetas</h1>
                    <input placeholder="Adicionar tag..." type="text" class="tagadd">
                    <button type="submit" class="taggadd">Adicionar</button>
                </div>
            </div>
        </div>
    <?php
    include("bases/footer.php")
    ?>