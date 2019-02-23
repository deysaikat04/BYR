<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Your Romms</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/gallery.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/vit-gallery.css">
    <link rel="shortcut icon" type="text/css" href="<?php echo base_url()?>assets/images/logo/byr.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap-datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome/css/font-awesome.min.css" />
    <!-- MAIN STYLE -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/styles.css">
</head>

<body onload="calculation()">
    <!-- HEADER -->
    <header class="header-sky">
        <!-- MENU-HEADER -->
        <div class="menu-header">
            <nav class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header ">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar "></span>
                            <span class="icon-bar "></span>
                            <span class="icon-bar "></span>
                        </button>
                        <a class="navbar-brand" href="" title="Skyline"><img src="<?php echo base_url()?>assets/images/logo/logo_1.png" alt=""></a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">                            
                            <li><a href="<?php echo base_url()?>" title="Home">Home</a></li>
                            <li><a href="<?php echo base_url()?>About" title="About">About</a></li>
                            <li><a href="<?php echo base_url()?>Contact" title="Contact">Contact</a></li>
                            <li><a href="<?php echo base_url()?>LogIn" title="Log In">Log In</a></li>
                            <li><a href="<?php echo base_url()?>Signup" title="Sign Up">Sign Up</a></li>
                            <li class="dropdown ">
                                <a href="" title="Gallery" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
                                <?php if($this->session->has_userdata('username')){ ?>
                                    <ul class="dropdown-menu icon-fa-caret-up submenu-hover">
                                        <li><a href="<?php echo base_url()?>View/Logout" title="">Log Out</a></li>
                                    </ul>
                                    <?php } ?>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- END / MENU-HEADER -->
        </header>
    <!-- END-HEADER -->