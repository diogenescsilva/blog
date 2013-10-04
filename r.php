<?php

	require_once "controllers/CategoriaCRUD.class.php";
	require_once "controllers/UsuarioCRUD.class.php";
	require_once "controllers/PostCRUD.class.php";

	$crud_categoria = new CategoriaCRUD();
	$crud_usuario = new UsuarioCRUD();
	$crud_post = new PostCRUD();


	if(isset($_GET['pg'])) {
		if(!isset($_SESSION)) {
			session_start();
		}
		switch ($_GET['pg']) {
			case 'index':
				$posts = $crud_post->getAll();
				$categorias = $crud_categoria->getAll();
				$crud_u = new UsuarioCRUD();
				$crud_c = new CategoriaCRUD();
				require_once "index.php";
				break;
			case 'exibir-post':
				$post = $crud_post->getById($_GET['id']);
				$categorias = $crud_categoria->getAll();
				$crud_u = new UsuarioCRUD();
				$crud_c = new CategoriaCRUD();
				require_once "views/exibir-post.php";
				break;
			case 'exibir-categoria':
				$posts = $crud_post->getAllByCategoria($_GET['id']);
				$categorias = $crud_categoria->getAll();
				$crud_u = new UsuarioCRUD();
				$crud_c = new CategoriaCRUD();
				require_once "views/exibir-categoria.php";
				break;
			case 'login':
				require_once "views/login.php";
				break;
			case 'logout':
				unset($_SESSION['login']);
				unset($_SESSION['usuario_id']);
				unset($_SESSION['usuario_nome']);
				if(!isset($_SESSION)) {
					session_destroy();
				}
				require_once "index.php";
				break;
			case 'admin':
				if(isset($_SESSION['login']) AND $_SESSION['login'] == true) {
					require_once "views/admin/painel.php";
				} else {
					require_once "views/500.php";
				}
				break;
			case 'cadastrar-categoria':
				if(isset($_SESSION['login']) AND $_SESSION['login'] == true) {
					require_once "views/admin/cadastrar-categoria.php";
				} else {
					require_once "views/500.php";
				}
				break;
			case 'listar-categorias':
				if(isset($_SESSION['login']) AND $_SESSION['login'] == true) {
					$categorias = $crud_categoria->getAll();
					require_once "views/admin/listar-categorias.php";
				} else {
					require_once "views/500.php";
				}
				break;
			case 'excluir-categoria':
				if(isset($_SESSION['login']) AND $_SESSION['login'] == true) {
					$crud_categoria->delById($_GET['id']);
					$categorias = $crud_categoria->getAll();
					require_once "views/admin/listar-categorias.php";
				} else {
					require_once "views/500.php";
				}
				break;
			case 'editar-categoria':
				if(isset($_SESSION['login']) AND $_SESSION['login'] == true) {
					$categoria = $crud_categoria->getById($_GET['id']);
					require_once "views/admin/editar-categoria.php";
				} else {
					require_once "views/500.php";
				}
				break;
			case 'cadastrar-usuario':
				if(isset($_SESSION['login']) AND $_SESSION['login'] == true) {
					require_once "views/admin/cadastrar-usuario.php";
				} else {
					require_once "views/500.php";
				}
				break;
			case 'listar-usuarios':
				if(isset($_SESSION['login']) AND $_SESSION['login'] == true) {
					$usuarios = $crud_usuario->getAll();
					require_once "views/admin/listar-usuarios.php";
				} else {
					require_once "views/500.php";
				}
				break;
			case 'excluir-usuario':
				if(isset($_SESSION['login']) AND $_SESSION['login'] == true) {
					$crud_usuario->delById($_GET['id']);
					$usuarios = $crud_usuario->getAll();
					require_once "views/admin/listar-usuarios.php";
				} else {
					require_once "views/500.php";
				}
				break;
			case 'editar-usuario':
				if(isset($_SESSION['login']) AND $_SESSION['login'] == true) {
					$usuario = $crud_usuario->getById($_GET['id']);
					require_once "views/admin/editar-usuario.php";
				} else {
					require_once "views/500.php";
				}
				break;
			case 'cadastrar-post':
				if(isset($_SESSION['login']) AND $_SESSION['login'] == true) {
					$categorias = $crud_categoria->getAll();
					require_once "views/admin/cadastrar-post.php";
				} else {
					require_once "views/500.php";
				}
				break;
			case 'listar-posts':
				if(isset($_SESSION['login']) AND $_SESSION['login'] == true) {
					$posts = $crud_post->getAll();
					require_once "views/admin/listar-posts.php";
				} else {
					require_once "views/500.php";
				}
				break;
			case 'excluir-post':
				if(isset($_SESSION['login']) AND $_SESSION['login'] == true) {
					$crud_post->delById($_GET['id']);
					$posts = $crud_post->getAll();
					require_once "views/admin/listar-posts.php";
				} else {
					require_once "views/500.php";
				}
				break;
			case 'editar-post':
				if(isset($_SESSION['login']) AND $_SESSION['login'] == true) {
					$post = $crud_post->getById($_GET['id']);
					$categorias = $crud_categoria->getAll();
					require_once "views/admin/editar-post.php";
				} else {
					require_once "views/500.php";
				}
				break;
			default:
				require_once "views/404.php";
				break;
		}
	}

	if(isset($_POST['do'])) {
		switch ($_POST['do']) {
			case 'enviar-email':
				mail($_POST['email'], $_POST['titulo'], $_POST['conteudo']);
				break;
			case 'cadastrar-categoria':
				$categoria = new Categoria(null, $_POST['nome']);
				$crud_categoria->addCategoria($categoria);
				unset($categoria);
				unset($_POST['do']);
				unset($_POST['nome']);
				$success = true;
				break;
			case 'editar-categoria':
				$categoria = $crud_categoria->getById($_GET['id']);
				$categoria->nome = $_POST['nome'];
				$crud_categoria->upCategoria($categoria);
				$success = true;
				unset($_POST['do']);
				unset($_POST['nome']);
				break;
			case 'cadastrar-usuario':
				$avatar = $_FILES['avatar'];
				if(!empty($avatar['name'])) {
					// Pega a extensão do arquivo
					preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $avatar['name'], $ext);
					// Gera um nome único para o arquivo
					$nome = md5(uniqid(time())) . '.' . $ext[1];
					// Gera um caminho único para o arquivo
					$caminho = 'media/' . $nome;
					// Move o arquivo para o caminho indicado
					move_uploaded_file($avatar['tmp_name'], $caminho);
				} else {
					$caminho = NULL;
				}

				$usuario = new Usuario(null, $_POST['nome'], $_POST['email'], $_POST['senha'], $caminho);
				$crud_usuario->addUsuario($usuario);

				$success = true;
				unset($avatar);
				unset($ext);
				unset($nome);
				unset($caminho);
				unset($usuario);
				unset($_POST['do']);
				unset($_POST['nome']);
				unset($_POST['email']);
				unset($_POST['senha']);
				unset($_FILES['avatar']);
				break;
			case 'editar-usuario':
				$avatar = $_FILES['avatar'];
				if(!empty($avatar['name'])) {
					// Pega a extensão do arquivo
					preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $avatar['name'], $ext);
					// Gera um nome único para o arquivo
					$nome = md5(uniqid(time())) . '.' . $ext[1];
					// Gera um caminho único para o arquivo
					$caminho = 'media/' . $nome;
					// Move o arquivo para o caminho indicado
					move_uploaded_file($avatar['tmp_name'], $caminho);
				} else {
					$caminho = NULL;
				}

				$usuario = $crud_usuario->getById($_GET['id']);
				$usuario->nome = $_POST['nome'];
				$usuario->email = $_POST['email'];
				$usuario->senha = $_POST['senha'];
				$usuario->avatar = $caminho;
				$crud_usuario->upUsuario($usuario);

				$success = true;
				unset($avatar);
				unset($ext);
				unset($nome);
				unset($caminho);
				unset($_POST['do']);
				unset($_POST['nome']);
				unset($_POST['email']);
				unset($_POST['senha']);
				unset($_FILES['avatar']);
				break;
			case 'cadastrar-post':
				$data = date("Y-m-d  H:i:s", time());
				$post = new Post(null, $_POST['titulo'], $_POST['conteudo'], $data, $_POST['usuario'], $_POST['categoria']);
				$crud_post->addPost($post);

				$success = true;
				unset($data);
				unset($post);
				unset($_POST['do']);
				unset($_POST['titulo']);
				unset($_POST['conteudo']);
				unset($_POST['usuario']);
				unset($_POST['categoria']);
				break;
			case 'editar-post':
				$post = $crud_post->getById($_GET['id']);
				$post->title = $_POST['titulo'];
				$post->content = $_POST['conteudo'];
				$post->categoria = $_POST['categoria'];
				$crud_post->upPost($post);

				$success = true;
				unset($_POST['do']);
				unset($_POST['titulo']);
				unset($_POST['conteudo']);
				unset($_POST['categoria']);
				break;
			case 'login':
				$usuario = $crud_usuario->login($_POST['email'], $_POST['senha']);

				if(!isset($_SESSION)) {
					session_start();
				}

				if($usuario) {
					$_SESSION['login'] = true;
					$_SESSION['usuario_id'] = $usuario->id;
					$_SESSION['usuario_nome'] = $usuario->nome;
					require_once "views/admin/painel.php";
				} else {
					$_SESSION['login'] = false;
					require_once "views/login.php";
				}
				
				unset($usuario);
				unset($_POST['do']);
				unset($_POST['email']);
				unset($_POST['senha']);
				break;
			default:
				# code...
				break;
		}
	}

?>