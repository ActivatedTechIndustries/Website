<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
	
				
		function Page_View_Counter(){
				var downloadTimer = setInterval(function(){
					
						clearInterval(downloadTimer);
					  
						if ( localStorage.view)
						{
							<?php echo "IP Already Viewed The Website"; ?>
						}
						else
						{
							
							<?php echo "IP View with Success"; ?>
							localStorage.view = "true";
							
							$.post(
								"post_timer.php",
								{
									Parsed_View: true
								}
							);
						}
						
						if(view != 1)
						{
							<?php  $_SESSION["view"] = 1;  ?>
							$.post(
								"post_timer.php",
								{
									Total_View: true
								}
							);
							// Não definida, logo adiciona uma view ás Total Views
						
						} // Remove This Comment Piece To Work -  Unable to Testing Platform
				  
				},5000);
		}
		
// ------------------------------------- View Counter - 2 ------------------------------------- //	
	</script>
