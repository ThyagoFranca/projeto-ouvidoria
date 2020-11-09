<?php
	require_once("includes/conexao.php");
	require_once("classes/ouvidoria.php");

	if(!isset($_POST)){
		header("Location: cadastrar.html");
		exit;
	}

	if (!isset($_POST['nome'],$_POST['mensagem']) || empty($_POST['nome']) || empty($_POST['mensagem'])){
		header('Location: cadastrar.html');
		exit;
	}

	$obj = new ouvidoria();

	$obj->nome = $_POST['nome'];
	$obj->email = $_POST['email'];
	$obj->cpf = $_POST['cpf'];
	$obj->rg = $_POST['rg'];
	$obj->cep = $_POST['cep'];
	$obj->logradouro = $_POST['logradouro'];
	$obj->numero = $_POST['numero'];
	$obj->complemento = $_POST['complemento'];
	$obj->bairro = $_POST['bairro'];
	$obj->cidade = $_POST['cidade'];
	$obj->uf = $_POST['uf'];
	$obj->pais = $_POST['pais'];
	$obj->telefone_ddd = $_POST['telefone_ddd'];
	$obj->telefone = $_POST['telefone'];
	$obj->celular_ddd = $_POST['celular_ddd'];
	$obj->celular = $_POST['celular'];
	$obj->mensagem = $_POST['mensagem'];

	$obj->cadastrar();

	session_start();
	$_SESSION['protocolo'] = 'O seu protocolo da Ouvidoria é ' . $obj->protocolo;

	header("Location: index.php");