 <?php 
    include("bases/topo.php")
?>

<div class="container">
<?php User::editPassword(); ?>
    <div class="conteudo">
    <div class="box">
	<form action="" method="post">
        <h1>Configurações da Conta</h1>
        <a>Sua senha atual:</a>
        <input type="text"  name="oldpassword" placeholder="Escreva sua senha atual..." class="inputa">
        <a>Nova senha:</a>
        <input type="text" name="newpassword" placeholder="Escreva sua nova senha..." class="inputa">
        <a>Repita sua nova senha:</a>
        <input type="text" name="newpassword" placeholder="Escreva novamente sua nova senha..." class="inputa">
		<button type="submit" name="password" class="mudar">Salvar alterações</button>
		</form>
    </div>
    <div class="box">
	<?php User::editEmail(); ?>
        <h1>Configurações de Email</h1>
		<form action="" method="post">
        <a>Novo email:</a>
        <input type="text" name="email" value="<?= User::userData('mail')?>" class="inputa">
    </div>
        <button type="submit" name="confirmar" class="mudar">Salvar alterações</button>
		</form>
    </div>
</div>
<?php
    include("bases/footer.php")
?>