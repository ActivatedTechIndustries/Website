<script>
function News(){
<?php
	
	/*$sql_mikla_news = "SELECT id_data_mikla FROM data_mikla";

	$resultado = mysqli_query($ligacao,$sql_data_mikla);
						
	//echo $sql_data_news;exit();
					
	if(!$resultado)
	{
					
		echo"
			alert('Não foi possível ligar á base de dados (Ordem não executada) 1');window.location.assign('404page/404.html')";
	}
	else
	{
		echo"Ordem Executada com Sucesso 1";

		$number=0;
		$number = rand(1, mysqli_num_rows($resultado));

		$sql = "SELECT * FROM data_mikla WHERE id_data_mikla='".$number."'";
				
		//echo $number;
				
		//echo $sql;

		//Executar a ordem em $sql
		$resultado = mysqli_query($ligacao,$sql);
						
		//echo $sql;exit();
					
		if(!$resultado)
		{
					
			echo"
				alert('Não foi possível ligar á base de dados (Ordem não executada) 2');window.location.assign('404page/404.html')";
		}
		else
		{
			echo"Ordem Executada com Sucesso 2";
				
			while($registo = mysqli_fetch_array($resultado))
			{
				$Title = $registo["title"];
				$Content = $registo["content"];
				$Image = $registo["image"];
			}
				
		}
	}
					
	//var_dump($_SESSION);exit();*/
?>
}
function Total_Website_Views()
{
	<?php
	$sql_data_mikla = "SELECT * FROM data_mikla  WHERE type='Total_Number_Views'";

	$resultado = mysqli_query($ligacao,$sql_data_mikla);
						
	//echo $sql_counters_mikla;exit();
					
	if(!$resultado)
	{
					
		echo"
			alert('Não foi possível ligar á base de dados (Ordem não executada) ');window.location.assign('404page/404.html')";
	}
	else
	{
		echo"Ordem Executada com Sucesso";
				
			//echo $registo;exit();
			
			//var_dump($registo = mysqli_fetch_array($resultado));exit();
			
			
			while($registo = mysqli_fetch_array($resultado))
			{
				$Total_Number_Views = $registo["count"];
			}
				
	}
	?>
}
function Total_Online_Users()
{
	<?php
	$sql_data_mikla = "SELECT * FROM data_mikla  WHERE type='Currently_Online'";

	$resultado = mysqli_query($ligacao,$sql_data_mikla);
						
	//echo $sql_count_mikla;exit();
					
	if(!$resultado)
	{
					
		echo"
			alert('Não foi possível ligar á base de dados (Ordem não executada) ');window.location.assign('404page/404.html')";
	}
	else
	{
		echo"Ordem Executada com Sucesso";
				
			//echo $registo;exit();
			
			//var_dump($registo = mysqli_fetch_array($resultado));exit();
			
			
			while($registo = mysqli_fetch_array($resultado))
			{
				$Currently_Online = $registo["count"];
			}
				
	}
	?>
}
function Total_Registered_Users()
{
	<?php
	$sql_data_mikla = "SELECT * FROM data_mikla  WHERE type='Total_Registered'";

	$resultado = mysqli_query($ligacao,$sql_data_mikla);
						
	//echo $sql_counters_mikla;exit();
					
	if(!$resultado)
	{
					
		echo"
			alert('Não foi possível ligar á base de dados (Ordem não executada) ');window.location.assign('404page/404.html')";
	}
	else
	{
		echo"Ordem Executada com Sucesso";
				
			//echo $registo;exit();
			
			//var_dump($registo = mysqli_fetch_array($resultado));exit();
			
			
			while($registo = mysqli_fetch_array($resultado))
			{
				$Total_Registered = $registo["count"];
			}
				
	}
	?>
}
function Counters()
{
	Total_Website_Views();
	Total_Online_Users();
	Total_Registered_Users();
}
</script>
