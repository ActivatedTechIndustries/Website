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
	<link href="style_logged_in.css" rel="stylesheet">
	<link href="style_support.css" rel="stylesheet">
	<!--fonts-->
	<link href="https://fonts.googleapis.com/css?family=Nova+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
	<!-------------------->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<?php include 'timer.php';?>
	<?php include 'random_functions.php';?>
	
	<script>
	function At_Load()
	{
		Page_View_Counter(); // View Counter Function
		News(); // News Randomizer Function
		Counters();
	}
	 // Faz a scrollbar subir
	 $(document).ready(function(){

	  $(window).scroll(function(){
		if($(this).scrollTop() > 40){
		  $('#topBtn').fadeIn();
		} else{
		  $('#topBtn').fadeOut();
		}
	  });
	  });
			jQuery(document).ready(function() {
            jQuery('#topBtn').click(function(event) {
                event.preventDefault();
                jQuery('html, body').animate({scrollTop: 0}, 300);
            })
			jQuery('.go_to_top_tele').click(function(event) {
                event.preventDefault();
                jQuery('html, body').animate({scrollTop: 0}, 300);
            })
        });
		
	</script>
	
</head>

<body id="body1"  style="max-width:100%;overflow-x:hidden; background: rgb(27,35,45);background: -moz-linear-gradient(top, rgba(27,35,45,1) 64%, rgba(27,35,45,1) 85%);background: -webkit-linear-gradient(top, rgba(27,35,45,1) 64%,rgba(27,35,45,1) 85%);background: linear-gradient(to bottom, rgba(27,35,45,1) 64%,rgba(27,35,45,1) 85%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1b232d', endColorstr='#1b232d',GradientType=0 );" onload="At_Load();">
		<style>
		#topBtn{
			border-radius:50%;
			  position: fixed;
			  bottom: 20px;
			  right: 20px;
			  font-size: 22px;
			  width: 50px;
			  height: 50px;
			  background-color: rgba(1,168,183,1);;
			  color: white;
			  border: none;
			  cursor: pointer;
			  display: none;
			  z-index:9999;
			  outline:none;
		}
		</style>
	<span id="barras">
		<?php 
		if(isset($_SESSION["email"]) && $_SESSION["email"] != "" )
        {
        	include 'navbar_logged_in.php';
        }
        else{
        	include 'default_navbar.php';
        }
    ?>
	</span>
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
<!--para tablet-->
<div id="carouselExampleIndicators3" class="carousel slide d-none d-sm-block d-md-none" data-ride="carousel" style="margin-top:0.25%;width:100%;background-color:#333;height:60vh;border-right-color:transparent;">
  <ol class="carousel-indicators" id="Carousel_Indexs">  <!-- Carousel ID !!!!! -->
    <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
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

  <a class="carousel-control-prev  sides d-flex align-items-center"  style="border-top-right-radius: 20px 20px;border-bottom-right-radius: 20px 20px" href="#carouselExampleIndicators3" role="button" data-slide="prev">
	<span class="carousel-control-prev-icon"  aria-hidden="true"></span>
    <span class="sr-only" style="opacity:1;">Previous</span>
  </a>
  
  <a class="carousel-control-next sides2 d-flex align-items-center" style="border-top-left-radius: 20px 20px;border-bottom-left-radius: 20px 20px" href="#carouselExampleIndicators3" role="button" data-slide="next"> 
 <span class="carousel-control-next-icon" aria-hidden="true" ></span>
    <span class="sr-only" >Next</span>
  </a>
</div>

<!----------------------------------------------------------- News Container --------------------------------------------------------->
			<div id="container1" OnmouseOver="Hide_Title()" OnmouseOut="Show_Title()" class="col d-none d-md-block" style="margin-top:0.25%;width:30%;background-color:#333;height:60vh;background-image: url(<?php echo $Image ?>);background-repeat: no-repeat;background-size: cover;">
                    <div class="hovereffect d-flex justify-content-center ">
                    <h1 id="Title" class="d-flex align-items-center" style=" color:white; max-width: 100%;height:100%;overflow: hidden; text-align: left;text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;text-align: center; visibility: visible;"><?php echo $Title ?></h1>
                    <div class="overlay d-flex align-items-center" style="overflow:hidden;height:100%vh;width:100%;">
                    <div class="container-fluid" style="position:absolute;background-color:gray; height:80%;width:100%;-webkit-transition:all .4s ease-in-out;transition:all .4s ease-in-out;">
                        <div class="row">
                            <div class="col-md-12 ">
                                <p class="text-center" style="color:white"><?php echo $Content ?></p>
                            </div>
                        </div>
                    </div>
                        <h2 style="width:100%;"><p style="width:90%"><?php echo $mini_content ?></p></h2>
                    </div>
                    </div>
            </div>
            <!--Para telemovel-->
            <div id="container1" class="col d-sm-none" OnmouseOver="Hide_Title()" OnmouseOut="Show_Title()" style="margin-top:0.25%;width:30%;background-color:#333;height:60vh;background-image: url(<?php echo $Image ?>);background-repeat: no-repeat;background-size: cover;">
                    <div class="hovereffect">
                      <h1 id="Title_Tele"  style=" color:white;width:100%;height:100%;overflow: hidden; text-align: left;text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;text-align: center"><?php echo $Title ?></h1>
                    <div class="overlay d-flex align-items-center" style="overflow:hidden;height:100%;width:100%;">
                         <div class="container-fluid" style="position:absolute;background-color:gray; height:80%;width:100%;-webkit-transition:all .4s ease-in-out;transition:all .4s ease-in-out;">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="text-center" style=""><?php echo $Content ?></p>
                            </div>
                        </div>
                    </div>
                        <h2  style="width:100%;"><p  class="text-center" style="width:90%"><?php echo $mini_content ?></p></h2>
                    </div>
                    </div>
            </div>
			<!--Fim de telemovel-->
