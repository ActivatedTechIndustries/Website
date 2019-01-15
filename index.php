<?php
	session_start();

	require "start_db.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- HTML Page -->
    <title>Activated Tech Industries</title>
    <link rel="icon" type="image/png" href="imagens/favicon_logo.png" />
	<!-- HTML Page -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link  href="style.css" rel="stylesheet">
	<link  href="style_gradient.css" rel="stylesheet">
	<link  href="scrollbar.css" rel="stylesheet">
	<!--font do texto-->
	<link href="https://fonts.googleapis.com/css?family=Nova+Mono" rel="stylesheet">
	<!-------------------->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<?php //include 'timer.php';?>
	<?php include 'random_functions.php';?>
	
	<script>
	function At_Load()
	{
		//Page_View_Counter(); // View Counter Function
		News(); // News Randomizer Function
		Counters();
	}
	</script>
	
</head>

<body id="body1"  style="max-width:100%;overflow-x:hidden; background: rgb(27,35,45);background: -moz-linear-gradient(top, rgba(27,35,45,1) 64%, rgba(27,35,45,1) 85%);background: -webkit-linear-gradient(top, rgba(27,35,45,1) 64%,rgba(27,35,45,1) 85%);background: linear-gradient(to bottom, rgba(27,35,45,1) 64%,rgba(27,35,45,1) 85%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1b232d', endColorstr='#1b232d',GradientType=0 );" onload="AtLoad();">

        <?php include 'default_navbar.php';?>
  <!--//////////////////////////////////////////////////////////////////////////////////////////// Carousel ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	<div class="container-fluid" id="container_1" style="background:transparent;">
		<div class="row">
		<div id="carouselExampleIndicators" class="carousel slide d-none d-lg-block" data-ride="carousel" style="margin-top:0.25%;width:70%;background-color:#333;height:60vh;border-right-color:transparent;">
  <ol class="carousel-indicators" id="Carousel_Indexs">  <!-- Carousel ID !!!!! -->
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div  class="carousel-inner">
    <div class="carousel-item active" >
        <br />
      <img class="d-block "  style="height:40vh;max-width:60%; margin-bottom: 2%;"  src="Imagens/Database.jpg" alt="First slide">
	  <br />
    </div>
    <div class="carousel-item" >
        <br />
      <img class="d-block"  style="height:40vh;margin-bottom: 2%;"  src="Imagens/BLOG_code.jpg" alt="Second slide">
        <br />
    </div>
    <div class="carousel-item">
        <br />
      <img class="d-block "  style="height:40vh; margin-bottom: 2%;"  src="Imagens/background.jpg" alt="Third slide">
        <br />
    </div>
  </div>

  <a class="carousel-control-prev  sides d-flex align-items-center"  style="border-top-right-radius: 20px 20px;border-bottom-right-radius: 20px 20px" href="#carouselExampleIndicators" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon"  aria-hidden="true"></span>
    <span class="sr-only" style="opacity:1;">Previous</span>
  </a>
  
  <a class="carousel-control-next sides2 d-flex align-items-center" style="border-top-left-radius: 20px 20px;border-bottom-left-radius: 20px 20px" href="#carouselExampleIndicators" role="button" data-slide="next"> 
 <span class="carousel-control-next-icon" aria-hidden="true" ></span>
    <span class="sr-only" >Next</span>
  </a>
