<?php include "templates/header.php"; ?>
<section id="content" class="left">
	<h2>Editar Categoria</h2>
	<form id="form" method="POST">
		<?php if(isset($success)) : ?>
		<div class="form-row success">
			Edição realizada com sucesso!
		</div>
		<?php endif; ?>
		<input type="hidden" name="do" value="editar-categoria">
		<div class="form-row">
			<label for="nome">Nome</label>
			<input id="nome" type="text" name="nome" value="<?php echo $categoria->nome; ?>" required />
		</div>
		<div class="form-row">
			<input id="editar-categoria" type="submit" name="submit" value="Editar" />
		</div>
	</form>
</section>
<asidebar id="sidebar" class="right">
	<?php include "sidebar.php" ?>
</asidebar>
<?php include "templates/footer.php"; ?>
