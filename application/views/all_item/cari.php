
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

                    <div class="col-sm-9">
                   
<hr>    

<?php echo $title; ?>
<?php echo $message;?>
<Table class="table table-striped">
    <thead>
        <tr>
            <td>No.</td>
            <td>kategori</td>
            <td>nama barang</td>
            <td colspan="2"></td>
        </tr>
    </thead>
    <?php  foreach($posts as $b ):?>
    <tr>
        <td><?php echo $b->nis;?></td>
        <td><?php echo $b->judul;?></td>
        <td><?php echo $b->konten;?></td>
    </tr>
    <?php endforeach;?>
</Table>


   <a class="btn btn-primary" href="<?php echo site_url('item/homepage'); ?>">Kembali</a>

                        
                    </div>
                </div>
                <!--/ END Row -->

                
        <!-- page scripts -->
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/mixitup/jquery.mixitup.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/plugins/appear/jquery.appear.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/actions.js"></script>                
        <!-- ./page scripts -->
    </body>
</html>

