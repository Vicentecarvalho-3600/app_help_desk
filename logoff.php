<?php 

	session_start();
	//remover do array de sessão
	//unset();


	//destruir a variavel de sessão
	session_destroy();

	header('Location: index.php')



;?>