</div>
			<div id="container1" class="col d-none d-md-block" style="margin-top:0.25%;width:30%;background-color:#333;height:60vh;border:3px;border-style:solid;border-left-color: darkgray;border-right-color: #333;border-top-color: #333;border-bottom-color: #333;">
					<div class="hovereffect d-flex justify-content-center">
					<h1 style="color:white;"> Hello People</h1>
					<div class="overlay d-flex align-items-center" style="overflow:hidden;max-height:59.5vh;height:59.5vh;width:29.5vw;">
						<p class="d-flex justify-content-center" style="position:absolute;background-color:gray; height:80%;width:100%;-webkit-transition:all .4s ease-in-out;transition:all .4s ease-in-out;"> Conteudo </p>
						<h2 style="width:100%;">Hover effect 1</h2>
					</div>
					</div>
			</div>
			<!--Para telemovel-->
			<div id="container1" class="col d-sm-none" style="margin-top:0.25%;width:30%;background-color:#333;height:60vh;border:3px;border-style:solid;border-left-color: darkgray;border-right-color: #333;border-top-color: #333;border-bottom-color: #333;">
					<div class="hovereffect">
					<h1 id="Title" align="center" style="color:white;margin-top: 5%;background-color: #333;"><?php echo $Title ?></h1>
					<div class="overlay " style="overflow:hidden;max-height:59.5vh;height:59.5vh;width:100%;">
						<p class="fluid" style="background-color:gray; height:50%;margin-top:5%;-webkit-transition:all .4s ease-in-out;transition:all .4s ease-in-out;">?php echo $Content ?></p>
						<h2 style="margin-bottom:2%;"><?php echo $Title ?></h2>
						<br>
					</div>
					</div>
			</div>
			<!--Fim de telemovel-->
	</div>
	</div>
	
	<!--////////////////////////////////////////////////////////////////////////////////////////////Carousel End ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
	
	
	<!--////////////////////////////////////////////////////////////////////////////////////////////Horizontal Container ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
			<div id="container_2" class="container-fluid d-none d-lg-block" style="height:50vh; margin-top:4%;overflow:hidden">
				<div class="row">
					<div class="col-md-12" style="overflow:hidden">
						<hr style="background-color: rgba(1,168,183,1); width:95%; height:0.2vh; border-radius:50px; margin-top: -5px;">
						<br>
							<h1 class="align-middle" style="color:#69E0DC;height:12vh;text-align:center; margin-top:2vh"> Miklagard - 'The Great City' <hr style="background-color: white; width:25%; border-radius:50px; margin-top: 1vh;"> </h1>
							<br>
							<p class="align-middle" style="color:#69E0DC;height:12vh;text-align:center; margin-top:1vh">
							The medieval Vikings, who had contacts with the Byzantine empire through their expansion through eastern Europe, used the Old Norse name 'Miklagard' to describe the greatest city that they had ever encountered. These were the meeting grounds for a plethora of cultures and religions, anchoring ships of trade and war from far and wide, gathering all manifestation of interaction between the different collectives. Mikla,  has the same ambition.
							</p>

						<br><br>
					<hr style="background-color: rgba(1,168,183,1); width:95%; height:0.2vh; border-radius:50px; ">
					
					</div>
				</div>
			</div>
			<div id="container_2_Tele" class="container-fluid d-block d-sm-none" style="height:77vh; margin-top:4%;overflow:hidden">
				<div class="row">
					<div class="col-md-12" style="overflow:hidden">
						<hr style="background-color: rgba(1,168,183,1); width:95%; height:0.2vh; border-radius:50px; margin-top: -5px;">
						<br>
							<h1 class="align-middle" style="color:#69E0DC;height:12vh;text-align:center; margin-top:2vh"> Miklagard - 'The Great City' <hr style="background-color: white; width:25%; border-radius:50px; margin-top: 1vh;"> </h1>
							<br>
							<p class="align-middle" style="color:#69E0DC;height:12vh;text-align:center; margin-top:1vh">
							The medieval Vikings, who had contacts with the Byzantine empire through their expansion through eastern Europe, used the Old Norse name 'Miklagard' to describe the greatest city that they had ever encountered. These were the meeting grounds for a plethora of cultures and religions, anchoring ships of trade and war from far and wide, gathering all manifestation of interaction between the different collectives. Mikla,  has the same ambition.
							</p>

						<br>
					<hr style="background-color: rgba(1,168,183,1); width:95%; height:0.2vh; border-radius:50px; margin-top:45%;">
					
					</div>
				</div>
			</div>
		<!--////////////////////////////////////////////////////////////////////////////////////////////News Container ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
			<div class="container-fluid" id="container_news" style="overflow:hidden;">
				  <div class="row justify-content-center align-items-center">
							
							<div class="col-md-4 col-lg-4 col-xl-4 col-sm-4 Container_Conteudo  h-50 text-center" style="margin-top:1vh; background: -webkit-linear-gradient(top, rgba(27,35,45,1) 1%,rgba(27,35,45,1) 10%,rgba(23,118,147,1) 100%);">
							
									<h1 style=" font-weight: bold; font-size: 40px; color: #50c1e5; text-align:center; "> What we've done: </h1>
									<hr style="background-color: white; width:20vw; height:0.2vh; border-radius:50px; margin-top: -5px;">
									<p style="color:white; text-align:center; margin-top: 17%;">Total Website Views</p>
									<h3 style=" font-weight: bold; font-size: 30px; color: white; text-align:center; margin-top: -10px; margin-bottom: -10px;"><?php echo $Website_Views; ?></h3>
									<br>
									
									<hr style="background-color: white; width:15vw; border-radius:50px; margin-top: -5px;">
									<p style="color:white; text-align:center;">    Online Users</p>
									<h3 style=" font-weight: bold; font-size: 30px; color: white; text-align:center; margin-top: -10px; margin-bottom: -10px;"><?php echo $Online_Users; ?></h3>
									<br>
									
									<hr style="background-color: white; width:10vw; border-radius:50px; margin-top: -5px;">
									<p style="color:white; text-align:center;">  Registered Users</p>
									<h3 style=" font-weight: bold; font-size: 30px; color: white; text-align:center; margin-top: -10px; margin-bottom: -10px;"><?php echo $Registererd_Users; ?></h3>
									<br><br>
							</div>

							<div class="col-md-1 col-lg-1 col-xl-1 col-sm-1 Container_Conteudo " style="background-color:transparent;">
									
							</div>	
							<br>
							<div class="col-md-4 col-lg-4 col-xl-4 col-sm-4 h-50 Container_Conteudo text-center" style="margin-top:1vh; background: -webkit-linear-gradient(top, rgba(27,35,45,1) 1%,rgba(27,35,45,1) 10%,rgba(93,20,127,1) 100%);">

                                    <h1 style=" font-weight: bold; font-size: 40px; color: rgba(93,20,127,1); "> Data Science </h1>
                                    <hr style="background-color: white; width:20vw; height:0.2vh; border-radius:50px; margin-top: -5px;">

                                    <p style="color:white; font-weight: bold; text-align:center; margin-top: 17%;"> As company and as consumers ourselves,</p>
                                    <p style="color:white; font-weight: bold; text-align:center; "> we, at Activated Tech Industries, seek to</p>
                                    <p style="color:white; font-weight: bold; text-align:center; "> gather statistical information to test, </p>
                                    <p style="color:white; font-weight: bold; text-align:center; "> examine and share with the rest of our </p>
                                    <p style="color:white; font-weight: bold; text-align:center; "> fellow users, in order to achieve a better</p>
                                    <p style="color:white; font-weight: bold; text-align:center; "> standing in quality and customer service.</p>

                                    <br>

                                    <p style="color:white; font-size: 0.7vw; text-align:right; margin-right: 5px;"> -'Information is only useful when it can be understood.'</p>
                            </div>			
			</div>
		</div>
       <!-- Footer -->
	   		<div class="container-fluid sticky-bottom" style="background:#333;margin-top:5%; height: auto;">
		<div class="row justify-content-center align-items-center"> <br> </div>
		<div class="row justify-content-center align-items-center"> <h3 style="color: #50c1e5;"> <strong>Powered By:</strong></h3> </div>
		<hr style="background-color: rgba(1,168,183,1); width:95%; height:0.1vh; border-radius:50px; margin-bottom: 5vh;">
		<!-- ///////////////////////////////////// Row 1  /////////////////////////////////////-->
			<div class="row justify-content-center align-items-center">
				<div id="carouselExampleIndicators" class="carousel slide d-none d-md-block" data-ride="carousel" style="width:100%;background-color:#333;height:30vh;border-right-color:transparent;">
				  <ol class="carousel-indicators" id="Carousel_Indexs">  <!-- Carousel ID !!!!! -->
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				  </ol>
				  <div  class="carousel-inner">
					<div class="carousel-item active " >
						<br>
					  <img class="d-block" style="height:15vh;max-width:30%;"  src="Imagens/logo_white.png" alt="First slide">
					  <h4 class="text-center" style="color: white;">Activated Tech Industries</h4>
					  <br>
					</div>
					<div class="carousel-item" >
						<br>
					  <img class="d-block"  style="height:15vh;max-width:30%;"  src="Imagens/Warden_Logo.png" alt="Second slide">
					  <h4 class="text-center" style="color: white;">Warden</h4>
						<br>
					</div>
				  </div>
				</div>
				<!--Para telemovel-->
					<div id="carouselExampleIndicators" class="carousel slide d-sm-none" data-ride="carousel" style="width:100%;background-color:#333;height:30vh;border-right-color:transparent;">
				  <ol class="carousel-indicators" id="Carousel_Indexs">  <!-- Carousel ID !!!!! -->
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				  </ol>
				  <div  class="carousel-inner">
					<div class="carousel-item active " >
						<br>
					  <img class="d-block" style="height:12vh;max-width:30%;"  src="Imagens/logo_white.png" alt="First slide">
					  <h4 class="text-center" style="color: white;">Activated Tech Industries</h4>
					  <br>
					</div>
					<div class="carousel-item" >
						<br>
					  <img class="d-block"  style="height:12vh;max-width:30%;"  src="Imagens/Warden_Logo.png" alt="Second slide">
					  <h4 class="text-center" style="color: white;">Warden</h4>
						<br>
					</div>
				  </div>
				</div>
				</div>
			
			<!-- ///////////////////////////////////// Row 1 End /////////////////////////////////////-->
		
		<hr style="background-color: rgba(1,168,183,1); width:95%; height:0.1vh; border-radius:50px; margin-top: 5vh; margin-bottom: 5vh;">
		
		<!-- ///////////////////////////////////// Row 2  /////////////////////////////////////-->
			<div class="row">
				<div class="col-md-6">                 
				
					<ul style="color: #50c1e5;">
					<h4 style="color: #50c1e5;">About</h4>
						<ul >
							<li >
							<a href="">FAQ</a>
							</li>
								<li >
								<a href="">Terms of Use</a>
								</li>
							<li >
							<a href="">Privacy Policy</a>
							</li>
								<li >
								<a href="">Blog</a>
								</li>
							<li >
							<a href="">Giveaway</a>
							</li>
						</ul>
					
					
					</ul>
				
				
				</div> 
				
				<div class="col-md-6">                 
				
					<ul style="color: #50c1e5;">
					<h4 style="color: #50c1e5;">Contacts</h4>
						<ul >
							<li >
							<a href="">Facebook</a>
							</li>
								<li >
								<a href="">Tweeter</a>
								</li>
							<li >
							<a href="">Instagram</a>
							</li>
								<li >
								<a href="">Gmail</a>
								</li>
							<li >
							<a href="">Tele: +351 111 222 22</a>
							</li>
						</ul>
					
					
					</ul>
				
				
				</div> 
				
			</div>
			
			<!-- ///////////////////////////////////// Row 2 End /////////////////////////////////////-->
	     </div>
		 
		 
		 <!-- Footer -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
