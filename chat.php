
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="style.css" rel="stylesheet">
	<link href="chat_style.css" rel="stylesheet">
	<link  href="scrollbar.css" rel="stylesheet">
	</head>
<body>
<script>

function openLeftMenu() {
	document.getElementById("leftMenu").style.display = "block";
	document.getElementById("open").hidden = true;
	document.getElementById("close").hidden = false;			
	document.getElementById("container_open").style="width:19.5vw";
}
function closeLeftMenu() {
	document.getElementById("container_open").style="width:40px";
	document.getElementById("leftMenu").style.display = "none";
	document.getElementById("close").hidden = true;
	document.getElementById("open").hidden = false;
}
function Show() {
	document.getElementById("Text_News").hidden = false;
	document.getElementById("Image_chat").hidden = false;
}
function Hide() {
	document.getElementById("Text_News").hidden = true;
	document.getElementById("Image_chat").hidden = true;
}
function openchatroom() {
	if (document.getElementById("conversation").style.visibility != "visible" )
	{
	document.getElementById("conversation").style.visibility = "visible";
	document.getElementById("conversation").style.marginTop = "0vh";
	document.getElementById("conversation").style.transition = "3s";
	document.getElementById("conversation").style.height = "85vh";
	document.getElementById("conversation").style.transition = "2s";
	document.getElementById("conversation").style.width="49%";

	}
	else
	{
	document.getElementById("conversation").style.marginTop = "40vh";
	document.getElementById("conversation").style.transition = "1.5s";
	document.getElementById("conversation").style.height = "0px";
	document.getElementById("conversation").style.width = "0px";
	document.getElementById("conversation").style.visibility = "Hidden";
	}
}
function Show_Containers()
{
	if (document.getElementById("conversation").style.visibility == "visible")
	{
		document.getElementById("container_head").style.visibility = "visible";
		document.getElementById("container_body").style.visibility = "visible";
		document.getElementById("container_footer").style.visibility = "visible";
	}
	else
	{
		document.getElementById("container_head").style.visibility = "hidden";
		document.getElementById("container_body").style.visibility = "hidden";
		document.getElementById("container_footer").style.visibility = "hidden";
	}
}

