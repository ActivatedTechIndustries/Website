<?php

		$ligacao = mysqli_connect("localhost","root","","activatedtechindustries");
		
		if(!$ligacao)
		{
			echo"
			<script>
				alert('Não foi possivel ligar ao servidor');
				window.location.assign('index.php')
				</script>
				";
				exit();
		}
		// apresentar os dados do utilizador
		
		mysqli_set_charset($ligacao,"utf8");
?>