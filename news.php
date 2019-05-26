<div id="separater" class="container-fluid d-none d-sm-block" style="margin-top:3%;margin-bottom:3%;">
		<div class="row">
		<div class="col-md-5">
		<hr style="background-color: rgba(1,168,183,1); width:100%; height:0.2vh; border-radius:50px;">
		</div>
		<div class="col-md-2 text-center" style="max-height:5vh">
		<p style="font-size:20px;color:white;">Last News</p>
		</div>
		<div class="col-md-5 " style="max-height:5vh">
		<hr style="background-color: rgba(1,168,183,1); width:100%; height:0.2vh; border-radius:50px;">
		</div>
		</div>
</div>
<!--para display maior que sm-->
<div class="container-fluid" id="container_news">
		<div class="row d-flex justify-content-center">
		<div id="first_new" OnmouseOver="Hide_Title_1_News();show_shadow_1()" OnmouseOut="Show_Title_1_News();hide_shadow_1()" class="col-md-3 d-none d-sm-block" style="margin-top:0.25%;background-color:#333;height:50vh;background-image: url(<?php echo $Image ?>);background-repeat: no-repeat;background-size: cover;border-radius:5px;">
                    <div class="hovereffect d-flex justify-content-center" style="border-radius:5px;">
                    <h1 id="Title_news_1" class="d-flex align-items-center" style=" color:white; max-width: 100%;height:100%;overflow: hidden; text-align: left;text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;text-align: center"><?php echo $Title ?></h1>
                    <div class="overlay d-flex align-items-center" style="overflow:hidden;height:100%;width:100%;border-radius:5px;">
                        <h2 style="width:100%; height"><p style="width:90%;height:210px;"><?php echo $mini_content ?></p></h2>
                    </div>
                    </div>
        </div>
			
			<div class="col-md-1 d-none d-md-block" style="max-width:3%;"></div>
			<div id="second_new" OnmouseOver="Hide_Title_2_News();show_shadow_2()" OnmouseOut="Show_Title_2_News();hide_shadow_2()" class="col-md-3 d-none d-sm-block" style="margin-top:0.25%;background-color:#333;height:50vh;background-image: url(<?php echo $Image ?>);background-repeat: no-repeat;background-size: cover;border-radius:5px;">
                    <div class="hovereffect d-flex justify-content-center" style="border-radius:5px;">
                    <h1 id="Title_news_2" class="d-flex align-items-center" style=" color:white; max-width: 100%;height:100%;overflow: hidden; text-align: left;text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;text-align: center"><?php echo $Title ?></h1>
                    <div class="overlay d-flex align-items-center" style="overflow:hidden;height:100%;width:100%;border-radius:5px;">
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
			<div class="col-md-1 d-none d-md-block" style="max-width:3%;"></div>
			<div id="third_new" OnmouseOver="Hide_Title_3_News();show_shadow_3()" OnmouseOut="Show_Title_3_News();hide_shadow_3()" class="col-md-3 d-none d-sm-block" style="margin-top:0.25%;background-color:#333;height:50vh;background-image: url(<?php echo $Image ?>);background-repeat: no-repeat;background-size: cover;border-radius:5px;">
                    <div class="hovereffect d-flex justify-content-center" style="border-radius:5px;">
                    <h1 id="Title_news_3" class="d-flex align-items-center" style=" color:white; max-width: 100%;height:100%;overflow: hidden; text-align: left;text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;text-align: center"><?php echo $Title ?></h1>
                    <div class="overlay d-flex align-items-center" style="overflow:hidden;height:100%;width:100%;border-radius:5px;">
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
			<div class="container-fluid d-sm-none">
				<div class="row">
					<div class="col-sm-3">
						<hr style="background-color: rgba(1,168,183,1); height:0.2vh; border-radius:50px;">
					</div>
					<div class="col-sm-6 text-center">
						<p style="font-size:20px;color:white;">Last News</p>
					</div>
					<div class="col-sm-3">
						<hr style="width:60%;background-color: rgba(1,168,183,1); height:0.2vh; border-radius:50px;">
					</div>
				</div>
			</div>
			
            <div id="first_new" OnmouseOver="Hide_Title_1_News();" OnmouseOut="Show_Title_1_News();" class="col-md-3 d-sm-none" style="max-width:90%;margin-top:0.25%;background-color:#333;height:50vh;background-image: url(<?php echo $Image ?>);background-repeat: no-repeat;background-size: cover;border-radius:5px;">
                    <div class="hovereffect d-flex justify-content-center" style="border-radius:5px;">
                    <h1 id="Title_news_1" class="d-flex align-items-center" style=" color:white; max-width: 100%;height:100%;overflow: hidden; text-align: left;text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;text-align: center"><?php echo $Title ?></h1>
                    <div class="overlay d-flex align-items-center" style="overflow:hidden;height:100%;width:100%;border-radius:5px;">
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
			<hr class="d-sm-none" style="background-color: rgba(1,168,183,1); width:60%; height:0.2vh; border-radius:50px;">
			<div id="second_new" OnmouseOver="Hide_Title_2_News();" OnmouseOut="Show_Title_2_News();" class="col-md-3 d-sm-none" style="max-width:90%;margin-top:0.25%;background-color:#333;height:50vh;background-image: url(<?php echo $Image ?>);background-repeat: no-repeat;background-size: cover;border-radius:5px;">
                    <div class="hovereffect d-flex justify-content-center" style="border-radius:5px;">
                    <h1 id="Title_news_2" class="d-flex align-items-center" style=" color:white; max-width: 100%;height:100%;overflow: hidden; text-align: left;text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;text-align: center"><?php echo $Title ?></h1>
                    <div class="overlay d-flex align-items-center" style="overflow:hidden;height:100%;width:100%;border-radius:5px;">
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
			<hr class="d-sm-none"style="background-color: rgba(1,168,183,1); width:60%; height:0.2vh; border-radius:50px;">
			
			<div id="third_new" OnmouseOver="Hide_Title_3_News();" OnmouseOut="Show_Title_3_News();" class="col-md-3 d-sm-none" style="max-width:90%;margin-top:0.25%;background-color:#333;height:50vh;background-image: url(<?php echo $Image ?>);background-repeat: no-repeat;background-size: cover;border-radius:5px;">
                    <div class="hovereffect d-flex justify-content-center" style="border-radius:5px;">
                    <h1 id="Title_news_3" class="d-flex align-items-center" style=" color:white; max-width: 100%;height:100%;overflow: hidden; text-align: left;text-shadow: -2px 0 black, 0 2px black, 2px 0 black, 0 -2px black;text-align: center"><?php echo $Title ?></h1>
                    <div class="overlay d-flex align-items-center" style="overflow:hidden;height:100%;width:100%;border-radius:5px;">
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
			
			<!--Fim de telemovel-->
		</div>
	</div>
	<div id="separater" class="container-fluid " style="margin-top:3%">
		<div class="row">
			<div class="col-md-12">
				<hr style="background-color: rgba(1,168,183,1); width:100%; height:0.2vh; border-radius:50px;">
			</div>
		</div>
	</div>

	<script>
		<!--para as news do container de adjacente ao carrossel-->
		function Show_Title()
		{
				document.getElementById("Title").style.visibility= ("visible");
				document.getElementById("Title_Tele").style.visibility= ("visible");
		}
		function Hide_Title()
		{
				document.getElementById("Title").style.visibility= ("hidden");
				document.getElementById("Title_Tele").style.visibility= ("hidden");
		}
		<!--para o primeiro container de news-->
		function Show_Title_1_News()
		{
				document.getElementById("Title_news_1").style.visibility= ("visible");
		}
		function Hide_Title_1_News()
		{
				document.getElementById("Title_news_1").style.visibility= ("hidden");
		}
		<!------------------------------------->
		<!--para o segundo container de news-->
		function Show_Title_2_News()
		{
				document.getElementById("Title_news_2").style.visibility= ("visible");
		}
		function Hide_Title_2_News()
		{
				document.getElementById("Title_news_2").style.visibility= ("hidden");
		}
		<!------------------------------------->
		<!--para o terceiro container de news-->
		function Show_Title_3_News()
		{
				document.getElementById("Title_news_3").style.visibility= ("visible");
		}
		function Hide_Title_3_News()
		{
				document.getElementById("Title_news_3").style.visibility= ("hidden");
		}
		<!------------------------------------->
	</script>