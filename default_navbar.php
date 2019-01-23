<script>  

					//---------------- Animation Scripts ----------------//
$(document).ready(function(){
		$("input.rainbow").focus(function(){
			
			//alert("1");
		
			
				$(this).parent().css({"opacity": "1"});
				$(this).prev().children().css({"width": "100.5%"});
				
			
			
		}	);	}	);
		
		$(document).ready(function(){
		
			$("input.rainbow").focusout(function(){
				
				
				if($(this).prop('type') == "email")
				{
					$(this).prop('type', 'text');
				
					$(this).val($(this).val().trim());
					
					$(this).prop('type', 'email');
					
				}
				
				else
				{
					$(this).val($(this).val().trim());
				}
				
				if($(this).val() == "")
				{
				//alert("1");
				
					$(this).parent().css({"opacity": "0.5"});
					$(this).prev().children().css({"width": "0"});
					
					$.NoConflict(".rainbowWrap");
				}
				
				
				
			}	);	}	);
			
		$(document).ready(function(){
				$(".rainbowWrap").hover(function(){
				
					$(this).children().next().focus();
					$(this).css({"opacity": "1"});
					$(this).children().children().css({"width": "100.5%"});
					
				}, function(){
					
					if($(this).children().next().val() == "")
					{
					//alert("1");
					$(this).css({"opacity": "0.5"});
					$(this).children().children().css({"width": "0"})};
				
				}); });
				
				//---------------- Animation Scripts End ----------------//
		</script>
				
		
<nav id="nav1" class="navbar navbar-expand-md navbar-dark " style="background-color: #333;max-height:9vh;">
           
		   <!-- Brand/logo -->
            <a class="navbar-brand "  href="index.php" style="color: white">
                <img src="imagens/logo_white.png" alt="Logo" style="width: 40px;cursor:pointer;">
            </a>
            <a class="navbar-brand d-none d-sm-block" href="index.php" style="color: white;cursor:pointer;">Activated Tech Industries</a>
			<a class="navbar-brand d-block d-sm-none" href="index.php" style="color: white;font-size:medium; cursor:pointer;">Activated Tech Industries</a>
			<!-- Brand/logo -->
			
			<!-- Navbar Items -->
			
            <ul class="navbar-nav a ml-auto" id="drop1">

                <li class="nav-item dropdown d-none d-sm-block" id="dropdown_toggle" >
                    <a class="nav-link dropdown-toggle hover_button" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Menu
                    </a>
                    <div class="dropdown-menu dropdown-menu-right " style="text-align: center; overflow:auto;" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item hover_menu_button " id="Login_Button7" onclick="LoginOn()" style="cursor:pointer;"> <i class="fa fa-sign-in "  onclick="LoginOn()"></i> Login</a>
                        <a class="dropdown-item hover_menu_button " id="Register_Button8" onclick="RegisterOn()" style="cursor:pointer;"><i class="fa fa-sign-in "  onclick="RegisterOn()"></i> Register</a>
                        <div class="dropdown-divider"></div>
						 <a class="dropdown-item hover_menu_button" href="chat.php"><i class="fa fa-comments-o"  onclick="chat.php"></i> Chat</a>
						 <div class="dropdown-divider"></div>
                        <a class="dropdown-item hover_menu_button" href="#"><i class="fa fa-wrench"></i> Support</a>			
                    </div>
                </li>
				<!-- Visible Only On Phone -->	
				</ul>
				<li class="nav-item dropdown d-block d-sm-none" id="dropdown_toggle" style="z-index:10;">
                    <a class="nav-link dropdown-toggle hover_button" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Menu
                    </a>
                    <div class="dropdown-menu dropdown-menu-right " style="text-align: center; overflow:auto;" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item hover_menu_button " id="Login_Button7" onclick="LoginOn()" style="cursor:pointer;"> <i class="fa fa-sign-in "  onclick="LoginOn()"></i> Login</a>
                        <a class="dropdown-item hover_menu_button " id="Register_Button8" onclick="RegisterOn()" style="cursor:pointer;"><i class="fa fa-sign-in "  onclick="RegisterOn()"></i> Register</a>
                        <div class="dropdown-divider"></div>
						 <a class="dropdown-item hover_menu_button" href="chat.php"><i class="fa fa-comments-o"  onclick="index.php"></i> Chat</a>
						 <div class="dropdown-divider"></div>
                        <a class="dropdown-item hover_menu_button" href="#"><i class="fa fa-wrench"></i>Support</a>			
                    </div>
                </li>
				<!-- Visible Only On Phone end -->
        </nav>
		<div class="container-fluid fake_nav" id="fake_nav" hidden>
			<div class="row" >
				<div class="d-flex align-content-center">
				<div class="col-md-1" style="width:5%; margin-top:2%;">
				<img src="imagens/logo_white.png" alt="Logo" style="width: 40px;">
				</div>
				<div class="col" style="width:15%;margin-left:5%;margin-top:2%;">
				<p class="d-none d-sm-block" style="color: white;font-size:27px;">Activated Tech Industries</p>
				<a class=" d-block d-sm-none" style="color: white;font-size:medium">Activated Tech Industries</a>
				</div>
			</div>
			</div>
		</div>		

