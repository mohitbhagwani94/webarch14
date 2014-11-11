<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <title>Webarch|Gallery</title>
    <link rel="shortcut icon" href="../imgs/wa3.ico"/>
    <meta name="description" >
    <meta name="author" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximun-scale=1, user-scalable=no">

    <!-- Sharing -->
    <!--<meta property="og:title" content="Outdated Browser">
    <meta property="og:description" content="A time saving tool for developers. It detects outdated browsers and advises users to upgrade to a new version.">
    <meta property="og:url" content="http://outdatedbrowser.com/">
    <meta property="og:image" content="http://outdatedbrowser.com/public/files/pics/outdated-social.jpg">
    <meta property="og:site_name" content="Outdated Browser">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Outdated Browser">
    <meta name="twitter:description" content="A time saving tool for developers. It detects outdated browsers and advises users to upgrade to a new version.">
    <meta property="og:image" content="http://outdatedbrowser.com/public/files/pics/outdated-social.jpg">
    <meta name="twitter:domain" content="http://outdatedbrowser.com/">-->
    <!-- Icons -->
    <!--<link rel="shortcut icon" href="http://outdatedbrowser.com/public/imgs/favicon.ico">
    <meta name="msapplication-TileColor" content="#f5b722">
    <meta name="msapplication-TileImage" content="http://outdatedbrowser.com/public/imgs/windows-title-288x288.png">
    <meta name="msapplication-square150x150logo" content="http://outdatedbrowser.com/public/imgs/id/windows-title-288x288.png">-->
    <!-- Styles -->
    <!-- <link rel="stylesheet" type="text/css" href="//cloud.typography.com/732108/729784/css/fonts.css">-->
    <link rel="stylesheet" href="../css/outdatedBrowser.min.css">
    <link rel="stylesheet" href="../css/main.css">

    <link rel="stylesheet" href="../css/mobile.min.css">


    <!--[if lte IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link rel="stylesheet" type="text/css" href="http://outdatedbrowser.com/public/scripts/ie9-and-down.min.css">
        <![endif]-->

    <!--[if lte IE 8]>
        <link rel="stylesheet" type="text/css" href="http://outdatedbrowser.com/public/scripts/ie8-and-down.min.css">
        <![endif]-->
        <style>
        body
        {
            background-color: #fed315;
        }
        </style>

    </head>
    <script src="../js/modernizr-2.6.2.min.js"></script>
    <noscript>
        <style type="text/css">
        .menu, .newBrowser{display: none;}
        .disabledJS{display: block;}
        .c_browsers.hideBrowsers{opacity: 1;}
        .browser .statistic, .browser .download{display: block; opacity: 0; margin-left: 0; left: 0; width: 100%;}
        .browser .download a{ max-width: 210px; width: 80%;}
        .browser:hover .statistic, .browser:hover .download{opacity: 1;}

        </style>
    </noscript>
</head>
<body class="noajax  home" background-color:red>

    <div class="menu" style="position:absolute; z-index:33;"><a data-effect="effect" class="btnCloseNav">Close Navigation<span class="l1"></span><span class="l2"></span><span class="l3"></span></a></div>
    <div id="container" class="container effect">
        <nav class="main_menu effect" role="navigation" style="position:absolute; z-index:;">
            <ul>
               <li class="lang-picker">
                <a href="#"><span class="lang-arrw"></span></a>
            </li>
            <li><a  href="./about.php" data-title="" data-url="">ABOUT US</a></li>
            <li><a href="./workwedo.php"  data-track="Faqs"><span>WORKS</span></a></li>
            <li><a class="active" href="./gallery.php"  data-track="Burocratik" style="background-color:#fed315"><span>Gallery</span></a></li>
            <li><a href="./clients.php"  ><span>Client</span></a></li>
            <li><a href="./recruit.php" data-track="Github"><span>RECRUITMENT'14</span></a></li>
            <li><a href="../member"  ><span>MEMBERS</span></a></li>

        </ul>
    </nav>
    <div class="pusher">
        <!-- LOAD CONTENT -->
   <!--mohit <div class="loadContent current">
        


<div id="content" class="home">

    <div id="preload" aria-hidden="true">
        <img src="../imgs/browsers-bg.png" alt="">
        <img src="../imgs/operatingsystems-bg.png" alt="">
    </div>


    mohit-->

    <!--  HEADER  -->
    <header class="title" role="banner">
        <div class="browserVersion newBrowser">
            <a href="../index.php"><img src="../imgs/webarch_logo.png" style="margin-left:70px;margin-top:-2px; height: 70px; width: 200px;"></a>

            <img src="../imgs/srm_logo.png" style="margin-left:65%; height: 65px; width: 130px;">
        </div>
        <div class="browserVersion disabledJS">
            <h1>WEBARCH</h1>
            <p>Javascript is disabled in your web browser. Turn it on for a better experience.</p>
        </div>
        <div class="browserVersion ifMobile">
            <h1>Outdated Browser</h1>
            <p>This is a tool for desktop, <br>but feel free to explore.</p>
        </div>
        
        <!-- end HEADER  -->
        <!-- </header>-->

        <center>

            <?php include("./room/main.html");?>
            <!--<iframe  width="1000" height="500" style="overflow:hidden; margin-top:25px;" src="./slider/workcontent.php"></iframe>-->

        </center>

<!--mohit

    <div class="loadContent next">
    </div>
    mohit-->
    <!-- end .loadContent -->

    <!-- end .pusher -->

<style>
#footer{
 color:white;
 margin-top: -20px;
 
 

}
.imgfoot{
 margin-left: 51%;
 margin-top: -23px;
 height: 40px;

}
#copywrite{
 position: relative;
 text-align: center;
 margin-left:-100px;
 top:13px;
 
}
#twitter{
 position: relative;
 margin-left: 53.5%;
 margin-top: -42px; 
 top: 15px;

}
#facebook
{
  position: relative;
  top: 15px;
}

