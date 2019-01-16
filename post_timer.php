<?php
			
		require "start_db.php";

		if(isset($_POST["Total_View"]) || isset($_POST["Parsed_View"]))
		{
				if(isset($_POST["Parsed_View"]))
				{
			
					$sql = "UPDATE counters_mikla SET counter=counter+1 WHERE text='Parsed_Number_Views' ";
					
					//echo $sql;exit();
					
					//Executar a ordem em $sql
					$resultado = mysqli_query($ligacao,$sql);
						
					//echo $sql;exit();
					
					if(!$resultado)
					{
					
						echo"
							alert('Não foi possível ligar á base de dados (Ordem não executada)');";
					}
					else
					{
						echo"
							alert('Ordem Executada com Sucesso');";
					}
					
					//var_dump($_SESSION);exit();
				}
				
				$sql = "UPDATE counters_mikla SET counter=counter+1 WHERE text='Total_Number_Views' ";
						
				//echo $sql;exit();
						
				//Executar a ordem em $sql
				$resultado = mysqli_query($ligacao,$sql);
							
				//echo $sql;exit();
						
				if(!$resultado)
				{
						
					echo"
						alert('Não foi possível ligar á base de dados Ordem não executada');";
				}
				else
				{
					echo"
						alert('Ordem Executada com Sucesso');";
				}
		}
		
?>
