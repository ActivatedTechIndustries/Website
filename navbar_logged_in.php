		<?php 
		require "start_db.php";

		$status_point = "&#9900 ";
		$status_infs = array(
			array($status_point."Offline","#949494"),
			array($status_point."Online","#09ff00"),
			array($status_point."Idle","#f0ff00"),
			array($status_point."Away","#ff0000"));

		?>

		<script>
		function Status_Change(number_status){
			$.post(
				"change_status.php",
				{
					Change_Status_Number: number_status
				}
				,function(resposta, estado){
					//alert(resposta + " " + estado);
					$("#barras").load("navbars.php");
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

		</script>
 
		<nav  class="navbar navbar-expand-md navbar-dark" id="logged_in_navbar" style="background-color: #333;">       
		   <!-- Brand/logo -->
            <a class="navbar-brand d-none d-sm-block" href="index.php" style="color: white">
                <img src="imagens/favicon_logo.png"  alt="Logo" style="width: 40px;cursor:pointer;">
            </a>
			<a class="navbar-brand d-sm-none" href="index.php" style="color: white;margin-right:20%;">
                <img src="imagens/favicon_logo.png"  alt="Logo" style="width: 40px;cursor:pointer;">
            </a>
            <a class="navbar-brand d-none d-sm-block" href="index.php" style="color: white;cursor:pointer;">Activated Tech Industries</a>
			<!-- Brand/logo -->
			
			<!-- Navbar Items -->
			<a class="d-none d-md-block" style="width:25%;"></a>
			<div class="container-fluid d-none d-sm-block" style="width:20%;height:40px;">
				<div class="row">
					<div class="col-md-12">
						<div class="search-box d-flex align-items-center" style="margin-top:22px">
							<input  class="search-txt" type="text" name="" placeholder="Type what you want to search">
							<a class="search-btn " align="center" href="#"><i class="fa fa-search" ></i></a>
						</div>
					</div>
				</div>
			</div>
			<!--Para telemovel-->
			<a class=" d-sm-none" style="width:10%;"></a>
			<div class="container-fluid d-sm-none" style="max-width:25%;height:100%;background-color:white">
				<div class="row">
					<div class="col-md-12">
						<div class="box_tele d-flex align-items-center" style="width:50vw" >
							<input  class="txt_tele" type="text" name="" style="width:90%" placeholder="Go hunt">
							<a class="btn_tele " style="float:right" align="center" href="#"><i class="fa fa-search" ></i></a>
						</div>
					</div>
				</div>
			</div>
			<a class="nav-item d-flex align-items-center " style="color: white;">
					<img class="d-none d-sm-block"src="imagens/user_icon.png" style="width:40px;">
			</a>
			<a class="nav-item d-flex align-items-center ml-auto" style="color: white;margin-right:2%;">
					<a class="d-none d-sm-block" style="color:white!important;margin-right:2%;"><?php echo $_SESSION["username"]?></a>
			</a>
			 <li class="nav-item dropdown d-none d-sm-block" id="dropdown_toggle">                 
				    <a class="nav-link dropdown-toggle" id="status_dropdown" style="cursor: pointer;color:<?php echo $status_infs[$_SESSION["status_number"]][1]?>!important;"role="button" data-toggle="dropdown" aria-expanded="false"><?php echo $status_infs[$_SESSION["status_number"]][0]?> </a>
					<div class="dropdown-menu dropdown-menu-right ml-auto " style="text-align: center; overflow:auto;min-width:8vw;max-width:8vw;" aria-labelledby="navbarDropdown">
						 <a class=" d-flex align-items-center ml-auto">
							<a class="dropdown-item d-none d-sm-block hover_menu_button" onclick="Status_Change(<?php
								if($_SESSION["status_number"] != 1 && $_SESSION["status_number"] == 0) 
									echo 1;
								else
									echo 0;
								?>)" style="cursor: pointer;color:<?php 
								if($_SESSION["status_number"] != 1 && $_SESSION["status_number"] == 0) 
									echo $status_infs[1][1];
								else
									echo $status_infs[0][1];
								?>!important;margin-right:2%;">
								<?php 
								if($_SESSION["status_number"] != 1 && $_SESSION["status_number"] == 0) 
									echo $status_infs[1][0];
								else
									echo $status_infs[0][0];
								?>
							</a>
						</a>
						<div class="dropdown-divider"></div>
						<a class=" d-flex align-items-center ml-auto hover_menu_button" >
							<a class="dropdown-item d-none d-sm-block hover_menu_button" onclick="Status_Change(<?php
								if($_SESSION["status_number"] != 1 && $_SESSION["status_number"] == 2) 
									echo 1;
								else
									echo 2;
								?>)" style="cursor: pointer;color:<?php 
								if($_SESSION["status_number"] != 1 && $_SESSION["status_number"] == 2) 
									echo $status_infs[1][1];
								else
									echo $status_infs[2][1];
								?>!important;margin-right:2%;"><?php 
								if($_SESSION["status_number"] != 1 && $_SESSION["status_number"] == 2) 
									echo $status_infs[1][0];
								else
									echo $status_infs[2][0];
								?></a>
						</a>
						<div class="dropdown-divider"></div>
						<a class=" d-flex align-items-center ml-auto hover_menu_button" >
							<a class="dropdown-item d-none d-sm-block hover_menu_button" onclick="Status_Change(<?php
								if($_SESSION["status_number"] != 1 && $_SESSION["status_number"] == 3) 
									echo 1;
								else
									echo 3;
								?>)" style="cursor: pointer;color:<?php 
								if($_SESSION["status_number"] != 1 && $_SESSION["status_number"] == 3) 
									echo $status_infs[1][1];
								else
									echo $status_infs[3][1];
								?>!important;margin-right:2%;"><?php 
								if($_SESSION["status_number"] != 1 && $_SESSION["status_number"] == 3) 
									echo $status_infs[1][0];
								else
									echo $status_infs[3][0];
								?></a>
						</a>
                    </div>
                </li>
			
            <ul  class="navbar-nav a ml-auto">
                <li class="nav-item dropdown d-none d-sm-block" id="dropdown_toggle">
                    <a class="nav-link dropdown-toggle hover_button" href="chat.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Menu
                    </a>
                    <div class="dropdown-menu dropdown-menu-right ml-auto" style="text-align: center; overflow:auto;" aria-labelledby="navbarDropdown">

						 <a class="dropdown-item hover_menu_button" href="index.php"><i class="fa fa-home " href="index.php"></i> Home</a>
						 <div class="dropdown-divider"></div>
						  <a class="dropdown-item hover_menu_button" href="chat.php"><i class="fa fa-comments-o"  onclick="chat.php"></i> Chat</a>
                        <a class="dropdown-item hover_menu_button" href="User_Definitions.php"><i class="fa fa-wrench" onclick="User_Definitions.php"></i> Definitions</a>	
						<div class="dropdown-divider"></div>
                        <a class="dropdown-item hover_menu_button" href="#"><i class="fa fa-wrench"></i> Support</a>
						<div class="dropdown-divider"></div>
                        <a class="dropdown-item hover_menu_button" href="logout_function.php"><i class="fa fa-wrench" onclick="logout_function.php"></i> Log Out</a>						
                    </div>
                </li>
				<!-- Visible Only On Phone -->	
				</ul>
				<li  class="nav-item dropdown d-block d-sm-none" id="dropdown_toggle" style="z-index:10;">
                    <a class="nav-link dropdown-toggle hover_button_tele" href="chat.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Menu
                    </a>
						<div class="dropdown-menu dropdown-menu-right " style="text-align: center; overflow:auto;" aria-labelledby="navbarDropdown">
						 <a>Your Profile</a>
						<a class="dropdown-item hover_menu_button" href="chat.php"><?php echo $_SESSION["username"] ?></a>
						<div class="dropdown-divider"></div>
						 <a class="dropdown-item hover_menu_button" href="index.php"><i class="fa fa-sign-in " href="index.php"></i> Home</a>
						 <div class="dropdown-divider"></div>
						 <a class="dropdown-item hover_menu_button" href="chat.php"><i class="fa fa-comments-o"  onclick="chat.php"></i> Chat</a>
						 <div class="dropdown-divider"></div>
                        <a class="dropdown-item hover_menu_button" href="chat.php"><i class="fa fa-wrench"></i> Support</a>	
                    </div>
                </li>
				<!-- Visible Only On Phone end -->
        </nav>