<div class="Overlay" id="Login_Overlay" >
		  <div class="d-flex justify-content-center" >
			  <div align="center" class="lr-div_login d-none d-lg-block" style="margin:auto; margin-top:10%;">		  
			  <form class="align-content-center" action="/action_page.php" style="margin-top:10vh">
			   <div class="Title font_text"><p>Login</p></div>
			   <br>
					 <div class="rainbowWrap " style="border-radius:20px 20px 0px 0px;">
					 
							<div class="rainbowBg"style="border-radius:20px 20px 0px 0px  ;">
								<div class="rainbowSd rainbowSd_1" style="border-radius:20px 20px 0px 0px  ;">
								</div>
							</div>
							
							<input class="rainbow" style="border-radius:20px 20px 0px 0px  ;" placeholder="Email"   type="email" id="email_Login" />
					</div>
					
					 <div class="rainbowWrap d-none d-sm-block" style="border-radius:0px 0px  20px 20px;">
							<div class="rainbowBg" style="border-radius:0px 0px  20px 20px;">
							<div class="rainbowSd rainbowSd_1" style="border-radius:0px 0px  20px 20px;">
								</div>
								</div>
							<input class="rainbow" style="border-radius:0px 0px  20px 20px;" placeholder="Password" type="password" id="pwd_Login"/>
					</div>
					<br><br>
					  <button type="submit" class="btn btn-outline-primary2">Submit</button>
					  <br><br>
					<button type="button" class="btn btn-outline-primary" onclick="LoginOff()" > Exit Overlay </button>
					<br><br>
				</form>
			  </div>	
				<!--para telemovel-->
				<div  align="center" class="lr-div_login_tele d-lg-none" style="margin-top:10%;">
				<form  class="align-content-center" action="/action_page.php" style="margin-top:10vh">
			   <div class="Title font_text"><p>Login</p></div>
					 <div class="rainbowWrap" style="border-radius:20px 20px 0px 0px;">
					 
							<div class="rainbowBg"style="border-radius:20px 20px 0px 0px  ;">
								<div class="rainbowSd rainbowSd_1" style="border-radius:20px 20px 0px 0px  ;">
								</div>
							</div>
							
							<input class="rainbow" style="border-radius:20px 20px 0px 0px  ;" placeholder="Email"   type="email" id="email_Login_tele" />
					</div>
				
					<div class="rainbowWrap " style="border-radius:0px 0px  20px 20px;">
							<div class="rainbowBg" style="border-radius:0px 0px  20px 20px;">
							<div class="rainbowSd rainbowSd_1" style="border-radius:0px 0px  20px 20px;">
								</div>
								</div>
							<input class="rainbow" style="border-radius:0px 0px  20px 20px;" placeholder="Password" type="password" id="pwd_Login_tele"/>
					</div>
					  <br><br>
					  <button type="submit" class="btn btn-outline-primary2">Submit</button>
					<br><br>
					<button type="button" class="btn btn-outline-primary d-lg-none" onclick="LoginOff()" style="position:relative;"> Exit Overlay </button>
					<br><br>
			</form>
			 
					
				
			  </div>			  
		</div>	 
	</div>
	<!--acaba aqui login-->
	<!--Começa o register-->
	<div class="Overlay" id="Register_Overlay">
		  
		  <div class="d-flex justify-content-center" style="padding: 2% 0;">
		  
			  <div  align="center" class="lr-div_register d-none d-lg-block" >
			  
			  <form  class="align-content-center " action="/action_page.php" style="margin-top:10vh;">
			  <div class="Title font_text"><p>Register</p></div>
					<br>
					  <div class="rainbowWrap" style="border-radius:20px 20px 0px 0px;">
					 
							<div class="rainbowBg"style="border-radius:20px 20px 0px 0px  ;">
								<div class="rainbowSd rainbowSd_1" style="border-radius:20px 20px 0px 0px  ;">
								</div>
							</div>
							
							<input class="rainbow" style="border-radius:20px 20px 0px 0px  ;" placeholder="Username" type="text" id="user" />
					</div>
 
					 <div class="rainbowWrap">
							<div class="rainbowBg">
							<div class="rainbowSd rainbowSd_1">
								</div>
							</div>
							<input class="rainbow" placeholder="Email" type="email" id="email_Register"/>
					</div>
			
					 <div class="rainbowWrap">
							<div class="rainbowBg">
							<div class="rainbowSd rainbowSd_1">
								</div>
								</div>
							<input class="rainbow" placeholder="Password"   type="password" id="pwd_Register"/>
					
					</div>
					<div class="rainbowWrap">
							<div class="rainbowBg">
							<div class="rainbowSd rainbowSd_1">
								</div>
								</div>
							<input class="rainbow"  placeholder="Confirm Password" type="password" id="Conf_pwd"/>
					
					</div>
					<div class="rainbowWrap" style="border-radius:0px 0px  20px 20px;">
							<div class="rainbowBg" style="border-radius:0px 0px  20px 20px;">
							<div class="rainbowSd rainbowSd_1" style="border-radius:0px 0px  20px 20px;">
								</div>
								</div>
							<input class="rainbow" style="border-radius:0px 0px  20px 20px;" placeholder="Country" type="text" id="Contry"/>
					</div>
					<div class="country_back">
					<select id="selectNumber" style="background-image: linear-gradient(to right, #8A2BE2, #4A8BF1);width: 18.5vw;padding: 5px;height:36px;outline:none;border-radius:50px;display: block;" name="Test">
								
								<option>Choose a number</option>
								<script>
									var myArray = new Array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");
					
									for(i=0; i<myArray.length; i++) {  
									document.write('<option value="' + myArray[i] +'">' + myArray[i] + '</option>');
									}
								</script>
					</select>
					</div>
					  <br><br>
					  <button type="submit" class="btn btn-outline-primary2">Submit</button>
				</form>
				<br>
				<button type="button" class="btn btn-outline-primary" onclick="RegisterOff()"> Exit Overlay </button>
				<br><br>
				</div>	 
				<!--para telemovel-->
				<div  align="center" class="lr-div_register_tele d-lg-none" style="margin-top:-2%;">
				
				<form  class="align-content-center" action="/action_page.php" style="margin-top:10vh;">
				  <div class="Title d-block  font_text"><p>Register</p></div>	
				  
					<div class="rainbowWrap" style="border-radius:20px 20px 0px 0px;">
					 
							<div class="rainbowBg"style="border-radius:20px 20px 0px 0px  ;">
								<div class="rainbowSd rainbowSd_1" style="border-radius:20px 20px 0px 0px;">
								</div>
							</div>
							
							<input class="rainbow" style="border-radius:20px 20px 0px 0px  ;" placeholder="Username"   type="text" id="user_tele" />
					</div>
					<div class="rainbowWrap">
							<div class="rainbowBg">
							<div class="rainbowSd rainbowSd_1">
								</div>
							</div>
							<input class="rainbow" placeholder="Email" type="email" id="email_Register_tele"/>
					</div>
					<div class="rainbowWrap">
							<div class="rainbowBg">
							<div class="rainbowSd rainbowSd_1">
								</div>
								</div>
							<input class="rainbow" placeholder="Password"   type="password" id="pwd_Register_tele"/>
					
					</div>
					
					 <div class="rainbowWrap">
							<div class="rainbowBg">
								<div class="rainbowSd rainbowSd_1">
								</div>
							</div>
							<input class="rainbow"  placeholder="Confirm Password" type="password" id="Conf_pwd_tele"/>
					
					</div>
					<div class="rainbowWrap" style="border-radius:0px 0px  20px 20px;">
							<div class="rainbowBg" style="border-radius:0px 0px  20px 20px;">
							<div class="rainbowSd rainbowSd_1" style="border-radius:0px 0px  20px 20px;">
								</div>
								</div>
							<input class="rainbow" style="border-radius:0px 0px  20px 20px;" placeholder="Country" type="text" id="Contry_tele"/>
					</div>
					  <br><br>
					  <button type="submit" class="btn btn-outline-primary2">Submit</button>
  
			</form>
			  <br>
				<button type="button" class="btn btn-outline-primary" onclick="RegisterOff()"> Exit Overlay </button>
				<br>
					
			  </div>	
		</div>	 			  
	</div>
	
	
	
	
