<?php
/*
Template Name: gmat
*/
get_header('custom');?>
<?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('header_sidebar') ) : 

//endif; ?>

<?php
   // $category=get_category_by_slug('gmat');
    //$id = $category->term_id;
    
   
?>


  

<div class="container content-sm">
        <div class="row">
  
  <?php
    include('qs/resourcesdetails.php');
  ?>


  <div class="col-md-3">
    <?php include('qs/resourceads.php'); ?>
  </div>


  </div>

  </div>

<?php get_footer();?>
