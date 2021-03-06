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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="style.css" rel="stylesheet">
	<link href="chat_style.css" rel="stylesheet">
	<link href="style_logged_in.css" rel="stylesheet">
	<link href="scrollbar.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
	document.getElementById("conversation").style.transition = "2s";
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
		
	}
	else
	{
		document.getElementById("container_head").style.visibility = "hidden";
		document.getElementById("container_body").style.visibility = "hidden";
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
<!-- Ultima Mensagem-->
	$(document).ready(function(){
		jQuery("div#row_conversation").scrollTop(jQuery("div#row_conversation")[0].scrollHeight);
	}	);
	
	// Faz a scrollbar ir para baixo
	function Last_Message()
	{
		jQuery("div#row_conversation").scrollTop(jQuery("div#row_conversation")[0].scrollHeight);
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
		color:white;
		
	}
	.searchbar_box
	{		
		background: #333;
		height: 40px;
		border-radius: 40px;
		padding: 10px;
		border:1px solid;
		border-color:white;
	}
	.searchbar_txt
	{
		background: #333;
		height:30px;
		position:relative;
		outline:none;
		
		border:none;
		color:white;
		transition:0.5s;
	}
	.searchbar_btn
	{
		border-radius: 50px;
		background:#333;
		float:right;
		width:20px;
	}
	.input {
	  padding: 0px 10px;
	}
	.message_down
	{
		margin-top:1%;
		border-radius:50%;
		background:darkgray;
		width:60px;
		height:60px;
		margin-bottom:0.3%;
		cursor:pointer;
		opacity:0.3;
		position:absolute;
		z-index:2;
	}
	.message_down:hover {
		transition:0.8s;
        opacity:1;
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
		<!--usar este metodo(target="_blank") para abrir o link numa nova página-->
		<br>
		<div class="container-fluid d-none d-sm-block" style="max-width:25%; float:left;">
				<div class="container-fluid text-center " style="height:20vh; border-radius: 10px; background:transparent; border:1px solid;border-color:white;">
				<div class="row">
				<div class="col-md-12" style="overflow:hidden;">
				<p style="padding:10px 0px 0px; cursor:default;color:white"><?php echo $_SESSION["username"]?></p>
				<hr style="background:white; width:95%; border-width:1px;border-radius:50px;margin-top:-2%;">
				</div>
				</div>
				<div class="row">
				<div class="col-md-12">
						<div class="searchbar_box d-flex align-items-center" >
							<input  class="searchbar_txt" type="text" name="" style="width:90%" placeholder="Find your Friends">
							<a class="searchbar_btn " style="float:right" href="#"><i class="fa fa-search" ></i></a>
						</div>
				</div>
				</div>
			</div>
				<div class="container-fluid" style="max-height:65vh;overflow:auto; border-radius: 15px;color:white;">
				<?php
                    echo "
                    <div class='row' style='margin-bottom:3%;padding:5px' >
                    <div class='col-md-12 Container_Friends text-center d-flex align-items-center' onclick='openchatroom();setTimeout(Show_Containers, 600);'>
						<div class='col-md-1'>
							<img href='#' src='Imagens/user_icon.png' style='width:40px;height:40px; float:left;'>
						</div>
						<div class='col-md-11'>
							<p  style='-webkit-touch-callout: none;-webkit-user-select: none; -khtml-user-select: none;-moz-user-select: none; -ms-user-select: none;'>Amigo</p>
						</div>
                    </div>
                    </div>
					";
                ?>
				</div>
		</div>
		<!--Para telemovel-->		
		<div class="container-fluid d-sm-none" style="max-width:40%; float:left;">
				<div class="container-fluid text-center " style="height:20vh; border-radius: 10px; background:transparent; border:1px solid;border-color:white;">
				<div class="row">
				<div class="col-md-12" style="height:6vh; overflow-y:hidden; overflow-x:auto;">
				<p style="padding:10px 0px 0px; cursor:default;color:white"><?php echo $_SESSION["username"]?></p>
				</div>
				</div>
				<hr style="background:white; width:95%; border-width:1px;border-radius:50px; margin-top:-0.5%;">
				<div class="row">
				<div class="col-md-12" style="overflow:hidden;">
				<div class="searchbar_box d-flex align-items-center" >
							<input  class="searchbar_txt" type="text" name="" style="width:90%" placeholder="Find your Friends">
							<a class="searchbar_btn " style="float:right" href="#"><i class="fa fa-search" ></i></a>
						</div>
				</div>
				</div>
				</div>
				<hr style="background:white; width:95%; border-width:2px;border-radius:50px">
				<div class="container-fluid" style="max-height:65vh;overflow:auto; border-radius: 15px;color:white; ">
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
		<div class="w3-sidebar w3-bar-block w3-card w3-animate-left " style="display: none; float: right; border-radius: 15px;border:1px solid; border-color:white;" id="leftMenu">
			<div class="container Open_left" id="container_open"  >
			<div class="row" id="Text_News" hidden>
			<div class="col-md-12 text-center" style="height:30%;margin-top:2%;">
			<p style="color:white;"><strong>Your Images</strong></p>
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
		<div id="conversation"  class="container-fluid d-none d-md-block" style="overflow:hidden;max-height:85vh;margin-top:40vh;height:0px;background:transparent;max-width:58%; border-radius: 15px;border:1px solid; border-color:white; width:0px; visibility:hidden;float:left;" >
			<!--<div class="container message_down" onclick="Last_Message()">
					<div class="row">
						<div class="col-md-12 d-flex align-items-center justify-content-center" style="width:60px; height:60px;">
							<a><img  src="Imagens/uparrow.png"></a>
						</div>
					</div>
				</div>-->
			<div class="row chat" id="row_conversation" style="height:75vh;overflow:auto;" >
				<div class="col-md-12">
					<br>
					<div id="container_head" class="container-fluid">
					<div class="row">
					<div class="col-md-1">
					<img style="max-height:40px;" src="Imagens/user_icon.png">
					</div>
					<div class="col-md-10" style="max-width:82.5%">
					<p style="overflow-wrap: break-word;border-radius:10px;overflow: hidden;background-image: linear-gradient(to right, #8A2BE2, #4A8BF1);max-width:100%;padding:5px 5px;" > Hey Hey HeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHey HeyHeyHeyHeyHeyHeyHey HeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHey HeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHey</p>
					</div>
					</div>
					</div>
					<div id="container_body" class="container-fluid">
					<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-9" align="right" style="padding:25px">
					<p style="overflow-wrap: break-word;margin-right:-2%;overflow:hidden;border-radius:10px;background-image: linear-gradient(to right, #8A2BE2, #4A8BF1);padding:5px 5px;">  Hey Hey HeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHey HeyHeyHeyHeyHeyHeyHey HeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHey HeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHey</p>
					</div>
					</div>
					</div>
					<div id="container_head" class="container-fluid">
					<div class="row">
					<div class="col-md-1">
					<img style="max-height:40px;" src="Imagens/user_icon.png">
					</div>
					<div class="col-md-9">
					<p style="overflow-wrap: break-word;border-radius:10px;overflow: hidden;background-image: linear-gradient(to right, #8A2BE2, #4A8BF1);max-width:100%;padding:5px 5px;" > Hey Hey HeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHey HeyHeyHeyHeyHeyHeyHey HeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHey HeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHey</p>
					</div>
					</div>
					</div>
					<div id="container_body" class="container-fluid">
					<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-9" align="right" style="padding:25px">
					<p style="overflow-wrap: break-word;margin-right:-2%;overflow:hidden;border-radius:10px;background-image: linear-gradient(to right, #8A2BE2, #4A8BF1);padding:5px 5px;">  Hey Hey HeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHey HeyHeyHeyHeyHeyHeyHey HeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHey HeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHeyHey</p>
					</div>
					</div>
					</div>
						<div id="container_head" class="container-fluid">
					<div class="row">
					<div class="col-md-1">
					<img style="max-height:40px;" src="Imagens/user_icon.png">
					</div>
					<div class="col-md-9">
					<p style="overflow-wrap: break-word;border-radius:10px;overflow: hidden;background-image: linear-gradient(to right, #8A2BE2, #4A8BF1);max-width:100%;padding:5px 5px;" > O Vasco é Gay </p>
					</div>
					</div>
					</div>
				</div>
				</div>';
				?>
				<div class="row" style="height:10vh;">
				<div class="col-md-4" style="padding:20px; ">
				</div>
				<div id="container_footer" class="col-md-8" style="padding:20px; ">
					<div class="d-flex justify-content-center d-flex align-items-center" style="overflow:hidden;border-radius:20px 20px 20px 20px;height:5.5vh;background-image:linear-gradient(to right, #8A2BE2, #4A8BF1);">
						<input class="rainbow input" type="text" style="height:4.5vh;border-radius:20px;background-color:#333;outline:none;width:98%;border:0px;color:white" placeholder="Send your message">
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
				<div id="container_footer " class="col-md-12">
					<div class="d-flex justify-content-center d-flex align-items-center" style="overflow:hidden;border-radius:20px 20px 20px 20px;height:5.5vh;background-image:linear-gradient(to right, #8A2BE2, #4A8BF1);">
						<input class="rainbow input" type="text" style="height:4.5vh;border-radius:20px;background-color:#333;outline:none;width:97%;border:0px;color:white" placeholder="Send your message">
					</div>
				</div>	
				</div>
			</div>					
		</div>
		<!------------------------------------------------------------------>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



</body>
</html>
