<?php include "templates/header.php"; ?>
<section id="content" class="left">
	<h2>Editar Post</h2>
	<form id="form" method="POST">
		<?php if(isset($success)) : ?>
		<div class="form-row success">
			Edição realizada com sucesso!
		</div>
		<?php endif; ?>
		<input type="hidden" name="do" value="editar-post">
		<div class="form-row">
			<label for="titulo">Título</label>
			<input id="titulo" type="text" name="titulo" value="<?php echo $post->title; ?>" required />
		</div>
		<div class="form-row">
			<label for="categoria">Categoria</label>
			<select id="categoria" name="categoria">
			<?php foreach ($categorias as $categoria) : ?>
				<option value="<?php echo $categoria['id']; ?>" <?php if($categoria['id'] == $post->categoria) { echo "selected"; } ?>><?php echo $categoria['nome']; ?></option>
			<?php endforeach; ?>
			</select>
		</div>
		<div class="form-row text-area">
			<label for="conteudo">Conteúdo</label>
			<textarea id="conteudo" name="conteudo" rows="10"><?php echo $post->content; ?></textarea>
		</div>
		<div class="form-row">
			<input id="editar-post" type="submit" name="submit" value="Cadastrar" />
		</div>
	</form>
</section>
<asidebar id="sidebar" class="right">
	<?php include "sidebar.php" ?>
</asidebar>
<?php include "templates/footer.php"; ?>
