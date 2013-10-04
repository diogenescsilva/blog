		</div>
		<footer id="footer">
			<p><b>Projeto de PHP.</b></p>
			<p>Instituto Federal de Educação, Ciência e Tecnologia da Paraíba.</p>
			<p>Curso de Tecnologia em Sistemas para Internet</p>
			<p>Diógenes Calado da Silva</p>
		</footer>
	</div>
	<script src="js/jquery-1.10.2.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#cadastrar-categoria').click(function() {
			$.ajax({
				url: 'r.php',
				type: 'POST'
			});
		});
		$('#editar-categoria').click(function() {
			$.ajax({
				url: 'r.php',
				type: 'POST'
			});
		});
		$('#cadastrar-usuario').click(function() {
			$.ajax({
				url: 'r.php',
				type: 'POST'
			});
		});
		$('#editar-usuario').click(function() {
			$.ajax({
				url: 'r.php',
				type: 'POST'
			});
		});
		$('#cadastrar-post').click(function() {
			$.ajax({
				url: 'r.php',
				type: 'POST'
			});
		});
		$('#editar-post').click(function() {
			$.ajax({
				url: 'r.php',
				type: 'POST'
			});
		});
		$('.enviar-email').click(function() {
			$(this).each(function() {
				$.ajax({
					url: 'r.php',
					type: 'POST'
				})
			})
		});
	});
	</script>
</body>
</html>