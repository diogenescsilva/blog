<?php include "templates/header.php"; ?>
<section id="content" class="left">
	<h2>Cadastrar Categoria</h2>
	<form id="form" method="POST">
		<?php if(isset($success)) : ?>
		<div class="form-row success">
			Cadastro realizado com sucesso!
		</div>
		<?php endif; ?>
		<input type="hidden" name="do" value="cadastrar-categoria">
		<div class="form-row">
			<label for="nome">Nome</label>
			<input id="nome" type="text" name="nome" placeholder="Digite o nome da categoria" required />
		</div>
		<div class="form-row">
			<input id="cadastrar-categoria" type="submit" name="submit" value="Cadastrar" />
		</div>
	</form>
</section>
<asidebar id="sidebar" class="right">
	<?php include "sidebar.php" ?>
</asidebar>
<?php include "templates/footer.php"; ?>
