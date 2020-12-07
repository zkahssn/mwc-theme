<?php
get_header();
$args = array('child_of' => get_top_ancestor_id(),
	          'title_li' => "");
wp_list_pages($args);
?>
<div class="jumbotron jumbotron-fluid customjumbo">

  <div class="jumboContainer">
  
	<h1 class="display-4">
  </h1>
  </div>
</div>


<?php
get_footer();
?>
