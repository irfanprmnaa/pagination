
     <!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>Atlant - Front-End Template</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- END META SECTION -->
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/styles.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/style2.css" media="screen">
            
    </head>
    <body>
        <!-- page container -->
        <div class="page-container">
            
            <!-- page header -->
            <div class="page-header">
                
                <!-- page header holder -->
                <div class="page-header-holder">
                    
                    <!-- page logo -->
                    <div class="logo">
                        <a href="index.html">Atlant - Front-end Template</a>
                    </div>
                    <!-- ./page logo -->

                    <!-- search -->
                    <div class="search">
                        <div class="search-button"><span class="fa fa-search"></span></div>
                        <div class="search-container animated fadeInDown">
                            <form action="<?php echo site_url('item/cari'); ?>" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search..." name="cari" />
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><span class="fa fa-search"></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- ./search -->

                    <!-- nav mobile bars -->
                    <div class="navigation-toggle">
                        <div class="navigation-toggle-button"><span class="fa fa-bars"></span></div>
                    </div>
                    <!-- ./nav mobile bars -->
                    
                    <!-- navigation -->
                    <ul class="navigation">
                        <li>
                            <a href="#">Home</a>
                            <ul>
                                <li><a href="index.html">With Slider</a></li>
                                <li><a href="index-default.html">Default</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages</a>
                            <ul>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog</a>
                            <ul>
                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                <li><a href="blog-post.html">Blog Post</a></li>                                

                   
                   
                            </ul>
                        </li>
                        <li>
                            <a href="#">Portfolio</a>
                            <ul>
                                <li><a href="portfolio-with-title.html">Portfolio With Title</a></li>
                                <li><a href="portfolio-2column.html">Portfolio 2 Column</a></li>
                                <li><a href="portfolio-3column.html">Portfolio 3 Column</a></li>
                                <li><a href="portfolio-4column.html">Portfolio 4 Column</a></li>
                            </ul>
                        </li>
                         <li>
                                <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
                                    <span class="meta">
                                        <i class="fa fa-pencil">ADD</i>
                                    </span>
                                </a>
                            </li>
                        <li><a href="<?php echo site_url('autentikasi/logout') ?>">Logout</a></li>
                    </ul>
                    <!-- ./navigation -->                        
                
                    
                </div>
                <!-- ./page header holder -->
                
            </div>
            <!-- ./page header -->
            
            <!-- page content -->
            <div class="page-content">
                
                <!-- page content wrapper -->
                <div class="page-content-wrap bg-light">
                    <!-- page content holder -->
                    <div class="page-content-holder no-padding">
                        <!-- page title -->
                        <div class="page-title">                            
                            <h1>Blog Post</h1>
                            <!-- breadcrumbs -->
                            <ul class="breadcrumb">
                                <li><a href="#"><?php echo $this->session->userdata('email'); ?></a></li>
                                <li><a href="#"><?php echo $this->session->userdata('username'); ?></a></li>
                                <li class="active">Blog Post</li>
                            </ul>               
                            <!-- ./breadcrumbs -->
                        </div>
                        <!-- ./page title -->
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                
                               
                <!-- page content wrapper -->
                <div class="page-content-wrap">                    
                    <!-- page content holder -->
                    <div class="page-content-holder padding-v-30">
                            <?php echo $message; ?>
                        <div class="row">                        
                            <div class="col-xs-12 col-sm-9">
                           
                                <div class="blog-content">
                                    <img src="<?php echo base_url() ?>assets/assets/nature4.jpg" class="img-responsive"/>
                                    <br>

                     <div class="jumbotron">
                        <h1>Hello, world!</h1>
                        <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
                      </div>
              <hr>
              
   <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="row">

            <?php $no=0; foreach ($testing->result() as $bar ): $no++; ?>
            <div class="col-xs-6 col-lg-4">
            <br><br>

    <img class=" img-bordered" src="<?php echo base_url();?>assets/post/<?php echo $bar->image; ?>" alt="" width="60px">
    <br><br>
    <h5><a href="<?php echo site_url('item/update/'.$bar->nis); ?>"><?php echo $bar->username; ?></a><br></h5>
    <a href=""><?php echo $bar->email; ?></a>
    <p class="help-block">Judul = <?php echo $bar->judul; ?></p>
    <div>Konten = <?php echo word_limiter($bar->konten,10); ?></div><br>
    <!-- <div class="section-title font-alt mt0">Rp. <?php echo number_format($bar->harga)  ?></div> -->
    <a class="btn btn-default" href="<?php echo site_url('item/update/'.$bar->nis);?>"><i class="glyphicon glyphicon-edit"></i></a>&nbsp
    <a class="btn btn-danger" href="<?php echo site_url('item/delete/'.$bar->nis);?>"><i class="glyphicon glyphicon-trash"></i></a>

              <p><a class="btn btn-default" href="#" role="button">View details »</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
            <?php endforeach; ?>
            <center><?php echo $this->pagination->create_links(); ?></center>
         
          </div><!--/row-->
        </div>       
       
                    </div>
                    <div class="block">
                        <ul class="media-list">
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-text" src="<?php echo base_url() ?>assets/assets/img/users/user.jpg" alt="Dmitry Ivaniuk" width="64">
                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading">Dmitry Ivaniuk</h6>
                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                    <p class="text-muted">October 24, 2014, 15:20</p>
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-text" src="<?php echo base_url() ?>assets/assets/img/users/user6.jpg" alt="Darh Vader" width="64">
                                        </a>
                                        <div class="media-body">
                                          <h6 class="media-heading">Darth Vader</h6>
                                          <p>What? What did you say? It's not even a language...</p>
                                          <p class="text-muted">October 24, 2014, 16:20</p>
                                        </div>
                                    </div>                                                                                          
                                </div>                                            
                            </li>
                            <li class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-text" src="<?php echo base_url() ?>assets/assets/img/users/user7.jpg" alt="Samuel Leroy Jackson" width="64">
                                </a>
                                <div class="media-body">
                                    <h6 class="media-heading">Samuel Leroy Jackson</h6>
                                    <p>We happy? Vincent, we happy?</p>
                                    <p class="text-muted">October 24, 2014, 14:30</p>
                                    <div class="media">
                                        <a class="pull-left" href="#">
                                            <img class="media-object img-text" src="<?php echo base_url() ?>assets/assets/img/users/user5.jpg" alt="John Travolta" width="64">
                                        </a>
                                        <div class="media-body">
                                          <h6 class="media-heading">John Travolta</h6>
                                          <p>Yeeees we happy!</p>
                                          <p class="text-muted">October 24, 2014, 14:32</p>
                                        </div>
                                    </div>                                                                                          
                                </div>
                            </li>
                        </ul>                                    
                    </div>
                    <div class="text-column">
                        <h3>New Comment</h3>
                        <div class="text-column-info">You must be <a href="#">logged in</a> to post a comment.</div>                                    
                    </div>
                            </div>
                            <div class="col-md-3">
                                
                                <div class="text-column this-animate" data-animate="fadeInRight">                                    
                                    <h4>Categories</h4>
                                    <div class="list-links">                                        
                                        <a href="#">Lihat produk sepatu</a>
                                        <a href="#">Lihat produk sweater</a>
                                        <a href="#">Lihat produk kaos</a>
                                        <a href="#">Cras ut neque metu</a>
                                        <a href="#">Etiam augue orci</a>                                                                                                                                
                                    </div>
                                </div>
                                
                                <div class="text-column this-animate" data-animate="fadeInRight">                                    
                                    <h4>Archive</h4>
                                    <div class="list-links">                                        
                                        <a href="#">April 2014</a>
                                        <a href="#">October 2013</a>
                                        <a href="#">March 2013</a>
                                        <a href="#">December 2012</a>
                                        <a href="#">January 2012</a>
                                        <a href="#">March 2011</a>
                                        <a href="#">February 2011</a>
                                        <a href="#">January 2011</a>
                                        <a href="#">December 2010</a>                                                                                                                             
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    <!-- ./page content holder -->
                </div>
                <!-- ./page content wrapper -->
                                
            </div>
            <!-- ./page content -->
                <?php echo validation_errors(); ?>
            <?php form_open('item/comment'); ?>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>Body</label>
                    <input type="text" name="body" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
              
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title">Add Data</h4></center>
                  </div>
             <div class="modal-body">
           <form class="form-horizontal" action="<?php echo site_url('item/add'); ?>" method="post" enctype="multipart/form-data">
 <div class="form-group">
        <label class="col-lg-2 control-label">Nis</label>
        <div class="col-lg-5">
            <input type="text" name="nis" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Judul</label>
        <div class="col-lg-5">
            <input type="text" name="judul" class="form-control">
        </div>
    </div>
  <div class="form-group">
        <label class="col-lg-2 control-label">Konten</label>
        <div class="col-lg-5">
           <textarea name="konten" class="form-control" cols="30" rows="10"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">image</label>
        <div class="col-lg-5">
            <input type="file" name="userfile" size="20" class="form-control">
        </div>
    </div>
    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
        <a href="<?php echo site_url('item/homepage');?>" class="btn btn-default">Kembali</a>
    </div>
