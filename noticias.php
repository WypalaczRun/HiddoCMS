<?php 
    include("bases/toponoticias.php")
?>
 <?php
          if (empty($_GET['id']))
          {
            ?>
            <script language="JavaScript"> 
              window.location="/me"; 
            </script> 
            <?php
          }
          else
          {
            if (!is_numeric($_GET['id']))
            {
              exit('Shut up!');
            }
            $news = $dbh->prepare("SELECT id,title,longstory,shortstory,date,author FROM cms_news WHERE id = :newsid");
            $news->bindParam(':newsid', $_GET['id']);
            $news->execute();
            if ($news->RowCount() == 1)
            {
              while ($news2 = $news->fetch())
              {
                $getMessageUser = $dbh->prepare("SELECT id,username,look FROM users WHERE id = :id");
                $getMessageUser->bindParam(':id', $news2['author']);
                $getMessageUser->execute();
                $user = $getMessageUser->fetch();
                echo'
                <div class="container">
    <div class="noticia">
        <div class="box2">
            <div class="informacoes">
                <div class="left">
                <img src="'.$config['hotelUrl'].'/templates/'.$config['skin'].'/images/notiicon.png"><a>'. html_entity_decode($news2['title']).'</a>
                </div>
                <div class="right">
                    <img src="'.$config['hotelUrl'].'/templates/'.$config['skin'].'/images/like.png"><a>134 Gostaram!</a>
                    <img src="'.$config['hotelUrl'].'/templates/'.$config['skin'].'/images/deslike.png"><a>12 Não Gostaram!</a>
                </div>
            </div>
            <div class="texto">'. html_entity_decode($news2['longstory']).'</div>
            <div class="avaliacao">
                <a><b>Autor: '.filter($user['username']).'</b></a>
                <a><b>Avalie esta notícia! :D</b></a>
                <div class="avaliar" style="background: #a0a0a0;"><div class="icon1"><img src="'.$config['hotelUrl'].'/templates/'.$config['skin'].'/images/deslike.png"></div>Não gostei</div>
                <div class="avaliar" style="background: #db5148;"><div class="icon1"><img src="'.$config['hotelUrl'].'/templates/'.$config['skin'].'/images/like.png"></div>Gostei</div>
            </div>
        </div>
    </div>';} }
                else
                {
                  ?>

                  <script language="JavaScript"> 
                      window.location="/me"; 
                    </script>
                  <?php
                }
              }
              ?>
    <div class="indice">
    <div class="box2">
            <h1>Índice de Notícias</h1>
			<?php
			    $getArticles = $dbh->prepare("SELECT id,title FROM cms_news  ORDER BY id DESC");
                $getArticles->execute();
                if ($getArticles->RowCount() > 0)
                {
                while ($a = $getArticles->fetch())
                {
                 echo '<li class="indi"><a href="/news/' . filter($a['id']) . '"><b>' . filter($a['title']) . '</a></b></li>'; }
                } 
				?>
        </div>
    </div>
</div>
<?php
    include("bases/footer.php")
?>