</style>


<footer class="title" role="banner" style="height:44px;box-shadow:0px -3px 10px rgba(3,3,3,0.3); margin-top:-48px; position:relative; z-index:51;">
 
  <div class="browserVersion newBrowser" id="footer">
    <div id = "copywrite">&copy; WEBARCH</div>
    
    <div class="imgfoot" id ="facebook"><a href="https://www.facebook.com/wEBARChclub" target="_blank"><img src="../imgs/face.png" style="height:26px;" /></a></div>
      <div class="imgfoot" id="twitter"><a href="https://www.facebook.com/wEBARChclub" target="_blank"><img src="../imgs/youtub.png" style="height:28px;" /></a></div>
      
 </div>
    
    <!-- end HEADER  -->
  </footer>
    <!-- end .container -->


<!-- KEEP CALM MESSAGE -->
<div class="keep_calm">
    <p class="center">keep calm <br><span class="xs">this is a tool for</span>desktop<br><span class="xs">not</span> mobile devices</p>
    <p class="close">Close</p>
</div>


<!-- ============= SCRIPTS ============= -->
<script src="../js/jquery-1.10.1.min.js"></script>
<script src="../js/outdatedBrowser.min.js"></script>

<!--[if !IE]><!-->
<script type="text/javascript" src="../js/main.min.js"></script>
<!--<![endif]-->

    <!--[if gte IE 9]>
      <script type="text/javascript" src="http://outdatedbrowser.com/public/scripts/main.min.js"></script>
      <![endif]-->

  </body>
  </html>


<!--<!DOCTYPE html>
<html>
	<head>
		<style>
		.AboutContent{
				background-color:#c800dc;
				
			}
		</style>

	</head>
	<body >
		<div class="AboutContent" style="width:100%; height:100%">
			<div style="height:100%;position:relative;">
				<?php //include("./aboutus.php"); ?>
			</div>
			<div style="height:100%;position:relative;">
				<?php// include("./slider/index.php"); ?>
			</div>

		</div>
	</body>
</html>-->