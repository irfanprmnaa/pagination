<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Atlant - Responsive Bootstrap Admin Template</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url() ?>assets2/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        
        <div class="login-container">
        
            <div class="login-box animated fadeInDown">
                
                <div class="login-body">
                    <div class="login-title"><strong>Log In</strong> to your account</div>

                    
                    <form action="<?php echo site_url('autentikasi/proseslogin'); ?>" class="form-horizontal" method="post">

                       <div class="alert alert-warning">
                         <?php echo validation_errors();?>
                        <span class="semibold"></span>&nbsp;&nbsp;<?php echo $this->session->flashdata('error');?>
                         &nbsp;&nbsp;<?php echo $this->session->flashdata('berhasil');?>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="username" placeholder="Username"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="password" class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            
                             <button type="submit" class="btn btn-info btn-block">Log In</button>
                        </div>
                        <div class="col-md-6">
                           <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                    </div>
                    <div class="login-or">OR</div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-twitter"><span class="fa fa-twitter"></span> Twitter</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-info btn-block btn-facebook"><span class="fa fa-facebook"></span> Facebook</button>
                        </div>
                        <div class="col-md-4">                            
                            <button class="btn btn-info btn-block btn-google"><span class="fa fa-google-plus"></span> Google</button>
                        </div>
                    </div>
                    <div class="login-subtitle">
                        Don't have an account yet? <a type="button" data-toggle="modal" data-target=".bs-example-modal-lg" href="<?php echo site_url('autentikasi/singup') ?>">Create an account</a>
                    </div>
                    </form>
                </div>

                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2014 AppName
                    </div>
                    <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>
            
        </div>
<!-- Small modal -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title">Create a new account</h4></center>
                  </div>
      <div class="modal-body">
     <form class="form-horizontal" action="<?php echo site_url('autentikasi/prosessignup'); ?>" method="post">
 <div class="form-group">

        <label class="col-lg-2 control-label">Username</label>
        <div class="col-lg-5">
            <input type="text" name="username" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Email</label>
        <div class="col-lg-5">
            <input type="text" name="email" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Password</label>
        <div class="col-lg-5">
            <input type="password" name="password" class="form-control">
        </div>
    </div>
    
  <div class="form-group">
        <label class="col-lg-2 control-label">Retype Password</label>
        <div class="col-lg-5">
            <input type="password" name="password2" class="form-control">
        </div>
    </div>
    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
        <a href="<?php echo site_url('autentikasi/login');?>" class="btn btn-default">Kembali</a>
    </div>
</form>
    </div>
  </div>
</div></div>

        
    </body>
</html>


 <script type="text/javascript" src="<?php echo base_url();?>assets2/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>assets2/js/plugins/mixitup/jquery.mixitup.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets2/js/plugins/appear/jquery.appear.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>assets2/js/actions.js"></script> 