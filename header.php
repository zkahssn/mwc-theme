<!DOCTYPE html>

<html <?php language_attributes(); ?>>
<head>
<meta charset="?php bloginfo('charset');?>" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lobster+Two|Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Alata|Arimo:400,700|Muli|Nunito|Rubik&display=swap" rel="stylesheet">

<title class = "siteName"> <?php wp_title(); ?> </title>
<?php wp_head();?>
</head>
<header class = "mainHeader">
<!---site -header -->
<!-- <nav class="ea-nav navbar navbar-default site-nav navbar-fixed-top" role="navigation">  -->
<!-- Brand and toggle get grouped for better mobile display --> 
  <div class="ea-header navbar-header"> 
  <a class="navbar-brand siteName" href="<?php bloginfo('url')?>"><?php bloginfo('name');?> </a> 
  </div> 
  <!-- Collect the nav links, forms, and other content for toggling --> 
  <div class="collapse navbar-collapse navbar-ex1-collapse navbar-right"> 

 <?php 
 
 $args = array('theme_location' => 'primary');?>

<?php wp_nav_menu($args);?>
  <!-- </div>
</nav>  -->
</header>
<body>
  <br>