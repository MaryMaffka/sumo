<!--Competition -->
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
	 <script src="<?=base_url();?>js/ctg.js" type="text/javascript"></script>
	 <script src="<?=base_url();?>js/jquery.json-2.4.min.js" type="text/javascript"></script>
	 <script src="<?=base_url();?>js/modalWindow.js" type="text/javascript"></script>
	 <script src="<?=base_url();?>js/checkForm.js" type="text/javascript"></script>
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
    </style> 
	<link rel="icon" href="<?=base_url()?>favicon.ico" type="image/x-icon">
  </head>
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
                <a class="brand" href="index.html"><span class="first">Competition</span> </a>
        </div>
    </div>
    


    <div class="sidebar-nav">
		<span class="label label-info">Groups</span>

        <a href="#men-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-user"></i><b>Men</b><i class="icon-chevron-up"></i></a> 
        <ul id="men-menu" class="nav nav-list collapse in">
			<div  class="pull-right"><span class="label label-info">Age</span></div>
			 <li class="divider"></li>
            <li><a href="" title="M_12">12</a></li>
            <li ><a href="" title="M_14">14</a></li>
            <li ><a href="" title="M_16">16</a></li>
            <li ><a href="" title="M_18">18</a></li>
            <li ><a href="" title="M_21">21</a></li>
            <li ><a href="" title="M_23">23</a></li>
            <li ><a href="" title="M_23p">23+</a></li>            
        </ul>     
		<a href="#women-menu" class="nav-header collapsed" data-toggle="collapse"><i class="icon-user"></i><b>Women</b><i class="icon-chevron-up"></i></a> 
        <ul id="women-menu" class="nav nav-list collapse">
			<div  class="pull-right"><span class="label label-info">Age</span></div>
			 <li class="divider"></li>
            <li><a href="index.html">12</a></li>
            <li ><a href="users.html">14</a></li>
            <li ><a href="user.html">16</a></li>
            <li ><a href="media.html">18</a></li>
            <li ><a href="calendar.html">21</a></li>
            <li ><a href="calendar.html">23</a></li>
            <li ><a href="calendar.html">23+</a></li>            
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


