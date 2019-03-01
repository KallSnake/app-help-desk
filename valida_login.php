<?php 
	
	
	session_start(); // colocar antes da impressão de dados no navegador ex: echo


	/*
	print_r($_SESSION);
	echo "<hr>";
	*/



	//variavel que verifica se a auntenticacao foi realizada
	$usuario_autenticado = false;
	$usuario_id = null;
	$usuario_perfil_id = null;



	$perfis = array(1 => "Administrativo", 2 => "	Usuário");



	// usuarios do sistema
	$usuarios_app = array(

		array("id" => 1, "email" => "kb.luiscarlos@live.com", "senha" => "123", "perfil_id" => 1),
		array("id" => 2, "email" => "anjo.fernal@gmail.com", "senha" => "123", "perfil_id" => 1),
		array("id" => 3, "email" => "teste1@teste1.com", "senha" => "123", "perfil_id" => 2),
		array("id" => 4, "email" => "teste2@teste2.com", "senha" => "123", "perfil_id" => 2),



	);




	/*
	echo "<pre>";
	print_r($usuarios_app);
	echo "</pre>";
	*/


	foreach ($usuarios_app as $user) {
		
		/*
		print_r($user);
		echo "<hr>";
		*/


		/*
		echo "Usuário app: " . $user["email"] . " / " . $user["senha"];

		echo "<hr>";

		echo "Usuário ftom: " . $_POST["email"] . " / " . $_POST["senha"];
		*/


		if ( $user["email"] == $_POST["email"] && $user["senha"] == $_POST["senha"] ) {

			$usuario_autenticado = true;

			$usuario_id = $user["id"];

			$usuario_perfil_id = $user["perfil_id"];

		}


	}



	if ( $usuario_autenticado ) {

			// echo "Usuário autenticado";

			$_SESSION["autenticado"] = "SIM";

			$_SESSION["id"] = $usuario_id;

			$_SESSION["perfil_id"] = $usuario_perfil_id;

			header("Location: home.php");

		} else {

			// echo "Erro na autenticação do usuário";

			$_SESSION["autenticado"] = "NAO";

			header("Location: index.php?login=erro");

		}


	
	/*
	print_r($_GET);

	echo "<br>";

	echo $_GET["email"];

	echo "<br>";

	echo $_GET["senha"];
	*/


	/*
	print_r($_POST);

	echo "<br>";

	echo $_POST["email"];

	echo "<br>";

	echo $_POST["senha"];
	*/


?>