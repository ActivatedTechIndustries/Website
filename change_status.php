<?php

	session_start(); // Inicialização da Sessão
	//var_dump($_POST);exit();
	
	//echo "123";exit();

	//$("#logged_in_navbar").load("change_status.php?Change_Status_Number="+number_status);

	require "start_db.php"; // Inicia a Base de Dados

	if(isset($_POST["Change_Status_Number"]))
	{

		$sql_query ="UPDATE users SET status_display=".$_POST["Change_Status_Number"]." WHERE username='".$_SESSION["username"]."'";

		$resultado = mysqli_query($ligacao,$sql_query);

		if(!$resultado)
		{
								
			echo"<script>
				alert('Não foi possível ligar á base de dados (Ordem não executada)');window.location.assign('404page/404.html')</script>";
		}
		else{
			$_SESSION["status_number"] = $_POST["Change_Status_Number"];
		}
	}

?>