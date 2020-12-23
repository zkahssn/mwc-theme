<?php
get_header();
?>
<div class= "container-fluid"> 
<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); ?>
        <div class = 'pageTitle row'>
        <h2 id ='pageHeading'><?php the_title(); ?></h2>
        </div>
         <div id = 'pageContent' class = 'pageContent row'> 
           <p class = "text-justify">  <?php the_content(); ?> </p>
            </div>
            </div> 
        <?php }
        }?>
</div>
<?php
get_footer();
?>

