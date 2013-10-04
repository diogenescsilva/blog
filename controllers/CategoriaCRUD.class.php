<?php

	require_once "models/Categoria.class.php";

	class CategoriaCRUD {

		private $pdo;

		public function __construct() {
			$this->pdo = new PDO('mysql:host=localhost;dbname=blog_diogenes', 'root', '');
		}

		// Adiciona uma nova categoria ao banco de dados
		public function addCategoria($categoria) {
			$sql = "INSERT INTO categoria (nome) VALUES ('{$categoria->getNome()}')";
			$this->pdo->query($sql);
		}

		// Deleta uma categoria pela id
		public function delById($id) {
			$sql = "DELETE FROM categoria WHERE id = $id";
			$stmt = $this->pdo->query($sql);
		}

		// Atualiza uma categoria pela id
		public function upCategoria($categoria) {
			$sql = "UPDATE categoria SET nome='{$categoria->nome}' WHERE id = $categoria->id";
			$this->pdo->query($sql);
		}

		// Retorna todas as categorias em um array
		public function getAll() {
			$sql = "SELECT * FROM categoria";
			$stmt = $this->pdo->prepare($sql);

			$stmt->execute();
			$stmt->fetch(PDO::FETCH_ASSOC);

			$categorias = $stmt->fetchAll();

			return $categorias;
		}

		// Retorna uma categoria pela id
		public function getById($id) {
			$sql = "SELECT * FROM categoria WHERE id = $id";
			$stmt = $this->pdo->prepare($sql);

			$stmt->execute();
			$categoria = $stmt->fetchObject();

			return $categoria;
		}

	}

?>