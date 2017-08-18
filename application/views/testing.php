<!DOCTYPE html>
<!-- 
TEMPLATE NAME : Adminre - frontend
VERSION : 1.3.0
AUTHOR : JohnPozy
AUTHOR URL : http://themeforest.net/user/JohnPozy
EMAIL : pampersdry@gmail.com
LAST UPDATE: 2015/01/05

** A license must be purchased in order to legally use this template for your project **
** PLEASE SUPPORT ME. YOUR SUPPORT ENSURE THE CONTINUITY OF THIS PROJECT **
-->
<html class="frontend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Adminre - frontend</title>
        <meta name="author" content="pampersdry.info">
        <meta name="description" content="Adminre is a clean and flat backend and frontend theme build with twitter bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/image/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/image/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/image/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/image/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/image/favicon.ico">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jquery-ui/css/jquery-ui.css">
        <!--/ Plugins stylesheet : optional -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/layout.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/uielement.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheet/themes/layouts/fixed-header.css">
        <!--/ Application stylesheet -->

        <!-- modernizr script -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/modernizr/js/modernizr.js"></script>
        <!--/ modernizr script -->
        <!-- END STYLESHEETS -->
    </head>
    <!--/ END Head -->

    <!-- START Body -->
    <body>
        <!-- START Template Header -->
        <header id="header" class="navbar">
            <div class="container">
                <!-- START navbar header -->
                <div class="navbar-header navbar-header-transparent">
                    <!-- Brand -->
                    <a class="navbar-brand" href="javascript:void(0);">
                        <span class="logo-figure" style="margin-left:-4px;"></span>
                        <span class="logo-text"></span>
                    </a>
                    <!--/ Brand -->
                </div>
                <!--/ END navbar header -->

                <!-- START Toolbar -->
                <div class="navbar-toolbar clearfix">
                    <!-- START Left nav -->
                    <ul class="nav navbar-nav">
                        <!-- Navbar collapse: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                        <li class="navbar-main navbar-toggle">
                            <a href="javascript:void(0);" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="meta">
                                    <span class="icon"><i class="ico-paragraph-justify3"></i></span>
                                </span>
                            </a>
                        </li>
                        <!--/ Navbar collapse -->
                    </ul>
                    <!--/ END Left nav -->

                    <!-- START navbar form -->
                    <div class="navbar-form navbar-left dropdown" id="dropdown-form">
                        <form action="" role="search">
                            <div class="has-icon">
                                <input type="text" class="form-control input-lg" placeholder="Search this site...">
                                <i class="ico-search form-control-icon"></i>
                            </div>
                        </form>
                    </div>
                    <!-- START navbar form -->

                    <!-- START Right nav -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Search form toggler -->
                        <li>
                            <a href="javascript:void(0);" data-toggle="dropdown" data-target="#dropdown-form">
                                <span class="meta">
                                    <span class="icon"><i class="ico-search"></i></span>
                                </span>
                            </a>
                        </li>
                        <!--/ Search form toggler -->

                        <!-- Shopping cart dropdown -->
                        <li class="dropdown custom" id="header-dd-cart">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="meta">
                                    <span class="icon"><i class="ico-cart4"></i></span>
                                    <span class="badge badge-primary pull-right">3</span>
                                </span>
                            </a>

                            <!-- Dropdown menu -->
                            <div class="dropdown-menu" role="menu">
                                <!--<div class="dropdown-header">
                                    <span class="title">Shopping Cart <span class="count"></span></span>
                                    <span class="option text-right"><a href="javascript:void(0);">Checkout</a></span>
                                </div>-->
                                <div class="dropdown-body slimscroll">
                                    <!-- indicator -->
                                    <div class="indicator"><span class="spinner spinner16"></span></div>
                                    <!--/ indicator -->

                                    <!-- Item list -->
                                    <div class="panel panel-minimal mb0">
                                        <ul class="list-group">
                                            <li class="list-group-item pt20 pb20">
                                                <div class="row">
                                                    <div class="col-xs-7">
                                                        <h5 class="semibold ellipsis">Long pants (x2)</h5>
                                                    </div>
                                                    <div class="col-xs-5">
                                                        <h5 class="semibold text-info pull-left">$21.50</h5>
                                                        <a href="#" class="pull-right text-muted"><i class="ico-close2"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item pt20 pb20">
                                                <div class="row">
                                                    <div class="col-xs-7">
                                                        <h5 class="semibold ellipsis">Awesome sandal (x4)</h5>
                                                    </div>
                                                    <div class="col-xs-5">
                                                        <h5 class="semibold text-info pull-left">$62.00</h5>
                                                        <a href="#" class="pull-right text-muted"><i class="ico-close2"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item pt20 pb20">
                                                <div class="row">
                                                    <div class="col-xs-7">
                                                        <h5 class="semibold ellipsis">Glove (x1)</h5>
                                                    </div>
                                                    <div class="col-xs-5">
                                                        <h5 class="semibold text-info pull-left">$4.00</h5>
                                                        <a href="#" class="pull-right text-muted"><i class="ico-close2"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--/ Item list -->
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <h4 class="ellipsis font-alt text-success" style="margin-top:7px;">$87.00</h4>
                                        </div>
                                        <div class="col-xs-7 text-right">
                                            <a href="#" class="btn btn-primary">Check Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Dropdown menu -->
                        </li>
                        <!--/ Shopping cart dropdown -->
                    </ul>
                    <!--/ END Right nav -->

                    <!-- START nav collapse -->
                    <div class="collapse navbar-collapse navbar-collapse-alt" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown ">
                                <a href="#" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
                                    <span class="meta">
                                        <span class="text">HOME</span>
                                        <span class="caret"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-alt">
                                    <li><a href="index.html">Layer Slider</a></li>
                                    <li><a href="index2.html">Parallax Background</a></li>
                                </ul>
                            </li>
                            <li class="dropdown ">
                                <a href="#" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
                                    <span class="meta">
                                        <span class="text">PAGES</span>
                                        <span class="caret"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-alt">
                                    <li><a href="page-about.html">About Us</a></li>
                                    <li><a href="page-contact.html">Contact Us</a></li>
                                    <li><a href="page-left-sidebar.html">Left Sidebar</a></li>
                                    <li><a href="page-right-sidebar.html">Right Sidebar</a></li>
                                    <li><a href="page-account-register.html">Account Register</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                </ul>
                            </li>
                            <li class="dropdown ">
                                <a href="#" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
                                    <span class="meta">
                                        <span class="text">BLOG</span>
                                        <span class="caret"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-alt">
                                    <li><a href="blog-large.html">Large</a></li>
                                    <li><a href="blog-medium.html">Medium</a></li>
                                    <li><a href="blog-single.html">Single</a></li>
                                    <li><a href="blog-left-sidebar.html">Left sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Right sidebar</a></li>
                                    <li><a href="blog-masonry.html">Masonry</a></li>
                                </ul>
                            </li>
                            <li class="dropdown ">
                                <a href="#" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
                                    <span class="meta">
                                        <span class="text">PORTFOLIO</span>
                                        <span class="caret"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-alt">
                                    <li><a href="portfolio-2-columns.html">2 Columns</a></li>
                                    <li><a href="portfolio-3-columns.html">3 Columns</a></li>
                                    <li><a href="portfolio-4-columns.html">4 Columns</a></li>
                                    <li><a href="portfolio-single.html">Single</a></li>
                                </ul>
                            </li>
                            <li class="dropdown active">
                                <a href="#" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
                                    <span class="meta">
                                        <span class="text">SHOP</span>
                                        <span class="caret"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-alt">
                                    <li><a href="shop.html">Default</a></li>
                                    <li><a href="shop-item-detail.html">Item detail</a></li>
                                    <li><a href="shop-left-sidebar.html">Left sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">Right sidebar</a></li>
                                    <li><a href="shop-shopping-cart.html">Shopping cart</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/ END nav collapse -->
                </div>
                <!--/ END Toolbar -->
            </div>
        </header>
        <!--/ END Template Header -->

        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START page header -->
            <section class="page-header page-header-block nm">
                <!-- pattern -->
                <div class="pattern pattern9"></div>
                <!--/ pattern -->
                <div class="container pt15 pb15">
                    <div class="page-header-section">
                        <h4 class="title">Shop Left Sidebar</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">Shop</a></li>
                                <li class="active">Left Sidebar</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            <!--/ END page header -->

            <!-- START Shop Content -->
            <section class="section bgcolor-white">
                <div class="container">
                    <!-- START Row -->
                    <div class="row">
                        <!-- START Left Section -->
                        <div class="col-md-3 mb15">
                            <!-- Category -->
                            <div class="pt25 mb25">
                                <!-- Title -->
                                <h4 class="section-title font-alt mt0">Category</h4>
                                <!--/ Title -->
                                <ul class="list-unstyled">
                                    <li class="mb5"><i class="ico-angle-right text-muted mr5"></i> <a href="javascript:void(0);">New In</a></li>
                                    <li class="mb5"><i class="ico-angle-right text-muted mr5"></i> <a href="javascript:void(0);">Shoes</a></li>
                                    <li class="mb5"><i class="ico-angle-right text-muted mr5"></i> <a href="javascript:void(0);">Clothing</a></li>
                                    <li class="mb5"><i class="ico-angle-right text-muted mr5"></i> <a href="javascript:void(0);">Accessories</a></li>
                                    <li class="mb5"><i class="ico-angle-right text-muted mr5"></i> <a href="javascript:void(0);">Bags</a></li>
                                    <li class="mb5"><i class="ico-angle-right text-muted mr5"></i> <a href="javascript:void(0);">Sports</a></li>
                                    <li class="mb5"><i class="ico-angle-right text-muted mr5"></i> <a href="javascript:void(0);">Groming</a></li>
                                </ul>
                            </div>
                            <!--/ Category -->

                            <!-- Price Range -->
                            <div class="pt25">
                                <!-- Title -->
                                <h4 class="section-title font-alt mt0">Price Range</h4>
                                <!--/ Title -->
                                <p class="text-muted mb20">Filter items base on price range</p>
                                <div id="price-range-slider" class="slider-primary mb20"></div>
                                <form id="price-range-form">
                                    <div class="table-layout mb0">
                                        <div class="col-xs-5"><input type="number" class="form-control" name="price-start" value="0"></div>
                                        <div class="col-xs-2 text-center">To</div>
                                        <div class="col-xs-5"><input type="number" class="form-control" name="price-end" value="200"></div>
                                    </div>
                                </form>
                            </div>
                            <!--/ Price Range -->

                            <!-- Size -->
                            <div class="pt25 mb25">
                                <!-- Title -->
                                <h4 class="section-title font-alt mt0">Size</h4>
                                <!--/ Title -->
                                <div class="btn-tag">
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">XS</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">S</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">M</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">L</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">XL</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">XXL</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">XXXL</a>
                                </div>
                            </div>
                            <!--/ Size -->

                            <!-- Colors -->
                            <div class="pt25 mb25">
                                <!-- Title -->
                                <h4 class="section-title font-alt mt0">Colors</h4>
                                <!--/ Title -->
                                <a href="#" style="color:#2ecc71;"><i class="ico-circle22 fsize24"></i></a>
                                <a href="#" style="color:#3498db;"><i class="ico-circle22 fsize24"></i></a>
                                <a href="#" style="color:#9b59b6;"><i class="ico-circle22 fsize24"></i></a>
                                <a href="#" style="color:#34495e;"><i class="ico-circle22 fsize24"></i></a>
                                <a href="#" style="color:#f1c40f;"><i class="ico-circle22 fsize24"></i></a>
                                <a href="#" style="color:#e74c3c;"><i class="ico-circle22 fsize24"></i></a>
                                <a href="#" style="color:#e67e22;"><i class="ico-circle22 fsize24"></i></a>
                            </div>
                            <!--/ Colors -->

                            <!-- Delivery -->
                            <div class="pt25">
                                <!-- Title -->
                                <h4 class="section-title font-alt mt0">Delivery Options</h4>
                                <!--/ Title -->
                                <p class="radio custom-radio custom-radio-primary mb10">  
                                    <input type="radio" name="delivery" id="customradio1" value="option1">  
                                    <label for="customradio1">&nbsp;&nbsp;Free delivery</label>   
                                </p>
                                <p class="radio custom-radio custom-radio-primary mb10">  
                                    <input type="radio" name="delivery" id="customradio2" value="option1">  
                                    <label for="customradio2">&nbsp;&nbsp;Paid delivery</label>   
                                </p>
                                <p class="radio custom-radio custom-radio-primary mb10">  
                                    <input type="radio" name="delivery" id="customradio3" value="option1">  
                                    <label for="customradio3">&nbsp;&nbsp;Pickup by yourself</label>   
                                </p>
                            </div>
                            <!--/ Delivery -->
                        </div>
                        <!--/ END Left Section -->

                        <!-- START Right Section -->
                        <div class="col-md-9">
                            <!-- START Section Header -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="section-header text-center">
                                        <h1 class="section-title font-alt mb25">Quality Product</h1>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="input-group input-group-lg">
                                                    <input type="text" class="form-control" placeholder="Search...">
                                                    <div class="input-group-btn">
                                                        <button type="button" class="btn btn-default">Search</button>
                                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
                                                        <ul class="dropdown-menu">
                                                            <li role="presentation" class="dropdown-header">SHOES</li>
                                                            <li><a href="#">Casual</a></li>
                                                            <li><a href="#">Sandal &amp; Flip flop</a></li>
                                                            <li><a href="#">Sneaker &amp; Skate</a></li>
                                                            <li role="presentation" class="dropdown-header">CLOTHINGS</li>
                                                            <li><a href="#">Shirt</a></li>
                                                            <li><a href="#">T-Shirt</a></li>
                                                            <li><a href="#">Polo Shirt</a></li>
                                                            <li><a href="#">Pants</a></li>
                                                            <li><a href="#">Shorts</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ END Section Header -->


