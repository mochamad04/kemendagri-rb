<!DOCTYPE HTML>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <title><?php echo $title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
    	
    	<meta name="robots" content="index, follow">
    	<meta name="description" content="<?php echo $description; ?>">
    	<meta name="keywords" content="<?php echo $keywords; ?>">
    	<meta name="author" content="BNPP">
    	<meta name="robots" content="all,index,follow">
    	<meta http-equiv="Content-Language" content="id-ID">
    	<meta NAME="Distribution" CONTENT="Global">
    	<meta NAME="Rating" CONTENT="General">
    	<link rel="canonical" href="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>"/>
    	<?php if ($this->uri->segment(1)=='berita' AND $this->uri->segment(2)=='detail'){ $rows = $this->model_utama->view_where('berita',array('judul_seo' => $this->uri->segment(3)))->row_array();
    	   echo '<meta property="og:title" content="'.$title.'" />
    			 <meta property="og:type" content="article" />
    			 <meta property="og:url" content="'.base_url().''.$this->uri->segment(3).'" />
    			 <meta property="og:image" content="'.base_url().'asset/foto_berita/'.$rows['gambar'].'" />
    			 <meta property="og:description" content="'.$description.'"/>';
    	} ?>
    	<link rel="shortcut icon" href="<?php echo base_url(); ?>asset/images/<?php echo favicon(); ?>" />
        <!-- Include All CSS here-->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/bootstrap.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/fontawesome-all.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/line-awesome.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/icofont.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/owl.carousel.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/owl.theme.default.min.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/slick.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/animate.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/magnific-popup.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/preset.css"/>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/settings.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/navigation.css"/>

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/theme.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/responsive.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>template/<?php echo template(); ?>/css/presets/<?php echo background(); ?>.css" id="colorChange<?php echo background(); ?>"/>  
    	<style type="text/css">
    		.the-menu a.active{ color:red !important; }
    	</style>
        <script>
        var a2a_config = a2a_config || {};
        a2a_config.overlays = a2a_config.overlays || [];
        a2a_config.overlays.push({
             services: ['whatsapp', 'facebook', 'twitter']
        });
        </script>
        
        <script async src="https://static.addtoany.com/menu/page.js"></script>
        <!-- End Include All CSS -->
         
    </head>
    <?php include "menu.php"; ?>
    <?php echo $contents; ?>
    <?php include "footer.php"; ?>