<script>
		function LoginOn() {
			document.getElementById("Login_Overlay").style.display = "block";		
			document.getElementById("body1").style.position= "fixed";
			document.getElementById("nav1").hidden = true;
			document.getElementById("fake_nav").hidden = false;
			document.getElementById("body1").style.background="rgb(27,35,45)";
			Blur_On();
		}
		
		function LoginOff() {
			document.getElementById("Login_Overlay").style.display = "none";				
			document.getElementById("email_Login").value = "";
			document.getElementById("email_Login_tele").value = "";
			document.getElementById("pwd_Login").value = "";
			document.getElementById("pwd_Login_tele").value = "";
			document.getElementById("body1").style.position= "relative";
			document.getElementById("nav1").hidden = false;
			document.getElementById("fake_nav").hidden = true;		
			document.getElementById("body1").style.background="-webkit-linear-gradient(top, rgba(27,35,45,1) 64%,rgba(27,35,45,1) 85%)";
			Blur_Off();

		}
		
		function RegisterOn() {
			document.getElementById("Register_Overlay").style.display = "block";	
			document.getElementById("Carousel_Indexs").style.visibility = "hidden";
			document.getElementById("body1").style.position= "fixed";	
			document.getElementById("nav1").hidden = true;
			document.getElementById("fake_nav").hidden = false;
			document.getElementById("body1").style.background="rgb(27,35,45)";
			Blur_On();
			
		}

		function RegisterOff() {
			document.getElementById("Register_Overlay").style.display = "none";
			document.getElementById("user").value = "";
			document.getElementById("email_Register").value = "";
			document.getElementById("pwd_Register").value = "";
			document.getElementById("Conf_pwd").value = "";
			document.getElementById("Contry").value = "";
			document.getElementById("user_tele").value = "";
			document.getElementById("email_Register_tele").value = "";
			document.getElementById("pwd_Register_tele").value = "";
			document.getElementById("Conf_pwd_tele").value = "";
			document.getElementById("Contry_tele").value = "";
			document.getElementById("body1").style.position= "relative";
			document.getElementById("nav1").hidden = false;
			document.getElementById("fake_nav").hidden = true;
			document.getElementById("body1").style.background="-webkit-linear-gradient(top, rgba(27,35,45,1) 64%,rgba(27,35,45,1) 85%)";
			Blur_Off();
			
		}
		function Blur_On()
		{
			document.getElementById("container_1").style.filter= "blur(5px)";
			document.getElementById("container_2").style.filter= "blur(5px)";
			document.getElementById("container_3").style.filter= "blur(5px)";
			document.getElementById("container_4").style.filter= "blur(5px)";
			document.getElementById("footer").style.filter= "blur(5px)";	
			document.getElementById("container_2_Tele").style.filter= "blur(5px)";
		}
		
		function Blur_Off()
		{
			document.getElementById("container_1").style.filter= "blur(0px)";
			document.getElementById("container_2").style.filter= "blur(0px)";
			document.getElementById("container_3").style.filter= "blur(0px)";
			document.getElementById("container_4").style.filter= "blur(0px)";
			document.getElementById("footer").style.filter= "blur(0px)";
			document.getElementById("container_2_Tele").style.filter= "blur(0px)";			
		}
		
		</script>