<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus similique eos vitae quos, tenetur neque voluptas quidem quia porro. Ducimus officiis, omnis consectetur ea nesciunt alias inventore eaque quibusdam nostrum tenetur nam provident voluptatibus, sequi ratione repellat atque ex, aperiam?</p>


                         <?php $no=0; foreach ($tester->result() as $key){ $no++; ?>
                                    <?php  echo $no.'<br>'; ?>
                                   <?php echo '<div class="btn btn-primary">'. $key->nama_barang.'</div><br>';  ?>
                                    <?php echo $key->total_barang.'<br>'; ?>
                                    <?php echo $key->harga_barang.'<hr>'; ?>
                           <?php }?>
                    
                        <!--/ END Right Section -->
                    </div>
                    <!--/ END Row -->
                </div>
            </section>
            <!--/ END Shop Content -->

            <!-- START To Top Scroller -->
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
            <!--/ END To Top Scroller -->
        </section>
        <!--/ END Template Main -->

        <!-- START Template Footer -->
        <footer role="contentinfo" class="bgcolor-dark pt25">
            <!-- container -->
            <div class="container mb25">
                <!-- row -->
                <div class="row">
                    <!-- About -->
                    <div class="col-md-4">
                        <h4 class="font-alt mt0">ABOUT US</h4>
                        <p>Adminre is a clean and flat backend and frontend theme build with Twitter bootstrap</p>
                        <p> Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit.</p>
                        <a href="javascript:void(0);" class="text-primary">Learn More</a>
                    </div>
                    <div class="visible-sm visible-xs" style="margin-bottom:25px;"></div>
                    <!--/ About -->

                    <!-- Address + Social -->
                    <div class="col-md-4" style="background: url('<?php echo base_url(); ?>assets/image/others/map-vector.png') no-repeat center center;background-size: 100%;">
                        <h4 class="font-alt mt0">ADDRESS</h4>
                        <address>
                            <strong>Twitter, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                        <h4 class="font-alt mt0">STAY CONNECT</h4>
                        <a href="javascript:void(0);" class="text-muted mr15" data-toggle="tooltip" title="Facebook"><i class="ico-facebook2"></i></a>
                        <a href="javascript:void(0);" class="text-muted mr15" data-toggle="tooltip" title="Twitter"><i class="ico-twitter2"></i></a>
                        <a href="javascript:void(0);" class="text-muted mr15" data-toggle="tooltip" title="Vimeo"><i class="ico-vimeo"></i></a>
                        <a href="javascript:void(0);" class="text-muted mr15" data-toggle="tooltip" title="Flickr"><i class="ico-flickr2"></i></a>
                        <a href="javascript:void(0);" class="text-muted mr15" data-toggle="tooltip" title="Google+"><i class="ico-google-plus2"></i></a>
                        <a href="javascript:void(0);" class="text-muted mr15" data-toggle="tooltip" title="Instagram"><i class="ico-instagram2"></i></a>
                    </div>
                    <div class="visible-sm visible-xs" style="margin-bottom:25px;"></div>
                    <!--/ Address + Social -->

                    <!-- Newsletter -->
                    <div class="col-md-4">
                        <h4 class="font-alt mt0">NEWS LETTER</h4>
                        <form role="form">
                            <div class="form-group">
                                <p class="form-control-static">Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="newsletter_email" placeholder="Enter email">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Subscribe Now</button>
                        </form>
                    </div>
                    <!--/ Newsletter -->
                </div>
                <!--/ row -->
            </div>
            <!--/ container -->

            <!-- bottom footer -->
            <div class="footer-bottom pt15 pb15 bgcolor-dark bgcolor-dark-darken10">
                <!-- container -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- copyright -->
                            <p class="nm text-muted">&copy; Copyright 2014 by <a href="javascript:void(0);" class="text-white">Adminre</a>. All Rights Reserved.</p>
                            <!--/ copyright -->
                        </div>
                        <div class="col-sm-6 text-right hidden-xs">
                            <a href="javascript:void(0);" class="text-white">Privacy Policy</a>
                            <span class="ml5 mr5">&#8226;</span>
                            <a href="javascript:void(0);" class="text-white">Terms of Service</a>
                        </div>
                    </div>
                </div>
                <!--/ container -->
            </div>
            <!--/ bottom footer -->
        </footer>
        <!--/ END Template Footer -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Application and vendor script : mandatory -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/vendor.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/core.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/frontend/app.js"></script>
        <!--/ Application and vendor script : mandatory -->

        <!-- Plugins and page level script : optional -->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/smoothscroll/js/smoothscroll.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/jquery-ui/js/jquery-ui.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/javascript/frontend/shop/shop.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>