<?php include "templates/header.php"; ?>
<section id="content" class="left">
	<h2>Editar Usuário</h2>
	<form id="form" method="POST" enctype="multipart/form-data">
		<?php if(isset($success)) : ?>
		<div class="form-row success">
			Edição realizada com sucesso!
		</div>
		<?php endif; ?>
		<input type="hidden" name="do" value="editar-usuario">
		<div class="form-row">
			<img src="<?php echo $usuario->avatar; ?>" alt="<?php echo $usuario->nome; ?>" />
		</div>
		<div class="form-row">
			<label for="nome">Nome</label>
			<input id="nome" type="text" name="nome" value="<?php echo $usuario->nome; ?>" required />
		</div>
		<div class="form-row">
			<label for="email">E-mail</label>
			<input id="email" type="email" name="email" value="<?php echo $usuario->email; ?>" required />
		</div>
		<div class="form-row">
			<label for="senha">Senha</label>
			<input id="senha" type="password" name="senha" value="<?php echo $usuario->senha; ?>" required />
		</div>
		<div class="form-row">
			<label for="avatar">Avatar</label>
			<input id="avatar" type="file" name="avatar" value="<?php echo $usuario->avatar; ?>" />
		</div>
		<div class="form-row">
			<input id="editar-usuario" type="submit" name="submit" value="Editar" />
		</div>
	</form>
</section>
<asidebar id="sidebar" class="right">
	<?php include "sidebar.php" ?>
</asidebar>
<?php include "templates/footer.php"; ?>
