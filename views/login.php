<?php include "templates/header.php"; ?>
<div id="content">
	<h2>Faça seu login</h2>
	<form id="form" method="POST" action="r.php">
		<?php if(isset($_SESSION['login']) AND $_SESSION['login'] == false) : ?>
		<div class="form-row alert">
			E-mail ou senha inválidos!
		</div>
		<?php endif; ?>
		<input type="hidden" name="do" value="login" />
		<div class="form-row">
			<label for="email">E-mail</label>
			<input id="email" type="email" name="email" placeholder="Digite seu e-mail" required />
		</div>
		<div class="form-row">
			<label for="senha">Senha</label>
			<input id="senha" type="password" name="senha" placeholder="Digite sua senha" required />
		</div>
		<div class="form-row">
			<input id="login" type="submit" name="submit" value="Login" />
		</div>
	</form>
</div>
<?php include "templates/footer.php"; ?>
