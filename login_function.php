<?php
	
	session_start(); // Inicialização da Sessão
	//var_dump($_POST);exit();
	
	require "start_db.php"; // Inicia a Base de Dados
	
	if(isset ($_POST["bLogin"]))
	{
		
		if($_POST["email_login"] != "" && $_POST["password_login"] != ""){
			$email= mysqli_real_escape_string($ligacao, $_POST["email_login"]);
			$password = mysqli_real_escape_string($ligacao, $_POST["password_login"]);
		}
		else if($_POST["email_login_phone"] != "" && $_POST["password_login_phone"] != ""){
			$email= mysqli_real_escape_string($ligacao, $_POST["email_login_phone"]);
			$password = mysqli_real_escape_string($ligacao, $_POST["password_login_phone"]);
		}
		else{
			echo"
				<script>
				alert('Dados não Inseridos');
				window.location.assign('404page/404.html')
				</script>";
			exit();
		}
	
		// construir a ordem sql
		$sql = "SELECT * From users, type_users WHERE id_type = type_user_id_type AND
		email='".$email."'";
	
		//echo $sql;exit(); //-- Step 1 - Complete
	
		//Executar a ordem em $sql
		$resultado = mysqli_query($ligacao,$sql);
		
		//echo $sql;exit();
	
		if(!$resultado)
		{
	
			echo"
				<script>
				alert('Não foi possível validar a sessão');
				window.location.assign('404page/404.html')
				</script>";
			exit();
		}
	
		//A Consulta não retornou registos, a variável $registo fica igual a NULL
		//Se a Consulta retornou registos, a variável $registo fica igual a um array com os dados do Utilizador
		
		//$registo = mysqli_fetch_array($resultado);
		//var_dump($registo);exit();
		
		if($registo = mysqli_fetch_array($resultado))
		{
			
			$sql = "SELECT * From users, type_users WHERE id_type = type_user_id_type AND 
			email='".$email."' AND password=PASSWORD('".$password."')";
		
			//echo $sql;exit(); //-- Step 2 - Complete
		
			$resultado = mysqli_query($ligacao,$sql);
		
			if(!$resultado)
			{
				echo"
				<script>
				alert('Não foi possível validar a sessão');
				window.location.assign('404page/404.html')
				</script>";	
				exit();
			}
		
			//Utilizador Existe; Verificar se a password está correta


			if ($registo = mysqli_fetch_array($resultado))
			{
			
				$sql = "UPDATE users SET
				last_login= NOW()  WHERE email='".$email."'";
		
				$resultado = mysqli_query($ligacao,$sql);
		
				if(!$resultado)
				{
					echo"
						<script>
						alert('Não foi possível validar a sessão');
						window.location.assign('404page/404.html')
						</script>";	
						exit();
				}
				// para debug_backtrace
				
				//echo $sql;exit(); -- Step 3 - Complete 
				
				// Password correta, vamos iniciar sessão 	

				$sql = "UPDATE users SET
				status_display=1 WHERE email='".$email."'";
		
				$resultado = mysqli_query($ligacao,$sql);
		
				if(!$resultado)
				{
						echo"
							<script>
							alert('Não foi possível validar a sessão');
							window.location.assign('404page/404.html')
							</script>";	
						exit();
				}		

				$sql = "SELECT * From users, type_users WHERE id_type = type_user_id_type AND 
				email='".$email."' AND password=PASSWORD('".$password."')";
		
				//echo $sql;exit(); //-- Step 2 - Complete
		
				$resultado = mysqli_query($ligacao,$sql);
		
				if(!$resultado)
				{
					echo"
						<script>
						alert('Não foi possível validar a sessão');
						window.location.assign('404page/404.html')
						</script>";	
					exit();
				}

				if($registo = mysqli_fetch_array($resultado)){

					$_SESSION["username"] = $registo["username"];
					$_SESSION["email"] = $email;
					$_SESSION["type"] = $registo["Type"];

					switch ($registo["status_display"])
					{
						case 0:
							$_SESSION["status_inf"] = "Offline"; //Grey
							$_SESSION["status_color"] = "#949494";
							break;
						case 1:
							$_SESSION["status"] = "Online"; //Green
							$_SESSION["status_color"] = "#09ff00";
							break;
						case 2:
							$_SESSION["status"] = "Idle"; //Yellow
							$_SESSION["status_color"] = "#f0ff00";
							break;
						case 3:
							$_SESSION["status"] = "Busy"; //Red
							$_SESSION["status_color"] = "#ff0000";
							break;
						
					} 

				}
				
				// Only Because we Dont Use it Now

				//var_dump($_SESSION);exit();
				
				echo"
				<script>
				alert('Login was successfully verified.');
				window.location.assign('index.php')
				</script>";
				exit();
				
			}
			else
			{
				//$_SESSION["erro_login"] ="A palavra passe está incorreta.";
				echo"
				<script>
				alert('A Palavra Passe está incorreta');
				window.location.assign('index.php')
				</script>";
				exit();
			}
			
		}
		else
		{  // o utilizador não existe
			//$_SESSION["erro_login"] ="O Email está incorreto.";
			echo"
				<script>
				alert('O Email está incorreto');
				window.location.assign('index.php')
				</script>";
			exit();
		}

	}
	else{
		echo"
			<script>
			alert('Não foi possível validar a sessão');
			window.location.assign('404page/404.html')
			</script>";
		exit();
	}
	
?>