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
	<link href="style_definitions.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link  href="scrollbar.css" rel="stylesheet">
	<link href="style_logged_in.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
<body style="max-width:100%;overflow-x:hidden; background: rgb(27,35,45);background: -moz-linear-gradient(top, rgba(27,35,45,1) 64%, rgba(27,35,45,1) 85%);background: -webkit-linear-gradient(top, rgba(27,35,45,1) 64%,rgba(27,35,45,1) 85%);background: linear-gradient(to bottom, rgba(27,35,45,1) 64%,rgba(27,35,45,1) 85%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1b232d', endColorstr='#1b232d',GradientType=0 );" onload="AtLoad();">
<script>
	function Image_Change()
	{
		document.getElementById("Image").style.zIndex = "-10";	
		document.getElementById("background").style.zIndex = "10";
		document.getElementById("Image").style.filter= "blur(2.5px)";
	}
	function Realease()
	{
		//document.getElementById("background").style.transition = "0.8s";
		document.getElementById("Image").style.zIndex = "10";
		document.getElementById("Image").style.filter= "blur(0px)";
		document.getElementById("background").style.zIndex = "-10";	
	}
</script>

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


		<div class="container-fluid">
		<br>
		<div class="container-fluid " style="max-height:20vh">
		<div class="row">
		<div class="col-md-4">
		<hr style="background-color: rgba(1,168,183,1); width:100%; height:0.2vh; border-radius:50px;">
		</div>
		<div class="col-md-4 text-center" style="max-height:5vh">
		<p style="font-size:20px;color:white;">Your Informations</p>
		</div>
		<div class="col-md-4" style="max-height:5vh">
		<hr style="background-color: rgba(1,168,183,1); width:100%; height:0.2vh; border-radius:50px;">
		</div>
		</div>
		</div>
		<br>
		<!--Informações em display maior que telemovel-->
		<div class="container-fluid d-none d-sm-block"style="box-shadow: inset 0 0px 30px white, 0 5px 10px rgba(0,0,0,0.5);border-radius:20px;overflow:auto;">
		<br>
		<div class="container-fluid" style="max-width:11%;float:right;" >
		<div class="row">
		<div class="col-md-12">
		<img class="img-responsive" style="max-height:120px;width:120px;border-radius:50%;" src="Imagens/Snake.jpeg"></img>
		</div>
		</div>
		</div>
		<br>
		<div class="container-fluid" style="max-width:70%;">
		<div class="row">
		<div class="col-md-3" style="max-width:20%;margin-right:3%;">
		<p style="font-size:20px;color:white;">Username:</p>
		</div>
		<div class="col-md-9 box_Info" >
		  <p style="color:white;margin-top:1%;"> Your Username is ...</p>
		</div>
		<br><br><br>
		</div>
		<div class="row">
		<div class="col-md-3" style="max-width:20%;margin-right:3%;">
		<p style="font-size:20px;color:white;">Nickname:</p>
		</div>
		<div class="col-md-9 box_Info" >
		  <p style="color:white;margin-top:1%;"> Your Nickname is ...</p>
		</div>
		<br><br><br>
		</div>
		<div class="row">
		<div class="col-md-3" style="max-width:20%;margin-right:3%;">
		<p style="font-size:20px;color:white;">Email:</p>
		</div>
		<div class="col-md-9 box_Info" >
		  <p style="color:white;margin-top:1%;"> Your Email is ...</p>
		</div>
		<br><br><br>
		</div>
		<div class="row">
		<div class="col-md-3" style="max-width:20%;margin-right:3%;">
		<p style="font-size:20px;color:white;">Phone Number:</p>
		</div>
		<div class="col-md-9 box_Info" >
		  <p style="color:white;margin-top:1%;"> Your Phone Number is ...</p>
		</div>
		<br><br><br>
		</div>
		<div class="row">
		<div class="col-md-3" style="max-width:20%;margin-right:3%;">
		<p style="font-size:20px;color:white;">Country:</p>
		</div>
		<div class="col-md-9 box_Info" style="margin-bottom:5%;" >
		  <p style="color:white;margin-top:1%;"> Your Country is ...</p>
		</div>
		</div>
		</div>
		</div>
		<!--Inicio do display de telemovel-->
		<div class="container-fluid d-sm-none"style="box-shadow: inset 0 0px 30px white, 0 5px 10px rgba(0,0,0,0.5);border-radius:20px;overflow:auto;">
		<br>
		<div class="container-fluid" style="width:100%;height:20vh;" >
		<div class="row">
		<div class="col-md-12">
		<img class="img-responsive" style="max-height:80px;width:80px;border-radius:50%;float:left" src="Imagens/Snake.jpeg"></img>
		</div>
		</div>
		</div>
		<div class="container-fluid" style="max-width:100%;">
		<div class="row">
		<div class="col-md-3" style="max-width:30%;">
		<p style="font-size:18px;color:white;">Username:</p>
		</div>
		<div class="col-md-9 box_Info" >
		  <p style="color:white;margin-top:1%;"> Your Username is ...</p>
		</div>
		<br><br><br>
		</div>
		<div class="row">
		<div class="col-md-3" style="max-width:27%;margin-right:3%;">
		<p style="font-size:18px;color:white;">Nickname:</p>
		</div>
		<div class="col-md-9 box_Info" >
		  <p style="color:white;margin-top:1%;"> Your Nickname is ...</p>
		</div>
		<br><br><br>
		</div>
		<div class="row">
		<div class="col-md-3" style="max-width:27%;margin-right:3%;">
		<p style="font-size:18px;color:white;">Email:</p>
		</div>
		<div class="col-md-9 box_Info" >
		  <p style="color:white;margin-top:1%;"> Your Email is ...</p>
		</div>
		<br><br><br>
		</div>
		<div class="row">
		<div class="col-md-3" style="max-width:27%;margin-right:3%;">
		<p style="font-size:18px;color:white;">Phone Number:</p>
		</div>
		<div class="col-md-9 box_Info" >
		  <p style="color:white;margin-top:1%;"> Your Phone Number is ...</p>
		</div>
		<br><br><br>
		</div>
		<div class="row">
		<div class="col-md-3" style="max-width:27%;margin-right:3%;">
		<p style="font-size:18px;color:white;">Country:</p>
		</div>
		<div class="col-md-9 box_Info" style="margin-bottom:10%;" >
		  <p style="color:white;margin-top:1%;"> Your Country is ...</p>
		</div>
		</div>
		</div>
		</div>
		<br>
		<div class="container-fluid " style="max-height:20vh">
		<div class="row">
		<div class="col-md-4">
		<hr style="background-color: rgba(1,168,183,1); width:100%; height:0.2vh; border-radius:50px;">
		</div>
		<div class="col-md-4 text-center" style="max-height:5vh">
		<p style="font-size:20px;color:white;">Information that you can change</p>
		</div>
		<div class="col-md-4" style="max-height:5vh">
		<hr style="background-color: rgba(1,168,183,1); width:100%; height:0.2vh; border-radius:50px;">
		</div>
		</div>
		</div>		
				<br>
		<!--Informações em display maior que telemovel-->
		<div class="container-fluid d-none d-sm-block"style="box-shadow: inset 0 0px 30px white, 0 5px 10px rgba(0,0,0,0.5);border-radius:20px;overflow:auto;">
		<br>
		<div class="container-fluid" style="max-width:11%;float:right;">
		<div class="row">
		<div class="col-md-12">
		<div id="background" onmouseout="Realease()" class="text-center d-flex align-items-center" style="position:absolute;height:120px;width:120px;border-radius:50%;background:tranparent;z-index:-10;">
		<p style="color:white;cursor:default;">Change your Picture</p>
		</div>
		<img id="Image" class="img-responsive" style="max-height:120px;width:120px;border-radius:50%;float:left;z-index:10;" onmouseover="Image_Change()" src="Imagens/Snake.jpeg"></img>
		</div>
		</div>
		</div>
		<div class="container-fluid" style="max-width:70%;">
		<div class="row" style="margin-top:5%;" >
		<div class="col-md-3" style="max-width:20%;overflow:hidden;">
		<p style="font-size:18px;color:white;">Nickname:</p>
		</div>
		<div class="col-md-9" style="width:70%;">
		<div class="d-flex justify-content-center d-flex align-items-center" style="border-radius:20px 20px 20px 20px;height:5.8vh;background-image:linear-gradient(to right, #8A2BE2, #4A8BF1);">
			 <input class="rainbow" type="text" style="border-radius:20px;background-color:#333;outline:none;width:99%;border:0px;" placeholder="Insert Your Nickname">
		</div>
		</div>
		<br><br><br>
		</div>
		<div class="row">
		<div class="col-md-3" style="max-width:20%;overflow:hidden">
		<p style="font-size:18px;color:white;">Password:</p>
		</div>
		<div class="col-md-9" style="width:70%;">
		<div class="d-flex justify-content-center d-flex align-items-center" style="border-radius:20px 20px 20px 20px;height:5.8vh;background-image:linear-gradient(to right, #8A2BE2, #4A8BF1);">
			 <input class="rainbow" type="text" style="border-radius:20px;background-color:#333;outline:none;width:99%;border:0px;" placeholder="Insert Your Password">
		</div>
		</div>
		<br><br><br>
		</div>
		<div id="row_Conf_Pass" class="row">
		<div class="col-md-3" style="max-width:20%;overflow:hidden">
		<p style="font-size:18px;color:white;">Confirm Password:</p>
		</div>
		<div class="col-md-9" style="width:60%;">
		<div class="d-flex justify-content-center d-flex align-items-center" style="border-radius:20px 20px 20px 20px;height:5.8vh;background-image:linear-gradient(to right, #8A2BE2, #4A8BF1);">
			 <input class="rainbow" type="text" style="border-radius:20px;background-color:#333;outline:none;width:99%;border:0px;" placeholder="Confirm your password">
		</div>
		</div>
		<br><br><br>
		</div>
		<div class="row">
		<div class="col-md-3" style="max-width:20%;overflow:hidden">
		<p style="font-size:18px;color:white;">Country:</p>
		</div>
		<div class="col-md-4" align="left" style="width:70%;">
		<div class="d-flex justify-content-center d-flex align-items-center" style="border-radius:20px 20px 20px 20px;height:5.8vh;background-image:linear-gradient(to right, #8A2BE2, #4A8BF1);max-width:40vh;margin-left:-1%">
			 <select id="selectNumber" OnmouseOver="Country_Opacity()" OnmouseOut="Country_Opacity_Out()" style="border:0px;z-index:10;width:38.9vh;margin-left:1%;height:5vh;outline:none;border-radius:50px;background-color:#333;color:white;" name="country">
								<option style="padding: 8px 50px;">Choose your Country</option>
								<script>
									var myArray = new Array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
					
									for(i=0; i<myArray.length; i++) {  
									document.write('<option value=" ' + myArray[i] +' ">' + myArray[i] + '</option>');
									}
								</script>
		</select>
		</div>			
		</div>
		<br><br><br>
		</div>
		<div class="row" style="margin-bottom:5%;">
		<div class="col-md-3" style="max-width:20%;overflow:hidden">
			<p style="font-size:18px;color:white;">Gender:</p>
		</div>
		<div class="col-md-4" align="left" style="width:70%;">
		<div class="d-flex justify-content-center d-flex align-items-center" style="border-radius:20px 20px 20px 20px;height:5.8vh;background-image:linear-gradient(to right, #8A2BE2, #4A8BF1);max-width:40vh;margin-left:-1%">
			 <select id="selectNumber" OnmouseOver="Country_Opacity()" OnmouseOut="Country_Opacity_Out()" style="border:0px;z-index:10;width:38.9vh;margin-left:1%;height:5vh;outline:none;border-radius:50px;background-color:#333;color:white;" name="country">
								<option style="padding: 8px 50px;">Choose your Gender</option>
								<script>
									var myArray = new Array("Male", "Female", "Anything else you should die");
									for(i=0; i<myArray.length; i++) {  
									document.write('<option value=" ' + myArray[i] +' ">' + myArray[i] + '</option>');
									}
								</script>
			</select>
		</div>		
		</div>
		</div>
		</div>
		</div>
		<br>
		<!--Inicio do display de telemovel-->
		<div class="container-fluid d-sm-none"style="box-shadow: inset 0 0px 30px white, 0 5px 10px rgba(0,0,0,0.5);border-radius:20px;overflow:auto;">
		<br>
		<div class="container-fluid" style="width:100%;height:20vh;" >
		<div class="row">
		<div class="col-md-12">
		<div id="background" onmouseout="Realease()" class="text-center d-flex align-items-center" style="position:absolute;height:80px;width:80px;border-radius:50%;background-color:red;z-index:-10;">
		<p style="color:white;cursor:default;">Change your Foto</p>
		</div>
		<img id="Image" class="img-responsive" style="max-height:80px;width:80px;border-radius:50%;float:left;z-index:10;" onmouseover="Image_Change()" src="Imagens/Snake.jpeg"></img>
		</div>
		</div>
		</div>
		<div class="container-fluid " style="max-width:100%;">
		<div class="row ">
		<div class="col-md-3" style="max-width:26%;overflow:hidden">
		<p style="font-size:18px;color:white;">Username:</p>
		</div>
		<div class="col-md-9" style="width:70%;">
		<div class="d-flex justify-content-center d-flex align-items-center" style="border-radius:20px 20px 20px 20px;height:6vh;background-image:linear-gradient(to right, #8A2BE2, #4A8BF1);">
			 <input class="rainbow" type="text" style="border-radius:20px;background-color:#333;outline:none;width:98%;border:0px;" placeholder="Insert Your Username">
		</div>
		</div>
		<br><br><br>
		</div>
		<div class="row">
		<div class="col-md-3" style="max-width:26%;overflow:hidden">
		<p style="font-size:18px;color:white;">Nickname:</p>
		</div>
		<div class="col-md-9" style="width:70%;">
		<div class="d-flex justify-content-center d-flex align-items-center" style="border-radius:20px 20px 20px 20px;height:6vh;background-image:linear-gradient(to right, #8A2BE2, #4A8BF1);">
			 <input class="rainbow" type="text" style="border-radius:20px;background-color:#333;outline:none;width:98%;border:0px;" placeholder="Insert Your Nickname">
		</div>
		</div>
		<br><br><br>
		</div>
		<div class="row">
		<div class="col-md-3" style="max-width:26%;overflow:hidden">
		<p style="font-size:18px;color:white;">Email:</p>
		</div>
		<div class="col-md-9" style="width:70%;">
		<div class="d-flex justify-content-center d-flex align-items-center" style="border-radius:20px 20px 20px 20px;height:6vh;background-image:linear-gradient(to right, #8A2BE2, #4A8BF1);">
			 <input class="rainbow" type="text" style="border-radius:20px;background-color:#333;outline:none;width:98%;border:0px;" placeholder="Insert Your Email">
		</div>
		</div>
		<br><br><br>
		</div>
		<div class="row">
		<div class="col-md-3" style="max-width:26%;overflow:hidden">
		<p style="font-size:18px;color:white;">Password:</p>
		</div>
		<div class="col-md-9" style="width:70%;">
		<div class="d-flex justify-content-center d-flex align-items-center" style="border-radius:20px 20px 20px 20px;height:6vh;background-image:linear-gradient(to right, #8A2BE2, #4A8BF1);">
			 <input class="rainbow" type="text" style="border-radius:20px;background-color:#333;outline:none;width:98%;border:0px;" placeholder="Insert Your Password">
		</div>
		</div>
		<br><br><br>
		</div>
		<div class="row">
		<div class="col-md-3" style="max-width:26%;overflow:hidden">
		<p style="font-size:18px;color:white;">Country:</p>
		</div>
		<div class="col-md-9" style="width:70%;">
		<div class="d-flex justify-content-center d-flex align-items-center" style="border-radius:20px 20px 20px 20px;height:6vh;background-image:linear-gradient(to right, #8A2BE2, #4A8BF1);">
			 <input class="rainbow" type="text" style="border-radius:20px;background-color:#333;outline:none;width:98%;border:0px;" placeholder="Insert Your Country">
		</div>
		</div>
		<br><br><br>
		</div>
		<div class="row">
		<div class="col-md-3" style="max-width:26%;overflow:hidden">
			<p style="font-size:18px;color:white;">Gender:</p>
		</div>
		<div class="col-md-9" align="left" style="width:70%;margin-bottom:5%;">
		<div class="d-flex justify-content-center d-flex align-items-center" style="border-radius:20px 20px 20px 20px;height:6vh;background-image:linear-gradient(to right, #8A2BE2, #4A8BF1);">
			 <select id="selectNumber" OnmouseOver="Country_Opacity()" OnmouseOut="Country_Opacity_Out()" style="border:0px;z-index:10;width:98%;height:5vh;outline:none;border-radius:50px;background-color:#333;color:white;" name="country">
								<option style="padding: 8px 50px;">Choose a Gender</option>
								<script>
									var myArray = new Array("Male", "Female", "Anything else you should die");
									for(i=0; i<myArray.length; i++) {  
									document.write('<option value=" ' + myArray[i] +' ">' + myArray[i] + '</option>');
									}
								</script>
			</select>
		</div>
					
		</div>
		</div>
		</div>
		</div>
		<br>
		</div>
		  <!-- Footer -->
	   		<div class="container-fluid sticky-bottom" style="background:#333;margin-top:5%; height: auto;">
		<div class="row justify-content-center align-items-center"> <br> </div>
		<div class="row justify-content-center align-items-center"> <h3 style="color: #50c1e5;"> <strong>Powered By:</strong></h3> </div>
		<hr style="background-color: rgba(1,168,183,1); width:95%; height:0.1vh; border-radius:50px; margin-bottom: 5vh;">
		<!-- ///////////////////////////////////// Row 1  /////////////////////////////////////-->
			<div class="row justify-content-center align-items-center">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top:0.25%;width:100%;background-color:#333;height:30vh;border-right-color:transparent;">
				  <ol class="carousel-indicators" id="Carousel_Indexs">  <!-- Carousel ID !!!!! -->
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				  </ol>
				  <div  class="carousel-inner ">
					<div class="carousel-item active" >
					  <img class="d-block "  style="max-height:15vh;max-width:60%; margin-bottom: 2%;"  src="Imagens/logo_white.png" alt="First slide">
					  <h3 class="text-center" style="margin-bottom:2%;color:white;" alt="First slide">Activeted Tech Industries</h2>
					  <br><br>
					</div>
					<div class="carousel-item" >
						<img class="d-block "  style="max-height:15vh;max-width:60%; margin-bottom: 2%;"  src="Imagens/Warden_Logo.png" alt="Second slide">
					  <h3 class="text-center" style="margin-bottom:2%;color:white;">Warden</h2>
					</div>
				  </div>
				</div>
				</div>
			
			<!-- ///////////////////////////////////// Row 1 End /////////////////////////////////////-->
		
		<hr style="background-color: rgba(1,168,183,1); width:95%; height:0.1vh; border-radius:50px; margin-top: 5vh; margin-bottom: 5vh;">
		
		<!-- ///////////////////////////////////// Row 2  /////////////////////////////////////-->
		<div class="container-fluid d-none d-md-block" style="height: 25vh">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-4 text-right">                 
					<h4 style="color: #50c1e5;">About</h4>
							<a href="">FAQ</a>
							<br>
								<a href="">Terms of Use</a>
								<br>
							<a href="">Privacy Policy</a>
							<br>
								<a href="">Blog</a>
								<br>
							<a href="">Giveaway</a>
				</div> 
				<div class="col-md-4 ">                 
					<h4 style="color: #50c1e5;">Contacts</h4>
							<a href="">Facebook</a>
							<br>
								<a href="">Tweeter</a>
								<br>
							<a href="">Instagram</a>
							<br>
								<a href="">Gmail</a>
								<br>
							<a href="">Tele: +351 111 222 22</a>
				</div> 
				<div class="col-md-2"></div>
				</div>
			</div>
			<!--Visivel para telemovel-->
			<div class="container-fluid d-md-none" style="height: 30vh;overflow:auto;">
			<div class="row">
				<div class="col-sm-6 text-right" style="max-width: 50%">                 
					<h4 style="color: #50c1e5;">About</h4>
							<a  href="">FAQ</a>
							<br>
								<a href="">Terms of Use</a>
								<br>
							<a href="">Privacy Policy</a>
							<br>
								<a href="">Blog</a>
								<br>
							<a href="">Giveaway</a>
				</div> 
				<div class="col-sm-6" style="max-width: 50%;">                 
					<h4 style="color: #50c1e5;">Contacts</h4>
							<a href="">Facebook</a>
							<br>
								<a href="">Tweeter</a>
								<br>
							<a href="">Instagram</a>
							<br>
								<a href="">Gmail</a>
								<br>
							<a href="">Tele: +351 111 222 22</a>
				</div> 
				</div>
			</div>
			</div>
			<!-- ///////////////////////////////////// Row 2 End /////////////////////////////////////-->
	     </div>
		 
		
		 <!-- Footer -->
		<script>
		function Gender_Opacity()
		{
			document.getElementById("gradient_gender").style.opacity= "1";
			document.getElementById("gradient_gender_tele").style.opacity= "1";
			document.getElementById("selectNumber").style.opacity= "1";
			document.getElementById("selectNumber_tele").style.opacity= "1";
		}
		function Gender_Opacity_Out()
		{	
			document.getElementById("gradient_gender").style.opacity= "0.5";
			document.getElementById("gradient_country_gender").style.opacity= "0.5";
			document.getElementById("selectNumber").style.opacity= "1";
			document.getElementById("selectNumber_tele").style.opacity= "1";
			document.getElementById("selectNumber").style.zIndex = "10";
			document.getElementById("selectNumbesr_tele").style.zIndex = "10";
		}
		</script>
		<!------------------------------------------------------------------>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		</body>