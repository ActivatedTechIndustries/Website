<script>
// ------------------------------------- View Counter - Beggining ------------------------------------- //	
<?php
					
		if(isset($_SESSION["view"]) &&  $_SESSION["view"] == 1)
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
				
		function Page_View_Counter(){
				var downloadTimer = setInterval(function(){
						//alert("1");
						clearInterval(downloadTimer);
						
						//alert("Entrou");
				
						if ( localStorage.view)
						{
								//alert("IP Already Viewed The Website");
							<?php //echo "//IP Already Viewed The Website"; ?>
						}
						else
						{
							//alert("IP View with Success");
							<?php //echo "//IP View with Success"; ?>
							localStorage.view = "true";
							
							$.post(
								"post_timer.php",
								{
									Parsed_View: true
								}
							,function(resposta, estado){
							//alert(resposta + " " + estado);
							})
									.done(function() {
			//alert( "sucesso" );
		})
		.fail(function() {
			//alert( "erro" );
		})
		.always(function() {
			//alert( "terminou" );
		});
						}
						
						if(view != 1)
						{
							//alert("Total View");
		$.post(
			"post_timer.php",
			{
				Total_View: true
			},
			function(resposta, estado) {
				//alert(resposta + " " + estado);
				//$("#contentor").prop("innerHTML", resposta);
			}
		)
		.done(function() {
			//alert( "sucesso" );
		})
		.fail(function() {
			//alert( "erro" );
		})
		.always(function() {
			//alert( "terminou" );
		});
							// Não definida, logo adiciona uma view ás Total Views
						
						} // Remove This Comment Piece To Work -  Unable to Testing Platform
				   
				  
				},5000); 
				//alert("2");
		}
		
// ------------------------------------- View Counter - 2 ------------------------------------- //	
	</script>
	
