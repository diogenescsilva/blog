<?php include "templates/header.php"; ?>
<section id="content" class="left">
	<h2>Novo Post</h2>
	<form id="form" method="POST">
		<?php if(isset($success)) : ?>
		<div class="form-row success">
			Cadastro realizado com sucesso!
		</div>
		<?php endif; ?>
		<input type="hidden" name="do" value="cadastrar-post">
		<input type="hidden" name="usuario" value="<?php echo $_SESSION['usuario_id']; ?>">
		<div class="form-row">
			<label for="titulo">Título</label>
			<input id="titulo" type="text" name="titulo" placeholder="Digite o título do post" required />
		</div>
		<div class="form-row">
			<label for="categoria">Categoria</label>
			<select id="categoria" name="categoria">
			<?php foreach ($categorias as $categoria) : ?>
				<option value="<?php echo $categoria['id'] ?>"><?php echo $categoria['nome']; ?></option>
			<?php endforeach; ?>
			</select>
		</div>
		<div class="form-row text-area">
			<label for="conteudo">Conteúdo</label>
			<textarea id="conteudo" name="conteudo" placeholder="Digite o conteúdo do post" rows="10"></textarea>
		</div>
		<div class="form-row">
			<input id="cadastrar-post" type="submit" name="submit" value="Cadastrar" />
		</div>
	</form>
</section>
<asidebar id="sidebar" class="right">
	<?php include "sidebar.php" ?>
</asidebar>
<?php include "templates/footer.php"; ?>
