<!DOCTYPE html>
<!-- 
TEMPLATE NAME : Adminre - backend
VERSION : 1.3.0
AUTHOR : JohnPozy
AUTHOR URL : http://themeforest.net/user/JohnPozy
EMAIL : pampersdry@gmail.com
LAST UPDATE: 2015/01/05

** A license must be purchased in order to legally use this template for your project **
** PLEASE SUPPORT ME. YOUR SUPPORT ENSURE THE CONTINUITY OF THIS PROJECT **
-->
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Adminre - backend</title>
        <meta name="author" content="pampersdry.info">
        <meta name="description" content="Adminre is a clean and flat backend and frontend theme build with twitter bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/image/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>assets/image/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>assets/image/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>assets/image/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/image/favicon.ico">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <!--/ Plugins stylesheet : optional -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheet/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheet/layout.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/stylesheet/uielement.css">
        <!--/ Application stylesheet -->

        <!-- Theme stylesheet : optional -->
        <!--/ Theme stylesheet : optional -->

        <!-- modernizr script -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/modernizr/js/modernizr.js"></script>
        <!--/ modernizr script -->
        <!-- END STYLESHEETS -->
    </head>
    <!--/ END Head -->

    <!-- START Body -->
    <body>
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <section class="container">
                <!-- START row -->
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <!-- Brand -->
                        <div class="text-center" style="margin-bottom:20px;">
                            <span class="logo-figure inverse"></span>
                            <span class="logo-text inverse"></span>
                            <h5 class="semibold text-muted mt-5">Create a new account.</h5>
                        </div>
                        <!--/ Brand -->

                        <!-- Register form -->
                        <form class="panel" name="form-register" action="<?php echo site_url('autentikasi/prosessignup'); ?>" method="post">
                            <ul class="list-table pa15">
                                <li>
                                    <!-- Alert message -->
                                    <div class="alert alert-warning nm">
                                        <span class="semibold">Note :</span>&nbsp;&nbsp;<?php echo $this->session->flashdata('error');?>
                                    </div>
                                    <!--/ Alert message -->
                                </li>
                                <li class="text-right" style="width:20px;"><a href="javascript:void(0);"><i class="ico-question-sign fsize16"></i></a></li>
                            </ul>
                            <hr class="nm">
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="control-label">Username</label>
                                    <div class="has-icon pull-left">
                                        <input type="text" class="form-control" name="username" data-parsley-required>
                                        <i class="ico-user2 form-control-icon"></i>
                                    </div>
                                </div>
                                        <div class="form-group">
                                    <label class="control-label">Password</label>
                                    <div class="has-icon pull-left">
                                        <input type="password" class="form-control" name="password" data-parsley-required>
                                        <i class="ico-key2 form-control-icon"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Retype Password</label>
                                    <div class="has-icon pull-left">
                                        <input type="password" class="form-control" name="password2" data-parsley-equalto="input[name=password]">
                                        <i class="ico-asterisk form-control-icon"></i>
                                    </div>
                                </div>                            
                            <div class="panel-footer">
                                <button type="submit" class="btn btn-block btn-success"><span class="semibold">Sign up</span></button>
                            </div>
                        </div>
                        </form>
                    <div>
                        <p class="text-center">
                            <span class="text-muted">Already have an account? <a href="login" >Sign in here</a></span>
                        </p>
                    </div>
                </div>
                <!--/ END row -->
            </section>
            <!--/ END Template Container -->
        </section>
        <!--/ END Template Main -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Application and vendor script : mandatory -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/javascript/vendor.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/javascript/core.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/javascript/backend/app.js"></script>
        <!--/ Application and vendor script : mandatory -->

        <!-- Plugins and page level script : optional -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/plugins/parsley/js/parsley.js"></script>
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>