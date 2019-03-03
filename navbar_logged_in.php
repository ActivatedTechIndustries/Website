<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- HTML Page -->
    <title>Activated Tech Industries</title>
    <link rel="icon" type="image/png" href="imagens/favicon_logo.png" />
	<!-- HTML Page -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="style.css" rel="stylesheet">
	<link href="style_logged_in.css" rel="stylesheet">
	<link href="scrollbar.css" rel="stylesheet">
	</head>
	<style>
	
	</style>
<body id="body" style="background:#333">
		<nav id="navbar_logged_in" class="navbar navbar-expand-md navbar-dark" style="background-color: #333;">       
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
			<div class="container-fluid d-sm-none" style="max-width:25%;height:40px;">
				<div class="row">
					<div class="col-md-12">
						<div class="box_tele d-flex align-items-center" style="width:50%" >
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
					<a class="d-none d-sm-block" style="color: white;">Nome do user</a>
			</a>
			<a class="nav-item d-flex align-items-center ml-auto" style="color: white;margin-right:2%;">
			
			</a>
            <ul  class="navbar-nav a ml-auto">
                <li class="nav-item dropdown d-none d-sm-block" id="dropdown_toggle">
                    <a class="nav-link dropdown-toggle hover_button" href="chat.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Menu
                    </a>
                    <div class="dropdown-menu dropdown-menu-right ml-auto" style="text-align: center; overflow:auto;" aria-labelledby="navbarDropdown">

						 <a class="dropdown-item hover_menu_button" href="index.php"><i class="fa fa-home " href="index.php"></i> Home</a>
						 <div class="dropdown-divider"></div>
						  <a class="dropdown-item hover_menu_button" href="chat.php"><i class="fa fa-comments-o"  onclick="chat.php"></i> Chat</a>
						 <div class="dropdown-divider"></div>
                        <a class="dropdown-item hover_menu_button" href="User_Defenitions.php"><i class="fa fa-wrench" nclick="User_Defenitions.php"></i> Definitions</a>	
						<div class="dropdown-divider"></div>
                        <a class="dropdown-item hover_menu_button" href="#"><i class="fa fa-wrench"></i> Support</a>						
                    </div>
                </li>
				<!-- Visible Only On Phone -->	
				</ul>
				<li  class="nav-item dropdown d-block d-sm-none" id="dropdown_toggle" style="z-index:10;">
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
