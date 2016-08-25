<!DOCTYPE html>
<!--[if IE 7]><html class="ie7"> <![endif]-->
<!--[if IE 8]><html class="ie8"> <![endif]-->
<!--[if IE 9]><html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" xmlns:og="http://ogp.me/ns#">
<!--<![endif]-->
<html manifest="app.appcache" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=100%, initial-scale=1.0, maximum-scale=1.0, user-scalable=true" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">    
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">    
    <title>toxicsox :: geek</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

	<!-- Font Awesome //-->	
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    
    <!-- Custom //-->
    <link rel="stylesheet" type="text/css" href="css/custom.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
  	<!-- header -->
	<?php require("./controls/headerComponent.php"); ?>    
    
    <!-- top intro -->
    <?php include("./controls/topContentComponent.php"); ?>
    
	<section class="container">
		<div class="row">	
            <!-- skills -->			
            <?php include("./controls/skillsComponent.php"); ?>
            
            <!-- web projects -->
            <?php include("./controls/webProjectsComponent.php"); ?> 
                        
            <!-- mobile projects -->
            <?php include("./controls/mobileProjectsComponent.php"); ?> 
                                    
            <!-- responsive projects -->
            <?php include("./controls/responsiveProjectsComponent.php"); ?>   
                                                
            <!-- gallery projects -->
            <?php include("./controls/galleryComponent.php"); ?>                            		
		</div>
   	</section>          
            
    <!-- about me -->		
    <?php include("./controls/aboutMeComponent.php"); ?>         
      
    <section class="container">    
        <div class="row">                                                    
            <!-- footer -->
            <?php require("./controls/footerComponent.php"); ?>   
        </div>
    </section>    

	<!--[if !IE]><!-->
    <script>
        if (/*@cc_on!@*/false) {
            document.documentElement.className+= ' ie10';
        }
    </script>
    <!--<![endif]-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
    <!-- Custom JS  -->
    <script type="text/javascript" src="js/index.js"></script>
  </body>
</html>