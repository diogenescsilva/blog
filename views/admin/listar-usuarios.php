<?php include "templates/header.php"; ?>
<section id="content" class="left">
	<h2>Usuários Cadastrados</h2>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Usuário</th>
				<th id="list-options" colspan="2">Opções</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($usuarios as $usuario) : ?>
			<tr>
				<td class="list-id"><?php echo $usuario['id']; ?></td>
				<td><?php echo $usuario['nome']; ?></td>
				<td><a class="btn btn-edit" href="r.php?pg=editar-usuario&id=<?php echo $usuario['id']; ?>" title="Editar Usuário"><img src="img/edit.png" alt="Editar" width="20" height="20" />Editar</a></td>
				<td><a class="btn btn-edit" href="r.php?pg=excluir-usuario&id=<?php echo $usuario['id']; ?>" title="Excluir Usuário"><img src="img/close.png" alt="Excluir" width="20" height="20" />Excluir</a></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</section>
<asidebar id="sidebar" class="right">
	<?php include "sidebar.php" ?>
</asidebar>
<?php include "templates/footer.php"; ?>
