<?php include "templates/header.php"; ?>
<section id="content" class="left">
	<h2>Cadastrar Usuário</h2>
	<form id="form" method="POST" enctype="multipart/form-data">
		<?php if(isset($success)) : ?>
		<div class="form-row success">
			Cadastro realizado com sucesso!
		</div>
		<?php endif; ?>
		<input type="hidden" name="do" value="cadastrar-usuario">
		<div class="form-row">
			<label for="nome">Nome</label>
			<input id="nome" type="text" name="nome" placeholder="Digite o nome do usuário" required />
		</div>
		<div class="form-row">
			<label for="email">E-mail</label>
			<input id="email" type="email" name="email" placeholder="Digite o e-mail do usuário" required />
		</div>
		<div class="form-row">
			<label for="senha">Senha</label>
			<input id="senha" type="password" name="senha" placeholder="Digite a senha do usuário" required />
		</div>
		<div class="form-row">
			<label for="avatar">Avatar</label>
			<input id="avatar" type="file" name="avatar" />
		</div>
		<div class="form-row">
			<input id="cadastrar-usuario" type="submit" name="submit" value="Cadastrar" />
		</div>
	</form>
</section>
<asidebar id="sidebar" class="right">
	<?php include "sidebar.php" ?>
</asidebar>
<?php include "templates/footer.php"; ?>
