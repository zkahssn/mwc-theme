<?php
get_header();
?>
<div class= "container-fluid">
<a href = "<?php echo get_the_permalink(get_top_ancestor_id())?>">
</a>
<!-- <span class = "parent-link">
<a href="<?php echo get_the_permalink(get_top_ancestor_id())?>"> 
<?php echo get_the_title(get_top_ancestor_id())?></a>
</span> -->
<!-- <?php
$args = array('child_of' => get_top_ancestor_id(),
	          'title_li' => "");
wp_list_pages($args);
?> -->
<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); ?>
        <div class = 'pageTitle row'>
        <h2 id ='pageHeading'><?php the_title(); ?></h2>
         <div id = 'pageContent' class = 'pageContent row'> 
			<?php the_post_thumbnail( 'thumbnail' );  ?>
           <p class = "text-justify">  <?php the_content(); ?> </p>
            </div>
			</div> 
</div>
        <?php }
        }?>
</div>
<?php

get_footer();
?>
