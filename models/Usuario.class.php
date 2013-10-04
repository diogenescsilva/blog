<?php

	class Usuario {

		private $id;
		private $nome;
		private $email;
		private $senha;
		private $avatar;

		public function __construct($id, $nome, $email, $senha, $avatar) {
			$this->id = $id;
			$this->nome = $nome;
			$this->email = $email;
			$this->senha = $senha;
			$this->avatar = $avatar;
		}

		public function getId() {
			return $this->id;
		}

		public function setId($id) {
			$this->id = $id;
			return $this;
		}

		public function getNome() {
			return $this->nome;
		}

		public function setNome($nome) {
			$this->nome = $nome;
			return $this;
		}

		public function getEmail() {
			return $this->email;
		}

		public function setEmail($email) {
			$this->email = $email;
			return $this;
		}

		public function getSenha() {
			return $this->senha;
		}

		public function setSenha($senha) {
			$this->senha = $senha;
			return $this;
		}

		public function getAvatar() {
			return $this->avatar;
		}

		public function setAvatar($avatar) {
			$this->avatar = $avatar;
			return $this;
		}

	}

?>