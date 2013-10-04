<?php

	class Post {

		private $id;
		private $title;
		private $content;
		private $data;
		private $autor;
		private $categoria;

		public function __construct($id, $title, $content, $data, $autor, $categoria) {
			$this->id = $id;
			$this->title = $title;
			$this->content = $content;
			$this->data = $data;
			$this->autor = $autor;
			$this->categoria = $categoria;
		}

		public function getId() {
			return $this->id;
		}

		public function setId($id) {
			$this->id = $id;
			return $this;
		}

		public function getTitle() {
			return $this->title;
		}

		public function setTitle($title) {
			$this->title = $title;
			return $this;
		}

		public function getContent() {
			return $this->content;
		}

		public function setContent($content) {
			$this->content = $content;
			return $this;
		}

		public function getData() {
			return $this->data;
		}

		public function setData($data) {
			$this->data = $data;
			return $this;
		}

		public function getAutor() {
			return $this->autor;
		}

		public function setAutor($autor) {
			$this->autor = $autor;
			return $this;
		}

		public function getCategoria() {
			return $this->categoria;
		}

		public function setCategoria($categoria) {
			$this->categoria = $categoria;
			return $this;
		}

	}

?>