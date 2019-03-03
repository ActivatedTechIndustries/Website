<script>
function Status_Change(){
	alert("Changed");
}
</script>
		<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #333;">       
		   <!-- Brand/logo -->
            <a class="navbar-brand " href="index.php" style="color: white">
                <img src="imagens/favicon_logo.png"  alt="Logo" style="width: 40px;cursor:pointer;">
            </a>
            <a class="navbar-brand d-none d-sm-block" href="index.php" style="color: white;cursor:pointer;">Activated Tech Industries</a>
			<a class="navbar-brand d-block d-sm-none" href="index.php" style="color: white;font-size:medium; cursor:pointer;">Activated Tech Industries</a>
			<!-- Brand/logo -->
			
			<!-- Navbar Items -->
			<a class="d-none d-md-block"style="width:53%;"></a>
			<a class="nav-item d-flex align-items-center " style="color: white;">
					<img class="d-none d-sm-block"src="imagens/user_icon.png" style="width:40px;">
			</a>
			<a class="nav-item d-flex align-items-center ml-auto" style="color: white;margin-right:2%;">
					<a class="d-none d-sm-block" style="color: white;"><?php echo $_SESSION["username"] ?></a>
			</a>
			<a class="nav-item d-flex align-items-center ml-auto" style="color:white;margin-right:2%;">
				<a class="d-none d-sm-block" onclick="Status_Change()" style="cursor: pointer;color:<?php echo $_SESSION["status_color"]?>!important;margin-right:2%;">&#9900 <?php echo $_SESSION["status"] ?></a>
			</a>
			
			
            <ul class="navbar-nav a ml-auto">
                <li class="nav-item dropdown d-none d-sm-block" id="dropdown_toggle">
                    <a class="nav-link dropdown-toggle hover_button" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Menu
                    </a>
                    <div class="dropdown-menu dropdown-menu-right ml-auto" style="text-align: center; overflow:auto;z-index: 9999;" aria-labelledby="navbarDropdown">

						 <a class="dropdown-item hover_menu_button" href="index.php"><i class="fa fa-home " href="index.php"></i> Home</a>
						 <div class="dropdown-divider"></div>
						  <a class="dropdown-item hover_menu_button" href="chat.php"><i class="fa fa-comments-o"  onclick="chat.php"></i> Chat</a>
                        <a class="dropdown-item hover_menu_button" href="User_Definitions.php"><i class="fa fa-wrench" onclick="User_Definitions.php"></i>Definitions</a>	
						<div class="dropdown-divider"></div>
                        <a class="dropdown-item hover_menu_button" href="#"><i class="fa fa-wrench"></i> Support</a>	
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item hover_menu_button" href="logout_function.php"><i class="fa fa-wrench" onclick="logout_function.php"></i> Log Out</a>						
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
						 <a class="dropdown-item hover_menu_button" href="chat.php"><i class="fa fa-comments-o"  onclick="chat.php"></i> Chat</a>
						 <div class="dropdown-divider"></div>
                        <a class="dropdown-item hover_menu_button" href="chat.php"><i class="fa fa-wrench"></i> Support</a>	
						<div class="dropdown-divider"></div>
                        <a class="dropdown-item hover_menu_button" href="chat.php"><i class="fa fa-user"></i> User</a>							
                    </div>
                </li>
				<!-- Visible Only On Phone end -->
        </nav>
