<?php

	session_start();
	//var_dump($_POST);exit();
	//verificar se o botão de inserir um utilizador foi premido
	
	if(! isset($_POST["bRegister"]))
	{
		echo "<script> window.location.assign('index.php'); </script>";
		exit();
	}
	
	//Ligar à base de dados a partir de um ficheiro 
	require "start_db.php";

	/*if(! $name = "")
	{
		$name = mysqli_real_escape_string($ligacao,$_POST["name"]);
	}
	else
	{
		$name = NULL;
	}*/
		
	if($_POST["country_register"] != ""){
		$Country = mysqli_real_escape_string($ligacao,$_POST["country_register"]);
	}
	else{
		$Country = mysqli_real_escape_string($ligacao,$_POST["country_register_phone"]);
	}
	
	//echo "Idade: ".$age,$Local,$name;exit();
	if($_POST["password_register"] != ""){
		$pass = mysqli_real_escape_string($ligacao,$_POST["password_register"]);
	}
	else{
		$pass = mysqli_real_escape_string($ligacao,$_POST["password_register_phone"]);
	}
	
	//$confpass = mysqli_real_escape_string($ligacao,$_POST["confpass"]);
	if($_POST["user_register"] != ""){
		$username = mysqli_real_escape_string($ligacao,$_POST["user_register"]);
	}
	else{
		$username = mysqli_real_escape_string($ligacao,$_POST["user_register_phone"]);
	}
	
	if($_POST["email_register"] != ""){
		$email= mysqli_real_escape_string($ligacao,$_POST["email_register"]);
	}
	else{
		$email= mysqli_real_escape_string($ligacao,$_POST["email_register_phone"]);
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
			alert('Unable to Connect to the DB');
			window.location.assign('index.php')
			</script>";	
		exit();
	}
	
	
//verificar o número de linhas obtidas na consulta
if(mysqli_num_rows($resultado)>0)
{
	echo"
		<script>
			alert('The User \'".$username."\' is already registered');
			window.location.assign('index.php')
			</script>";	
			exit();
}

//////////////////////// THIS IS WHERE SQL IS WORTHWHILE //////////////////////////////////////////////////////////////////////

//INSERT INTO `users`(`id_user`, `name`, `username`, `email`, `password`, `age`, `Country`, `idtype_user`) 
//VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])

	
//inserir o novo utilizador na base de dados
	$sql = "INSERT INTO users(id_user, username, email, password, country, type_user_id_type) 
				VALUES (null,'".$username."', '".$email."' , PASSWORD('".$pass."'), '".$Country."', '5')";

		
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