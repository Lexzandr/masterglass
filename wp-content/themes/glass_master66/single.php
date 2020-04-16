<?php
  $post = $wp_query->post;
 
  if (in_category('6')) { //ID категории
      include(TEMPLATEPATH.'/single-gallery.php');
  } else if (in_category('4')) {
      include(TEMPLATEPATH.'/single-product.php');
  } else {
      include(TEMPLATEPATH.'/single-default.php');
  }
?>