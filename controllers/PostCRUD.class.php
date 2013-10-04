<?php

	require_once "models/Post.class.php";

	class PostCRUD {

		private $pdo;

		public function __construct() {
			$this->pdo = new PDO('mysql:host=localhost;dbname=blog_diogenes', 'root', '');
		}

		// Adiciona um novo post ao banco de dados
		public function addPost($post) {
			$sql = "INSERT INTO post (title, content, data, autor, categoria) VALUES ('{$post->getTitle()}', '{$post->getContent()}', '{$post->getData()}', '{$post->getAutor()}', '{$post->getCategoria()}')";
			$this->pdo->query($sql);
		}

		// Deleta um post pelo id
		public function delById($id) {
			$sql = "DELETE FROM post WHERE id = $id";
			$stmt = $this->pdo->query($sql);
		}

		// Atualiza um post pelo id
		public function upPost($post) {
			$sql = "UPDATE post SET title='{$post->title}', content='{$post->content}', categoria='{$post->categoria}' WHERE id = $post->id";
			$this->pdo->query($sql);
		}

		// Retorna todas os posts em um array
		public function getAll() {
			$sql = "SELECT * FROM post";
			$stmt = $this->pdo->prepare($sql);

			$stmt->execute();
			$stmt->fetch(PDO::FETCH_ASSOC);

			$posts = $stmt->fetchAll();

			return $posts;
		}

		// Retorna todas os posts em um array por categoria
		public function getAllByCategoria($id) {
			$sql = "SELECT * FROM post WHERE categoria = $id";
			$stmt = $this->pdo->prepare($sql);

			$stmt->execute();
			$stmt->fetch(PDO::FETCH_ASSOC);

			$posts = $stmt->fetchAll();

			return $posts;
		}

		// Retorna um post pelo id
		public function getById($id) {
			$sql = "SELECT * FROM post WHERE id = $id";
			$stmt = $this->pdo->prepare($sql);

			$stmt->execute();
			$post = $stmt->fetchObject();

			return $post;
		}

	}

?>