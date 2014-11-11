<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Gallery</title>
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
		<style type="text/css">
			*{
				margin:0;
				padding:0;
			}
			body{
				background-color: #fed315;
				margin:0px;
				
			}
			.title{
					width:100%;
					height:40px;
					text-align: center;
					font-size: 20px;
					margin:0px auto;
			}
			.des{
					width:100%;
					height:40px;
					text-align: center;
					font-size: 20px;
					margin:0px auto;
				}

		</style>
    </head>
    <body>
    	<header class="title" role="banner" style="box-shadow:0px 3px 10px rgba(3,3,3,0.3);height:70px;">
            <div class="browserVersion newBrowser">
            	<a href="../gallery.php"><img src="../../imgs/backfinal.png" style="position:absolute;width:40px;height:40px;margin-top:13px;margin-left:-56px;"></a>
                <img src="../../imgs/webarch_logo.png" style="margin-left:-12px;margin-top:-2px; height: 70px; width: 200px;">

               <img src="../../imgs/srm_logo.png" style="margin-left:67%; height: 65px; width: 130px;">
            </div>
        <!-- end HEADER  -->
        </header>
    	
		     
            <!--/ Codrops top bar -->
			<section id="dg-container" class="dg-container" style="margin-top:45px">

				<div class="dg-wrapper">
					<a href="#"><img src="images/A141.jpg" height:482 px width:316></a>
					<a href="#"><img src="images/A142.jpg"></a>
					<a href="#"><img src="images/A143.jpg"></a>
					<a href="#"><img src="images/A144.jpg"></a>
					<a href="#"><img src="images/A145.jpg"></a>
					<a href="#"><img src="images/A146.jpg"></a>
					<a href="#"><img src="images/A147.jpg"></a>
					
				</div>
				<div class="des">
						its a National level technomanagment fest conducted by SRM UNIVERSITY
				</div>
				<nav>	
					<span class="dg-prev">&lt;</span>
					<span class="dg-next">&gt;</span>
				</nav>
				
			</section>
			<div style="height:35px;margin-top:95px;font-family:arial;">
				<?php include("./try.php");?>
			</div>
		<!--	<div style="height:35px;width:100%;position:absolute;">
					<?//php include("../footer.php");?>
			</div>-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.gallery.js"></script>
		<script type="text/javascript">
			$(function() {
				$('#dg-container').gallery();
			});
		</script/>

    </body>
</html>