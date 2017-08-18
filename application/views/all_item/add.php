
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
        
    </head>
    <body>
        <?php echo validation_errors();?>
<form class="form-horizontal" action="<?php echo site_url('item/add'); ?>" method="post">

    <div class="form-group">
        <label class="col-lg-2 control-label">Nis</label>
        <div class="col-lg-5">
            <input type="text" name="nis" class="form-control"  placeholder="NIS">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Judul</label>
        <div class="col-lg-5">
            <input type="text" name="judul" class="form-control"  placeholder="Judul">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Konten</label>
        <div class="col-lg-5">
            <input type="text" name="konten" class="form-control"  placeholder="Konten">
        </div>
    </div>
    <div class="form-group well">
        <button class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Simpan</button>
        <a href="<?php echo site_url('item/homepage');?>" class="btn btn-default">Kembali</a>
    </div>
</form> 
     
        <!-- page scripts -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/mixitup/jquery.mixitup.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/appear/jquery.appear.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/actions.js"></script>                
        <!-- ./page scripts -->
    </body>
</html>

