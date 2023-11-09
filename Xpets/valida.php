<?php session_start();

	require('conexao.php');


	if (isset($_POST['nome_login'])) {      
	
		/* RECEBENDO OS DADOS VIA POST DO FORMULÁRIO */

		$nome_login = $_POST['nome_login'];
		$senha_login = md5($_POST['senha_login']);


		/* VALIDANDO OS DADOS NO TABELA LOGIN */
	
		$sql_valida_login = mysqli_query($conexao,"SELECT * FROM login WHERE nome_login = '".$nome_login."' AND senha_login = '".$senha_login."'");
		
		if(mysqli_num_rows($sql_valida_login) > 0){
	
			$registros_login = mysqli_fetch_assoc($sql_valida_login);
				 
			$_SESSION['nome_completo_login'] = $registros_login['nome_completo_login'];
			$_SESSION['nome_login'] = $registros_login['nome_login'];
			$_SESSION['tipo_login'] = $registros_login['tipo_login'];


			$_SESSION['url'] = $url;
			$_SESSION['url_admin'] = $url_admin;
					
			
				if($_SESSION['tipo_login'] == 0){

					echo "<script> alert('Administrador [LOGADO]');</script>";

					echo "<script> window.location.href='$url_admin';</script>";
					
				}else{

					echo "<script> alert('Aluno [LOGADO]');</script>";

					echo "<script> window.location.href='$url_aluno';</script>";

				}
			
		} else {

			echo "<script> alert('Erro ao fazer login. Tente novamente ou fale com o Administrador.');</script>";

			echo "<script> window.location.href='$url';</script>";
			
		}

	}

?> 