</form>
       </div>
    </div>
  </div>
</div>

<p></p>
            <!-- page footer -->
            <div class="page-footer">
                
                <!-- page footer wrap -->
                <div class="page-footer-wrap bg-dark-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder page-footer-holder-main">
                                                
                        <div class="row">
                            
                            <!-- about -->
                            <div class="col-md-3">
                                <h3>About Template</h3>
                                <p>Lorem ipsum dolor natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                            </div>
                            <!-- ./about -->
                            
                            <!-- quick links -->
                            <div class="col-md-3">
                                <h3>Quick links</h3>
                                
                                <div class="list-links">
                                    <a href="#">Home</a>                                    
                                    <a href="#">Pages</a>
                                    <a href="#">Portfolio</a>
                                    <a href="#">Shortcodes</a>
                                </div>                                
                            </div>
                            <!-- ./quick links -->
                            
                            <!-- recent tweets -->
                            <div class="col-md-3">
                                <h3>Recent Tweets</h3>
                                
                                <div class="list-with-icon small">
                                    <div class="item">
                                        <div class="icon">
                                            <span class="fa fa-twitter"></span>
                                        </div>
                                        <div class="text">
                                            <a href="#">@JohnDoe</a> Hello, here is my new front-end template. Check it out
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <span class="fa fa-twitter"></span>
                                        </div>
                                        <div class="text">
                                            <a href="#">@Aqvatarius</a> Release of new update for Atlant is done and ready to use
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="icon">
                                            <span class="fa fa-twitter"></span>
                                        </div>
                                        <div class="text">
                                            <a href="<?php echo site_url('autentikasi/logout') ?>">@Aqvatarius</a> Check out my new admin template Atlant, it's realy awesome template
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- ./recent tweets -->
                            
                            <!-- contacts -->
                            <div class="col-md-3">
                                <h3>Contacts</h3>
                                
                                <div class="footer-contacts">
                                    <div class="fc-row">
                                        <span class="fa fa-home"></span>
                                        000 StreetName, Suite 111,<br/> 
                                        City Name, ST 01234
                                    </div>
                                    <div class="fc-row">
                                        <span class="fa fa-phone"></span>
                                        (123) 456-7890
                                    </div>
                                    <div class="fc-row">
                                        <span class="fa fa-envelope"></span>
                                        <strong>John Doe</strong><br>
                                        <a href="mailto:#">johndoe@domain.com</a>
                                    </div>                                    
                                </div>
                                
                                <h3>Subscribe</h3>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Your email"/>
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><span class="fa fa-paper-plane"></span></button>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- ./contacts -->
                            
                        </div>
                        
                    </div>
                    <!-- ./page footer holder -->
                </div>
                <!-- ./page footer wrap -->
                
                <!-- page footer wrap -->
                <div class="page-footer-wrap bg-darken-gray">
                    <!-- page footer holder -->
                    <div class="page-footer-holder">
                        
                        <!-- copyright -->
                        <div class="copyright">
                            &copy; 2014 Atlant Theme by <a href="#">Aqvatarius</a> - All Rights Reserved                            
                        </div>
                        <!-- ./copyright -->
                        
                        <!-- social links -->
                        <div class="social-links">
                            <a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                            <a href="#"><span class="fa fa-vimeo-square"></span></a>
                            <a href="#"><span class="fa fa-dribbble"></span></a>
                        </div>                        
                        <!-- ./social links -->
                        
                    </div>
                    <!-- ./page footer holder -->
                </div>
                <!-- ./page footer wrap -->
                
            </div>
            <!-- ./page footer -->
            
        </div>        
        <!-- ./page container -->
        
        <!-- page scripts -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/mixitup/jquery.mixitup.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/appear/jquery.appear.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/actions.js"></script>                
        <!-- ./page scripts -->
    </body>
</html>






