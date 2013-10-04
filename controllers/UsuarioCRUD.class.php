<?php

	require_once "models/Usuario.class.php";

	class UsuarioCRUD {

		private $pdo;

		public function __construct() {
			$this->pdo = new PDO('mysql:host=localhost;dbname=blog_diogenes', 'root', '');
		}

		// Adiciona um novo usuario ao banco de dados
		public function addUsuario($usuario) {
			$sql = "INSERT INTO usuario (nome, email, senha, avatar) VALUES ('{$usuario->getNome()}', '{$usuario->getEmail()}', '{$usuario->getSenha()}', '{$usuario->getAvatar()}')";
			$this->pdo->query($sql);
		}

		// Deleta um usuário pela id
		public function delById($id) {
			$sql = "DELETE FROM usuario WHERE id = $id";
			$stmt = $this->pdo->query($sql);
		}

		// Atualiza um usuário pela id
		public function upUsuario($usuario) {
			$sql = "UPDATE usuario SET nome='{$usuario->nome}', email='{$usuario->email}', senha='{$usuario->senha}', avatar='{$usuario->avatar}' WHERE id = $usuario->id";
			$this->pdo->query($sql);
		}

		// Retorna todas os usuários em um array
		public function getAll() {
			$sql = "SELECT * FROM usuario";
			$stmt = $this->pdo->prepare($sql);

			$stmt->execute();
			$stmt->fetch(PDO::FETCH_ASSOC);

			$usuarios = $stmt->fetchAll();

			return $usuarios;
		}

		// Retorna um usuário pela id
		public function getById($id) {
			$sql = "SELECT * FROM usuario WHERE id = $id";
			$stmt = $this->pdo->prepare($sql);

			$stmt->execute();
			$usuario = $stmt->fetchObject();

			return $usuario;
		}

		// Procura um usuário pelo email e senha
		public function login($email, $senha) {
			$stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE email = ? AND senha = ?");
			
			$stmt->bindParam(1, $email, PDO::PARAM_STR);
			$stmt->bindParam(2, $senha, PDO::PARAM_STR);

			$stmt->execute();

			$usuario = $stmt->fetchObject();

			return $usuario;
		}

	}

?>