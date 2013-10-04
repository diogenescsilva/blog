<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
	<title>Blog do Diógenes</title>
	<style>
		* {
			margin: 0;
			padding: 0;
		}
		body {
			background: #f6f6f6;
			line-height: 21px;
			font-family: 'Arial', sans-serif;
			font-size: 15px;
			color: #444;
		}
		a {
			text-decoration: none;
		}
		a:hover {
			text-decoration: underline;
		}
		table {
			border-collapse: collapse;
			width: 100%;
		}
		table thead tr th,
		table tbody tr td {
			padding: 4px;
			border: 1px solid #fff;
		}
		table tbody tr:nth-child(2n+1) {
			background: #fafafa;
		}
		table tbody tr:hover {
			background: #f0f0f0;
		}
		table thead tr th {
			border-bottom: 1px solid #dfdfdf;
			background: #f0f0f0;
		}
		table thead tr th#list-options {
			width: 30%;
		}
		table tbody tr td.list-id {
			text-align: center;
		}
		.btn {
			display: block;
			padding: 4px;
			margin: -4px;
			cursor: pointer;
		}
		.btn:hover {
			background: #dfdfdf;
			color: #444;
		}
		.btn img {
			display: inline-block;
			float: left;
		}

		#wrapper {
			margin: 0 auto;
			margin-top: 30px;
			padding: 15px;
			border-radius: 3px;
			box-shadow: 0 0 5px -1px rgba(0, 0, 0, 0.15);
			background: #fff;
			width: 900px;
		}

		#header {
			margin-bottom: 30px;
		}
		#header h1 a {
			color: #005b96;
		}

		#menu {
			margin: 0 -15px;
			margin-bottom: 30px;
			padding: 15px;
			background: #a3b0be;
		}
		#menu ul {
			list-style: none;
		}
		#menu ul li {
			float: left;
			margin-right: 15px;
		}
		#menu ul li a {
			display: block;
			padding: 3px 8px;
			box-shadow: 1px 1px 5px -1px rgba(0, 0, 0, 0.15);
			border-radius: 3px;
			background: #ccddee;
			color: #444;
		}
		#menu ul li a:hover {
			background: #cc3f19;
			text-decoration: none;
			color: #fff;
		}

		#content {
			width: 580px;
		}
		#content h2 {
			border-bottom: 1px solid #ccc;
			padding-bottom: 10px;
			margin-bottom: 15px;
		}

		#form .form-row {
			margin-bottom: 15px;
		}
		#form .form-row label {
			display: inline-block;
			width: 11.5%;
		}
		#form .form-row.text-area label {
			vertical-align: top;
		}
		#form .form-row img {
			border: 1px solid #ccc;
			padding: 3px;
			border-radius: 3px;
			margin-left: 12%;
			width: 160px;
			height: 160px;
		}
		#form .form-row input,
		#form .form-row select,
		#form .form-row textarea {
			outline: none;
			width: 40%;
		}
		#form .form-row select {
			width: 42%;
		}
		#form .form-row input:focus,
		#form .form-row textarea:focus,
		#form .form-row select:focus {
			background: #f3f3f3;
		}
		#form .form-row input[type="text"],
		#form .form-row select,
		#form .form-row input[type="email"],
		#form .form-row textarea,
		#form .form-row input[type="password"] {
			box-shadow: inset 1px 1px 3px rgba(0, 0, 0, 0.15);
			border-radius: 3px;
			padding: 5px;
			border: 1px solid #ccc;
		}
		#form .form-row input[type="submit"] {
			margin-left: 12%;
			cursor: pointer;
			padding: 6px 4px;
			border-radius: 3px;
			border: none;
			background: linear-gradient(to top, #4c8cb5 30%, #669cc0 70%);
			color: #fff;
			text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
			width: 15%;
		}
		#form .form-row input[type="submit"]:hover {
			background: linear-gradient(to bottom, #4c8cb5 30%, #669cc0 70%);
		}

		#sidebar {
			width: 300px;
		}

		#footer {
			margin-top: 30px;
			padding-top: 30px;
			border-top: 1px solid #ccc;
			text-align: center;
		}
		.success,
		.alert {
			text-align: center;
			width: 50.5%;
			padding: 4px;
			border-radius: 3px;
			background: #c72a00;
			font-size: 13px;
			color: #fff;
		}
		.success {
			background: #0fff00;
		}
		.log {
			line-height: 26px;
		}

		/*Elemenos globais*/
		.left {
			float: left;
		}
		.right {
			float: right;
		}
		.clearfix {
			zoom: 1
		}
		.clearfix:after{
			display: block;
			visibility: hidden;
			height: 0;
			clear: both;
			content: "."
		}
		.post  {
			border-bottom: 1px solid #ccc;
			padding-bottom: 15px;
			margin-bottom: 60px;
		}
		.post .title {
			line-height: 28px !important;
			padding-bottom: 5px !important;
			margin-bottom: 5px !important;
		}
		.post .info {
			margin-bottom: 30px;
		}
		.post .info .avatar {
			margin-right: 5px;
			padding: 3px;
			border: 1px solid #ccc;
			border-radius: 9999px;
			display: inline-block;
			width: 28px;
			height: 28px;
		}
		.post .info .log {
			margin-top: 5px;
			line-height: 13px;
			font-size: 12px;
		}
		.widget {
			background: #fafafa;
			padding: 10px;
			border-radius: 3px;
			border: 1px solid #f0f0f0;
			margin-bottom: 30px;
		}
		.widget .widget-title {
			font-weight: bold;
		}
		.widget ul {
			list-style: none;
		}
		.form-email {
			padding-top: 5px;
		}
		.form-email input {
			float: right;
		}
		.form-email img {
			float: right;
		}
		.enviar-email {
			margin-top: 3px;
			text-indent: -9999px;
			width: 20px;
			height: 20px;
			background: url('img/email.png') !important;
			border: none;
			display: block;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div id="wrapper">
		<header id="header">
			<h1><a href="r.php?pg=index" title="Blog do Diógenes">Blog do Diógenes</a></h1>
			<?php if(!isset($_GET['pg']) AND !isset($_POST['do']) OR isset($_GET['pg']) AND $_GET['pg'] == 'logout') : ?>
			<meta http-equiv="refresh" content="0; url=?pg=index" />
		<?php endif; ?>
		</header>
		<nav id="menu">
			<ul class="clearfix">
				<li><a href="r.php?pg=index" title="Página Inicial">Início</a></li>
				<?php if(isset($_SESSION['login']) AND $_SESSION['login'] == true) : ?>
				<li><a href="r.php?pg=admin" title="Painel de controle">Painel</a></li>
				<li><a href="r.php?pg=logout" title="Saia da sua conta">Sair</a></li>
				<li class="log"><b><?php echo $_SESSION['usuario_nome']; ?></b>, seja bem-vindo ao seu painel de controle!</li>
				<?php else : ?>
				<li><a href="r.php?pg=login" title="Entre com sua conta">Login</a></li>
				<?php endif; ?>
			</ul>
		</nav>
		<div class="clearfix">
			<?php include "r.php"; ?>