<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Admin Page</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="root" >
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/admin.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>lib/bootstrap/css/bootstrap.css">   
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>stylesheets/theme.css">
   
    <link rel="stylesheet" href="<?=base_url();?>lib/font-awesome/css/font-awesome.css">
    <script src="<?=base_url();?>lib/jquery-1.7.2.min.js" type="text/javascript"></script>
	<script src="<?=base_url();?>js/modalWindow.js" type="text/javascript"></script>
     <style type="text/css">
        #line-chart {
            height:300px;
            width:800px;
            margin: 0px auto;
            margin-top: 1em;
        }
        .brand { font-family: georgia, serif; }
        .brand .first {
            color: #ccc;
            font-style: italic;
        }
        .brand .second {
            color: #fff;
            font-weight: bold;
        }
    
    		ul .nav{
				margin-bottom: 0;    		
    		}
	    	.nav li a{
   	 		color: #444;
    		}
    	a i.icon-chevron-down {
			float: right;    	
    	}
		
		.block-body.collapse.in{
			min-height:235px;
		}
		
		ul .nav.nav-pills{
			background-color: #5e6c87;
		}
    </style> 

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
	<link rel="icon" href="<?=base_url()?>favicon.ico" type="image/x-icon">
   <!-- <link rel="shortcut icon" href="../assets/ico/favicon.ico">-->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <!--[if lt IE 7 ]> <body class="ie ie6"> <![endif]-->
  <!--[if IE 7 ]> <body class="ie ie7 "> <![endif]-->
  <!--[if IE 8 ]> <body class="ie ie8 "> <![endif]-->
  <!--[if IE 9 ]> <body class="ie ie9 "> <![endif]-->
  <!--[if (gt IE 9)|!(IE)]><!--> 
  <body class=""> 
  <!--<![endif]-->
    
    <div class="navbar">
        <div class="navbar-inner">
                <ul class="nav pull-right">
                    
                    <li><a href="#" class="hidden-phone visible-tablet visible-desktop" role="button">Settings</a></li>
                    <li id="fat-menu" class="dropdown">
                        <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i> Jack Smith
                            <i class="icon-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a tabindex="-1" href="#">My Account</a></li>
                            <li class="divider"></li>
                            <li><a tabindex="-1" class="visible-phone" href="#">Settings</a></li>
                            <li class="divider visible-phone"></li>
                            <li><a tabindex="-1" href="sign-in.html">Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                <a class="brand" href="index.html"><span class="first">Your</span> <span class="second">Company</span></a>
        </div>
    </div>
    

<!-- //то что мне !надо -->

    <div class="sidebar-nav">
        <a href="#dashboard-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-dashboard"></i>Dashboard<i class="icon-chevron-up"></i></a> 
        <ul id="dashboard-menu" class="nav nav-list collapse">
            <li><a href="index.html">Home</a></li>
            <li ><a href="users.html">Sample List</a></li>
            <li ><a href="user.html">Sample Item</a></li>
            <li ><a href="media.html">Media</a></li>
            <li ><a href="calendar.html">Calendar</a></li>
            
        </ul>

        <a href="#accounts-menu" class="nav-header" data-toggle="collapse"><i class="icon-briefcase"></i>Account<span class="label label-info">+3</span></a>
        <ul id="accounts-menu" class="nav nav-list collapse">
            <li ><a href="sign-in.html">Sign In</a></li>
            <li ><a href="sign-up.html">Sign Up</a></li>
            <li ><a href="reset-password.html">Reset Password</a></li>
        </ul>

        <a href="#error-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-exclamation-sign"></i>Table <i class="icon-chevron-up"></i></a>
        <ul id="error-menu" class="nav nav-list collapse">
            <li ><a href="<?=base_url()?>category_table/dataFromTab/maintab">All participants</a></li>           
    			<li ><a href="<?=base_url()?>category_table/dataFromTab/athlete">Athlete</a></li>            
            <li ><a href="<?=base_url()?>category_table/dataFromTab/person">Person</a></li>
            <li ><a href="<?=base_url()?>category_table/dataFromTab/user">All users</a></li>
        </ul>

        <a href="#legal-menu" class="nav-header" data-toggle="collapse"><i class="icon-legal"></i>Category<i class="icon-chevron-up"></i></a>
        
        	<ul id="legal-menu" class="nav nav-list collapse up">
        		 <li ><a href="<?=base_url()?>category_table/get_gender/W">Women</a></li>           
    			 <li ><a href="<?=base_url()?>category_table/get_gender/M">Men</a></li>          
			</ul>
			
			<a href="#badge-menu" class="nav-header" data-toggle="collapse"><i class="icon-legal"></i>Badge<i class="icon-chevron-up"></i></a>
        
        	<ul id="badge-menu" class="nav nav-list collapse up">
        		 <li ><a href="<?=base_url()?>badge/build_badge/athlete">Athlete</a></li>           
    			 <li ><a href="<?=base_url()?>badge/build_badge/person">Person</a></li>          
			</ul>
			<ul class="nav nav-pills">
				<li class="active">
					<a href="<?=base_url()?>preparation/index">Перейти к подготовке соревнования</a>
				</li>
			</ul>	
    </div>

    <div class="content">
        
        <div class="header">
            <div class="stats">
    <p class="stat"><span class="number">53</span>tickets</p>
    <p class="stat"><span class="number">27</span>tasks</p>
    <p class="stat"><span class="number">15</span>waiting</p>
</div>

            <h1 class="page-title">Dashboard</h1>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">              

<div class="row-fluid">
    </div>
</div>

<div class="row-fluid">
    <div class="block span12">
        <a href="#tablewidget" class="block-heading" data-toggle="collapse"><?=$data['title']?><span class="label label-warning">+10</span></a>
        <div id="tablewidget" class="block-body collapse in">
				<?php
					$this->load->view($data['view'],$data);  
 				?>

        </div>
    </div>
</div>

<div class="row-fluid">
 
</div>


                    
                    <footer>
                        <hr>
                        <p class="pull-right">A <a href="http://www.portnine.com/bootstrap-themes" target="_blank">Free Bootstrap Theme</a> by <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
                        <p>&copy; 2012 <a href="http://www.portnine.com" target="_blank">Portnine</a></p>
                    </footer>
                    
            </div>
        </div>
    </div>
    


 <script src="<?=base_url();?>lib/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        $("[rel=tooltip]").tooltip();
        $(function() {
            $('.demo-cancel-click').click(function(){return false;});
        });
    </script>

  </body>
</html>