<!------------------------------------------------------------------------------------------------------------------------------------>
	</div>
	</div>
	<!--////////////////////////////////////////////////////////////////////////////////////////////Carousel End ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

	<button id="topBtn"><i class="fas fa-arrow-up"></i></button>
	<!--////////////////////////////////////////////////////////////////////////////////////////////Horizontal Container ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
			<div id="container_2" class="container-fluid d-none d-sm-block" style="margin-top:4%;overflow:hidden">
				<div class="row">
					<div class="col-md-12" style="overflow:hidden">
						<hr style="background-color: rgba(1,168,183,1); width:95%; height:0.2vh; border-radius:50px; margin-top: -5px;">
						<br>
							<h1 class="align-middle" style="color:#69E0DC;height:12vh;text-align:center; margin-top:2vh"> Miklagard - 'The Great City' <hr style="background-color: white; width:25%; border-radius:50px; margin-top: 1vh;"> </h1>
							<br>
							<p class="align-middle" style="color:#69E0DC;height:12vh;text-align:center; margin-top:1vh">
							The medieval Vikings, who had contacts with the Byzantine empire through their expansion through eastern Europe, used the Old Norse name 'Miklagard' to describe the greatest city that they had ever encountered. These were the meeting grounds for a plethora of cultures and religions, anchoring ships of trade and war from far and wide, gathering all manifestation of interaction between the different collectives. Mikla,  has the same ambition.
							</p>

					<hr style="background-color: rgba(1,168,183,1); width:95%; height:0.2vh; border-radius:50px; ">
					<br><br>
					</div>
				</div>
			</div>
				
			<!--Para telemovel-->
			<div id="container_2_Tele" class="container-fluid d-sm-none" style=" margin-top:4%;overflow:hidden">
				<div class="row">
					<div class="col-md-12" style="overflow:hidden">
						<hr style="background-color: rgba(1,168,183,1); width:95%; height:0.2vh; border-radius:50px; margin-top: -5px;">
						<br>
							<h1 class="align-middle" style="color:#69E0DC;height:12vh;text-align:center; margin-top:2vh"> Miklagard - 'The Great City' <hr style="background-color: white; width:25%; border-radius:50px; margin-top: 1vh;"> </h1>
							<br>
							<p class="align-middle" style="color:#69E0DC;height:12vh;text-align:center; margin-top:1vh">
							The medieval Vikings, who had contacts with the Byzantine empire through their expansion through eastern Europe, used the Old Norse name 'Miklagard' to describe the greatest city that they had ever encountered. These were the meeting grounds for a plethora of cultures and religions, anchoring ships of trade and war from far and wide, gathering all manifestation of interaction between the different collectives. Mikla,  has the same ambition.
							</p>
					<hr style="background-color: rgba(1,168,183,1); width:95%; height:0.2vh; border-radius:50px; margin-top:47%;">
					
					</div>
				</div>
			</div>
		<!--////////////////////////////////////////////////////////////////////////////////////////////News Container ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
			
			<div class="container-fluid" id="container_news" style="overflow:hidden;">
				  <div class="row justify-content-center align-items-center">
							
							<div class="col-md-5 col-lg-4 col-xl-4 col-sm-4 d-none d-sm-block Container_Conteudo text-center" style="margin-top:1vh; background: -webkit-linear-gradient(top, rgba(27,35,45,1) 1%,rgba(27,35,45,1) 10%,rgba(23,118,147,1) 100%);overflow: hidden;overflow-x: hidden;max-height:65vh;height:65vh;">
							
									<h1 style=" font-weight: bold; font-size: 40px; color: #50c1e5; text-align:center;font-family: 'Montserrat', sans-serif; "> What we've done: </h1>
									<hr style="background-color: white; width:20vw; height:0.2vh; border-radius:50px; margin-top: -5px;">
									<br>
									<p style="color:white; text-align:center;">Total Website Views</p>
									<hr style="background-color: white; width:15vw; border-radius:50px;">
									<h3 style=" font-weight: bold; font-size: auto; color: white; text-align:center; margin-bottom: -10px;max-height:8vh;overflow:hidden;"><?php echo number_format($Website_Views,0, ',', ' '); ?></h3>
									<br>
									<p style="color:white; text-align:center;">    Online Users</p>
									<hr style="background-color: white; width:12.5vw; border-radius:50px; margin-top: -5px;">
									<h3 style=" font-weight: bold; font-size: auto; color: white; text-align:center; margin-top: -10px; margin-bottom: -10px;"><?php echo number_format($Online_Users,0, ',', ' '); ?></h3>
									<br>
									<p style="color:white; text-align:center;">  Registered Users</p>
									<hr style="background-color: white; width:10vw; border-radius:50px; margin-top: -5px;">
									<h3 style=" font-weight: bold; font-size: auto; color: white; text-align:center; margin-top: -10px;margin-bottom:2px"><?php echo number_format($Registered_Users,0, ',', ' '); ?></h3>
									<br>
							</div>
							<!--para telemovel-->
							<div class="col-md-5 col-lg-4 col-xl-4 col-sm-4 d-sm-none Container_Conteudo text-center" style="margin-top:1vh; background: -webkit-linear-gradient(top, rgba(27,35,45,1) 1%,rgba(27,35,45,1) 10%,rgba(23,118,147,1) 100%);overflow: hidden;overflow-x: hidden;width:95%;">
							
									<h1 style=" font-weight: bold; font-size: 40px; color: #50c1e5; text-align:center;font-family: 'Montserrat', sans-serif; "> What we've done: </h1>
									<hr style="background-color: white; width:20vw; height:0.2vh; border-radius:50px; margin-top: -5px;">
									<br>
									<p style="color:white; text-align:center;">Total Website Views</p>
									<h3 style=" font-weight: bold; font-size: auto; color: white; text-align:center; margin-top: -10px; margin-bottom: -10px;"><?php echo number_format($Website_Views,0, ',', ' '); ?></h3>
									<br>
									
									<hr style="background-color: white; width:15vw; border-radius:50px; margin-top: -5px;">
									<p style="color:white; text-align:center;">    Online Users</p>
									<h3 style=" font-weight: bold; font-size: auto; color: white; text-align:center; margin-top: -10px; margin-bottom: -10px;"><?php echo number_format($Online_Users,0, ',', ' '); ?></h3>
									<br>
									
									<hr style="background-color: white; width:10vw; border-radius:50px; margin-top: -5px;">
									<p style="color:white; text-align:center;">  Registered Users</p>
									<h3 style=" font-weight: bold; font-size: auto; color: white; text-align:center; margin-top: -10px; margin-bottom: -10px;"><?php echo number_format($Registered_Users,0, ',', ' '); ?></h3>
									<br><br>
							</div>
							<div class="col-md-1 col-lg-1 col-xl-1 col-sm-1" style="background-color:transparent;">
									
							</div>	
							<br>
							<div class="col-md-5 col-lg-4 col-xl-4 col-sm-4 d-none d-sm-block Container_Conteudo text-center " style="margin-top:1vh;background: -webkit-linear-gradient(top, rgba(27,35,45,1) 1%,rgba(27,35,45,1) 10%,rgba(93,20,127,1) 100%);max-height:65vh;height:65vh;">

                                    <h1 style=" font-weight: bold; font-size: 40px; color: rgba(93,20,127,1);font-family: 'Montserrat', sans-serif; "> Data Science </h1>
                                    <hr style="background-color: white; width:20vw; height:0.2vh; border-radius:50px; margin-top: -5px;">
									<div class="col-md-12" style="height:70%;max-height:70%;overflow:auto;">
                                    <p style="color:white; font-weight: bold;font-size: auto; margin-top: 17%;max-width:100%;"> As company and as consumers ourselves, we, at Activated Tech Industries, seek to gather statistical information to test, examine and share with the rest of our fellow users, in order to achieve a better standing in quality and customer service. </p>
									</div> 
									<p  style="color:white; font-size: 10px; text-align:right; margin-right: 5%;margin-top:5%;"> -'Information is only useful when it can be understood.'</p>
									
							</div>	
							
							<div class="col-md-5 col-lg-4 col-xl-4 col-sm-4 d-sm-none Container_Conteudo text-center" style="margin-top:5%;background: -webkit-linear-gradient(top, rgba(27,35,45,1) 1%,rgba(27,35,45,1) 10%,rgba(93,20,127,1) 100%);height:65vh;width:95%;">

                                    <h1 style=" font-weight: bold; font-size: 40px; color: rgba(93,20,127,1);font-family: 'Montserrat', sans-serif; "> Data Science </h1>
                                    <hr style="background-color: white; width:20vw; height:0.2vh; border-radius:50px; margin-top: -5px;">
									<div class="col-md-12" style="height:70%;max-height:70%;overflow:auto;">
                                     <p style="color:white; font-weight: bold;font-size: auto; text-align:center; margin-top: 17%;font-size:auto;"> As company and as consumers ourselves, we, at Activated Tech Industries, seek to gather statistical information to test, examine and share with the rest of our fellow users, in order to achieve a better standing in quality and customer service. </p>
									</div> 
									<p style="color:white; font-size: 10px; text-align:right; margin-right: 5%;"> -'Information is only useful when it can be understood.'</p>
                            </div>								
			</div>
		</div>
		
		 <?php include 'news.php';?>
		 <?php include 'footer.php';?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
