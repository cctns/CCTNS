<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo base_url()?>_assets/bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="textcss">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="<?php echo base_url()?>_assets/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
  	
	    <div class="navbar navbar-inverse navbar-top">
	      <div class="navbar-inner">
	        <div class="container">
	          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </a>
	          
		        <div class="nav-collapse collapse">
		            <ul class="nav">
		              <li class="active"><a href="#">Home</a></li>
		              <li><a href="#about">About</a></li>
		              <li><a href="#contact">Contact</a></li>
		              
		            </ul>
		            <div class="btn-group pull-right">
		                <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown">LogIn <span class="caret"></span></button>
		                <ul class="dropdown-menu">
		                  <li><a href="<?php echo site_url(); ?>/auth ">User</a></li>
		                  <li class="divider"></li>
		                  <li><a href="#">Official</a></li>	                  
		                </ul>
              		</div><!-- /btn-group -->
	            </div><!--/.nav-collapse -->
	        </div>
	      </div>
	    </div>
	    <!-- Main hero unit for a primary marketing message or call to action -->
    	<div class="container-fluid"><!--ends in footer-->
	      	<div class="row-fluid"><!--Header row fluid-->
	      		<div class="span2">
		          <img src="<?php echo base_url()?>_assets/bootstrap/img/tlogo.jpg">
		        </div>
	      		<div class=" span10 pull-right">
	        		<div class="page-header">
	          			<h1> CCTNS <br><small>Crime and Criminal Tracking Network & System</small></h1>
	        		</div>
	        		<ul class="breadcrumb">
			            <li><a href="#">Home</a> <span class="divider">/</span></li>
			            <li><a href="<?php echo site_url();?>/auth/login">login</a> <span class="divider">/</span></li>
			            <li><a href="#">Library</a> <span class="divider">/</span></li>
			            <li><a href="#">Library</a> <span class="divider">/</span></li>
			            <li><a href="#">Library</a> <span class="divider">/</span></li>
			            <li class="active">Data</li>
	          		</ul>
	        	</div>  
	        </div><!--Header row fluid end-->
	        <hr>