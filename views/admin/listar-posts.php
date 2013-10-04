<?php include "templates/header.php"; ?>
<section id="content" class="left">
	<h2>Posts Adicionados</h2>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Título</th>
				<th id="list-options" colspan="2">Opções</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($posts as $post) : ?>
			<tr>
				<td class="list-id"><?php echo $post['id'] ?></td>
				<td><?php echo substr($post['title'], 0, 44) . '...'; ?></td>
				<td><a class="btn btn-edit" href="r.php?pg=editar-post&id=<?php echo $post['id']; ?>" title="Editar Post"><img src="img/edit.png" alt="Editar" width="20" height="20" />Editar</a></td>
				<td><a class="btn btn-edit" href="r.php?pg=excluir-post&id=<?php echo $post['id']; ?>" title="Excluir Post"><img src="img/close.png" alt="Excluir" width="20" height="20" />Excluir</a></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</section>
<asidebar id="sidebar" class="right">
	<?php include "sidebar.php" ?>
</asidebar>
<?php include "templates/footer.php"; ?>