function openchatroom_tele() {
	
	if(document.getElementById("conversation_tele").style.visibility != "visible")
	{
		document.getElementById("conversation_tele").style.visibility = "visible";
	}
	else
	{
		document.getElementById("conversation_tele").style.visibility = "hidden";	
	}
	
}
</script>
<style>
	body
	{
		max-width:100%;
		max-height:100%;
		overflow-x:hidden;
		overflow-y:hidden;
		background: rgb(27,35,45);background: -moz-linear-gradient(top, rgba(27,35,45,1) 64%, rgba(27,35,45,1) 85%);
		background: -webkit-linear-gradient(top, rgba(27,35,45,1) 64%,rgba(27,35,45,1) 85%);
		background: linear-gradient(to bottom, rgba(27,35,45,1) 64%,rgba(27,35,45,1) 85%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1b232d', endColorstr='#1b232d',GradientType=0 );";
	}
	.Container_Friends_first
	{
		background:#333;
		height:10vh; 
		border-radius: 15px;
		max-width:98%;
	}
	.Container_Friends_first:hover
	{
		opacity:0.5;
	}
	.Container_Friends
	{
		background:#333;
		height:10vh; 
		border-radius: 15px;
		max-width:98%;
		margin-top:2%;
	}
	.Container_Friends:hover
	{
		opacity:0.5;
	}
	::placeholder
	{
		color:black;
		margin-left:5vw;
	}
</style>
		
<nav id="nav1" class="navbar navbar-expand-md navbar-dark " style="background-color: #333;">
           
		   <!-- Brand/logo -->
            <a class="navbar-brand " href="index.php" style="color: white">
                <img src="imagens/favicon_logo.png"  alt="Logo" style="width: 40px;cursor:pointer;">
            </a>
            <a class="navbar-brand d-none d-sm-block" href="index.php" style="color: white;cursor:pointer;">Activated Tech Industries</a>
			<a class="navbar-brand d-block d-sm-none" href="index.php" style="color: white;font-size:medium; cursor:pointer;">Activated Tech Industries</a>
			<!-- Brand/logo -->
			
			<!-- Navbar Items -->
			
            <ul class="navbar-nav a ml-auto" id="drop1">

                <li class="nav-item dropdown d-none d-sm-block" id="dropdown_toggle">
                    <a class="nav-link dropdown-toggle hover_button" href="chat.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Menu
                    </a>
                    <div class="dropdown-menu dropdown-menu-right " style="text-align: center; overflow:auto;" aria-labelledby="navbarDropdown">
						 <a class="dropdown-item hover_menu_button" href="index.php"><i class="fa fa-home " href="index.php"></i> Home</a>
						 <div class="dropdown-divider"></div>
                        <a class="dropdown-item hover_menu_button" href="navbar_logged_in.php"><i class="fa fa-wrench"></i> Support</a>		
						<div class="dropdown-divider"></div>						
                        <a class="dropdown-item hover_menu_button" href="AboutUs.php"><i class="fa fa-wrench"></i>About Us</a>						
                    </div>
                </li>
				<!-- Visible Only On Phone -->	
				</ul>
				<li class="nav-item dropdown d-block d-sm-none" id="dropdown_toggle" style="z-index:10;">
                    <a class="nav-link dropdown-toggle hover_button_tele" href="chat.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Menu
                    </a>
                    <div class="dropdown-menu dropdown-menu-right " style="text-align: center; overflow:auto;" aria-labelledby="navbarDropdown">
						 <a class="dropdown-item hover_menu_button" href="index.php"><i class="fa fa-sign-in " href="index.php"></i> Home</a>
						 <div class="dropdown-divider"></div>
                        <a class="dropdown-item hover_menu_button" href="chat.php"><i class="fa fa-wrench"></i> Support</a>				
						<div class="dropdown-divider"></div>						
                        <a class="dropdown-item hover_menu_button" href="AboutUs.php"><i class="fa fa-wrench"></i>About Us</a>
                    </div>
                </li>
				<!-- Visible Only On Phone end -->
        </nav>
		<br>
				<div class="container-fluid d-none d-sm-block" style="max-width:25%; float:left;">
				<div class="container-fluid text-center " style="height:15vh; border-radius: 10px; background:#4A8BF1">
				<div class="row">
				<div class="col-md-12" style="height:6vh; overflow:hidden">
				<img href="#" src="Imagens/icon-fb.png" style="height:6vh; float:left;padding:10px 0px 0px">
				<p style="padding:10px 0px 0px; cursor:default;"> Nome da pessoa</p>
				</div>
				</div>
				<hr style="background:white; width:95%; border-width:1px;border-radius:50px">
				<div class="row">
			    <div class="col-md-12" style="overflow:hidden;height:3.5vh;"> <!-- Not Auto Sizing -->
                <p href="www.facebook.com"> Facebook: www.facebook.com/User </p>
                <!-- <p href="www.twitter.com"> Twitter: www.twitter.com/User </p>
                <p href="www.instagram.com"> Instagram: www.instagram.com/User </p> -->
				</div>
				</div>
				</div>
				<hr style="background:white; width:95%; border-width:2px;border-radius:50px">
				<div class="container-fluid" style="max-height:65vh;overflow:auto; border-radius: 15px;color:white;">
				<?php
                    echo "
                    <div class='row' >
                    <div class='col-md-12 Container_Friends text-center' onclick='openchatroom();setTimeout(Show_Containers, 600);'>
                       <p  style='-webkit-touch-callout: none;-webkit-user-select: none; -khtml-user-select: none;-moz-user-select: none; -ms-user-select: none;'>Amigo</p>
                    </div>
                    </div>";
                ?>
				</div>
		</div>
		<!--Para telemovel-->		
		<div class="container-fluid d-sm-none" style="max-width:40%; float:left;">
				<div class="container-fluid text-center " style="height:15vh; border-radius: 10px; background:#4A8BF1">
				<div class="row">
				<div class="col-md-12" style="height:6vh; overflow:hidden">
				<img href="#" src="Imagens/icon-fb.png" style="height:6vh; float:left;padding:10px 0px 0px">
				<p style="padding:10px 0px 0px; cursor:default;"> Nome da pessoa</p>
				</div>
				</div>
				<hr style="background:white; width:95%; border-width:1px;border-radius:50px">
				<div class="row">
				<div class="col-md-12" style="overflow:hidden;height:3.5vh;">
				<p> Dados da pessoa facebook, twitter, mail etc</p>
				</div>
				</div>
				</div>
				<hr style="background:white; width:95%; border-width:2px;border-radius:50px">
				<div class="container-fluid" style="max-height:65vh;overflow:auto; border-radius: 15px;color:white;">
				<?php
				echo"
				<div class='row'>
				<div class='col-md-12 Container_Friends' onclick='openchatroom_tele()'>
					<p class='d-flex justify-content-center' style='-webkit-touch-callout: none;-webkit-user-select: none; -khtml-user-select: none;-moz-user-select: none; -ms-user-select: none;'>Amigo</p>
				</div>
				</div>";
				?>
				</div>
		</div>
		<!------------------------------------------------------------------>
		<?php
		echo '
		<div class="container-fluid d-none d-md-block" style="max-width:26%;max-height:90vh;float:right;">
		<div class="container-fluid" style="max-width:2vw;float:right;margin-right:1%">
		<div class="row">
		<div class="col-md-12">
		<button id="open" class="btn btn-outline-open" style="font-size:30px;" onclick="openLeftMenu(); setTimeout(Show, 1500);"><p class="d-flex justify-content-center">+<p></button>
		<button id="close" class="btn btn-outline-close" style="font-size:18px;" onclick="closeLeftMenu();Hide()" hidden><p class="d-flex justify-content-center">X<p></button>		
		</div>
		</div>
		</div>
		<div class="w3-sidebar w3-bar-block w3-card w3-animate-left " style="display: none; float: right;" id="leftMenu">
			<div class="container Open_left" id="container_open"  >
			<div class="row" id="Text_News" hidden>
			<div class="col-md-12 text-center" style="height:30%;margin-top:2%;">
			<p> Imagens</p>
			</div>
			</div>
			<div class="row text-center"style="max-height:90%;overflow:auto;" id="Image_chat" hidden >
			<div class="col-md-12">
			<img  style="height:100px;max-width:45%;margin-bottom:2%;" src="Imagens/new_york.jpg">
			<img  style="height:100px;max-width:45%;margin-bottom:2%;" src="Imagens/new_york.jpg">
			</div>
			<div class="col-md-12">
			<img  style="height:100px;max-width:92%;margin-bottom:2%;" src="Imagens/new_york.jpg">
			</div>
			<div class="col-md-12">
			<img  style="height:100px;max-width:45%;margin-bottom:2%;" src="Imagens/new_york.jpg">
			<img  style="height:100px;max-width:45%;margin-bottom:2%;" src="Imagens/new_york.jpg">
			</div>
			<div class="col-md-12">
			<img  style="height:100px;max-width:92%;margin-bottom:2%;" src="Imagens/new_york.jpg">
			</div>
			<div class="col-md-12">
			<img  style="height:100px;max-width:45%;margin-bottom:2%;" src="Imagens/new_york.jpg">
			<img  style="height:100px;max-width:45%;margin-bottom:2%;" src="Imagens/new_york.jpg">
			</div>
			<div class="col-md-12">
			<img  style="height:100px;max-width:92%;margin-bottom:2%;" src="Imagens/new_york.jpg">
			</div>
			<div class="col-md-12">
			<img  style="height:100px;max-width:45%;margin-bottom:2%;" src="Imagens/new_york.jpg">
			<img  style="height:100px;max-width:45%;margin-bottom:2%;" src="Imagens/new_york.jpg">
			</div>
			</div>
			</div>
		</div>
		</div>';
		?>
		<?php
		echo '
		<div id="conversation"  class="container-fluid d-none d-lg-block" style="margin-top:40vh;overflow:hidden;height:0px;background:darkgray;max-width:58%; border-radius: 15px; width:0px; visibility:hidden;float:left" >
			<div class="row" style="height:75vh">
				<div class="col-md-12" style="background:darkgray;">
					<br>
					<div id="container_head"class="container-fluid" style="overflow: hidden;padding:10px 0px 0px;visibility:hidden">
					<div class="row">
					<div class="col-md-1">
					<img style="max-height:40px;" src="Imagens/user_icon.png">
					</div>
					<div class="col-md-10">
					<p style="overflow-wrap: break-word;border-radius:10px;overflow: hidden;background-image: linear-gradient(to right, #8A2BE2, #4A8BF1);max-width:100%;" > Hey Hey HeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHey HeyHeyHeyHeyHeyHeyHey HeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHey HeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHey</p>
					</div>
					</div>
					</div>
					<br>
					<div id="container_body" class="container-fluid" style=" padding:10px 0px 0px; visibility:hidden">
					<div class="row">
					<div class="col-md-10" align="right">
					<p style="overflow-wrap: break-word;margin-right:-2%;overflow:hidden;border-radius:10px;background-image: linear-gradient(to right, #8A2BE2, #4A8BF1);"> Hello you are very Vasco</p>
					</div>
					<div class="col-md-1">
					<img style="max-height:40px;" src="Imagens/user_icon.png">
					</div>
					</div>
					</div>
				</div>
				</div>';
				?>
				<div class="row" style="height:10vh;">
				<div id="container_footer" class="col-md-12" style="background:darkgray; border-radius: 15px;visibility:hidden">
					<div class="container-fluid align-items-end" style=" padding:10px 0px 0px; position:relative; bottom:0px">
					<div class="row">
					<div class="col-md-12" align="right">
					<input style="border-radius:20px 20px 20px 20px; width:70%;" placeholder="  Insira a mensagem" type="text">				
					</div>
					</div>
					</div>
				</div>
				</div>				
		</div>
		<!--Para telemovel-->
		<?php
		echo '
			<div id="conversation_tele" class="container-fluid d-sm-none" style="overflow:hidden;height:83vh;background:darkgray;max-width:59%; border-radius: 15px; width:60%; visibility:hidden;float:left" >
			<div class="row" style="height:75vh">
				<div class="col-md-12" style="background:darkgray;overflow:auto;">
					<br>
					<div class="container-fluid" style="overflow: hidden;padding:10px 0px 0px;">
					<div class="row" >
					<div class="col-md-12" >
					<img align="left" style="max-height:40px;margin-right:2.5%;max-width:20%" src="Imagens/user_icon.png">		
					<p  style="overflow-wrap: break-word;border-radius:10px;overflow: hidden;background-image: linear-gradient(to right, #8A2BE2, #4A8BF1);max-width:70%;margin-top:3%" > Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey Hey heeeyeyyyyyyyyyyyyyyyyyyyyyyyy </p>
					</div>
					</div>
					</div>
					<div class="container-fluid" style=" padding:10px 0px 0px; overflow: hidden;">
					<div class="row">
					<div class="col-md-12" >
					<img align="right" style="max-height:40px;margin-right:2.5%" src="Imagens/user_icon.png">		
					<p  style="overflow-wrap: break-word;border-radius:10px;overflow: hidden;background-image: linear-gradient(to right, #8A2BE2, #4A8BF1);max-width:70%;margin-top:3%" align="right"> Ola tudo bem eu chamo-me tozé</p>
					</div>
					</div>
					</div>
				</div>
			</div>';
			?>
				<div class="row" style="height:10vh;">
				<div class="col-md-12" style="background:darkgray; border-radius: 15px;">
					<div class="container-fluid align-items-end" style=" padding:10px 0px 0px; position:relative; bottom:0px">
					<div class="row">
					<div class="col-md-12" align="right">
					<input style="border-radius:20px 20px 20px 20px; width:70%;" placeholder="Insira a mensagem" type="text">				
					</div>
					</div>
					</div>
				</div>
				</div>
			</div>					
		</div>
		<!------------------------------------------------------------------>
		  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</body>
</html>
