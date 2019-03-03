<?php

	session_start();
	//var_dump($_POST);exit();
	//verificar se o botão de inserir um utilizador foi premido

	if((! isset($_POST["bRegister"])) && (! isset($_POST["b_Register_Phone"])))
	{

		echo "<script>alert('1');</script>";
		echo "<script> window.location.assign('404page/404.html'); </script>";
		exit();
	}

	//Ligar à base de dados a partir de um ficheiro 
	require "start_db.php";
	
	if(isset($_POST["bRegister"]))
	{
		$username = mysqli_real_escape_string($ligacao,$_POST["username"]);
		$email= mysqli_real_escape_string($ligacao,$_POST["email"]);
		$pass = mysqli_real_escape_string($ligacao,$_POST["password"]);
		$country = mysqli_real_escape_string($ligacao,$_POST["country"]);
	}
	else{
		$username = mysqli_real_escape_string($ligacao,$_POST["username_phone"]);
		$email= mysqli_real_escape_string($ligacao,$_POST["email_phone"]);
		$pass = mysqli_real_escape_string($ligacao,$_POST["password_phone"]);
		$country = mysqli_real_escape_string($ligacao,$_POST["country_phone"]);
	}
	
	$sql = " SELECT * FROM users WHERE username='".$username."'";
		
	//echo $sql;exit();
	
	//executar a ordem guardada em $sql;
	$resultado = mysqli_query($ligacao,$sql);
		
	//echo $resultado;exit();
	
	if(! $resultado)
	{
		echo"
			<script>
			alert('Unable to Connect to the Database');
			window.location.assign('404page/404.html')
			</script>";	
		exit();
	}
	
	
//verificar o número de linhas obtidas na consulta
if(mysqli_num_rows($resultado) > 0)
{
	echo"
		<script>
			alert('The User \'".$username."\' is already registered');
			window.location.assign('index.php')
			</script>";	
			exit();
}

//////////////////////// THIS IS WHERE SQL IS WORTHWHILE //////////////////////////////////////////////////////////////////////

//INSERT INTO `users`(`id_user`, `name`, `username`, `email`, `password`, `age`, `country`, `idtype_user`) 
//VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])

	
//inserir o novo utilizador na base de dados
	$sql = "INSERT INTO users(id_user, username, email, password, country, type_user_id_type) 
				VALUES (null,'".$username."', '".$email."' , PASSWORD('".$pass."'), '".$country."', '4')";

		
	//echo $sql;exit();
	
	//executar a ordem guardada em $sql;
	$resultado = mysqli_query($ligacao,$sql);
		
	if(! $resultado)
	{
		echo"
			<script>
			alert('Unable to Add User');
			window.location.assign('index.php')
			</script>";	
		exit();
	}
	else
	{
		echo"
			<script>
			alert('User: \'".$username."\' was successfully added.');
			window.location.assign('index.php')
			</script>";	
		exit();
	}
	
	
?>