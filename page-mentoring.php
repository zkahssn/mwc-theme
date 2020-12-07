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
MENTORING
</div>
<?php

get_footer();
?>
