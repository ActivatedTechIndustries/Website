<script>
// ------------------------------------- View Counter - Beggining ------------------------------------- //	
	
	<?php
					
		if(!isset($_SESSION["view"]))
		{
			echo "var view = 1;";
		}
		else
		{
		echo "var view = 0;";
		}
					
	?>
// ------------------------------------- View Counter - End ------------------------------------- //	
			
// ------------------------------------- View Counter - 2 ------------------------------------- //	
	
		function Add_Total_Views()
		{
			<?php
			
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
			?>
		}
		
		function Add_Parsed_Views()
		{
			<?php
			
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
			?>
		}
				
		function Page_View_Counter(){
				var timeleft = 5;
				var downloadTimer = setInterval(function(){
				  --timeleft;
				  
				  if(timeleft <= 0){
					
						clearInterval(downloadTimer);
					  
						/*if ( localStorage.view)
						{
							alert("IP Already Viewed The Website");
						}
						else
						{
							alert("IP View with Success");
							localStorage.view = "true";
							Add_Parsed_Views();
						}
						
						if(view == 1)
						{
							<?php  $_SESSION["view"] = 1;  ?>
							Add_Total_Views();
							// Não definida, logo adiciona uma view ás Total Views
						
						}*/ // Remove This Comment Piece To Work -  Unable to Testing Platform
				  
				  }   
				  
				},1000);
		}
		
// ------------------------------------- View Counter - 2 ------------------------------------- //	
	</script>