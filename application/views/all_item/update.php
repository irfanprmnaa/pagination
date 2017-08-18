
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

    <br>
<form class="form-horizontal" action="<?php echo site_url('item/update'); ?>" method="post">
<?php echo validation_errors();?>
   
    <div class="form-group">
        <label class="col-lg-2 control-label">Nis</label>
        <div class="col-lg-5">
            <input type="text" name="nis" class="form-control"  placeholder="nis" value="<?php echo $testing['nis'];?>" >
             <input type="hidden" name="id" value="<?php echo $this->uri->segment(3); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="col-lg-2 control-label">Judul</label>
        <div class="col-lg-5">
            <input type="text" name="judul" class="form-control"  placeholder="judul" value="<?php echo $testing['judul'];?>">
        </div>
    </div>
     <div class="form-group">
        <label class="col-lg-2 control-label">Konten</label>
        <div class="col-lg-5">
           <input type="text" name="konten" class="form-control"  placeholder="Konten" value="<?php echo $testing['konten'];?>">
           
        </div>
    </div>
    
    <div class="form-group well">
        <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-hdd"></i> Update</button>
        <a href="<?php echo site_url('item/homepage');?>" class="btn btn-default">Kembali</a>
    </div>
</form> 


    <p></p>
        <!-- page scripts -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/mixitup/jquery.mixitup.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/appear/jquery.appear.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/actions.js"></script>                
        <!-- ./page scripts -->
    </body>
</html>

