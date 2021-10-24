<?php 
	
	session_start();

	// trabalanhado na montagem do texto
	$titulo = str_replace('#', '-', $_POST['titulo'] );
	$categoria = str_replace('#', '-', $_POST['categoria'] );
	$descricao = str_replace('#', '-', $_POST['descricao'] );


	// implode('#', $_POST); tentar fazer isso com implode

    
	$texto = $_SESSION['id'].'#'. $titulo .'#'. $categoria .'#'. $descricao . PHP_EOL;
	//abrindo arquivo
	$arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');
	// escrevendo aquivo
	fwrite($arquivo, $texto);
	// fechando o arquivo
	fclose($arquivo);

	header('Location: abrir_chamado.php');
	/*
	diga depois fazer uma tele mostrando que o cadastro foi feitao com sucesso.
	*/
;?>