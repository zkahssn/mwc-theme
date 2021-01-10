<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset');?>" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title class = "siteName"> <?php wp_title(); ?> </title>
<?php getMyResources(); wp_head(); ?>
</head>
  <header class = "mainHeader">
  <!---site -header -->
  <!-- <nav class="ea-nav navbar navbar-default site-nav navbar-fixed-top" role="navigation">  -->
  <!-- Brand and toggle get grouped for better mobile display --> 
    <!-- Collect the nav links, forms, and other content for toggling --> 
    <div class="collapse navbar-collapse navbar-ex1-collapse navbar-right"> </div>

    <?php $args = array('theme_location' => 'primary');?>

    <div class="custom-logo">
      <?php 
      if ( function_exists('the_custom_logo') ) {
        the_custom_logo();
      }?>
    </div>

    <div class="custom-menu">
      <?php wp_nav_menu($args);?>
    </div>
  </header>

  <body>
    <br>
  <!-- This body tag gets closed in the footer.php file... even the <html> tag -->