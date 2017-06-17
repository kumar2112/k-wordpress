<!-- Blog All Posts -->
<div class="col-md-9">
   <!-- News v3 -->
   
   <?php
      get_template_part('intro');
   ?>

   <div class="row">
      <div class="col-md-6 col-sm-6 detail-info-tabs active">
         <div class="click-for-more" data-src="overview">
            Overview
         </div>
      </div>
      <div class="col-md-6 col-sm-6 detail-info-tabs">
         <div class="click-for-more" data-src="activity">
            Activity Feed
         </div>
      </div>
   </div>
   
   <?php
   	get_template_part('overview');
   ?>

    <?php
      get_template_part('activity');
   ?>


   <div class="row margin-top-bottom-40">
      <div class="col-md-12">
         <div class="heading heading-v4 text-center">
            <h3><span>Related News</span></h3>
         </div>
      </div>
   </div>
   <div class="row news-v2 margin-bottom-50">
      <div class="col-sm-6 news-v2-hover sm-margin-bottom-30">
         <div class="news-v2-badge" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/article1.jpg');">
         </div>
         <p>
            <span>15 May 2017</span>
         </p>
         <div class="news-v2-desc">
            <h3><a href="#">Reading Some Books</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. <a href=#>Read More</a></p>
         </div>
      </div>
      <div class="col-sm-6 news-v2-hover sm-margin-bottom-30">
         <div class="news-v2-badge" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/article-1.jpg');">
         </div>
         <p>
            <span>15 May 2017</span>
         </p>
         <div class="news-v2-desc">
            <h3><a href="#">Interior Design</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. <a href=#>Read More</a></p>
         </div>
      </div>
      <div class="col-sm-6 news-v2-hover sm-margin-bottom-30">
         <div class="news-v2-badge" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/article-1.jpg');">
         </div>
         <p>
            <span>15 May 2017</span>
         </p>
         <div class="news-v2-desc">
            <h3><a href="#">Interior Design</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. <a href=#>Read More</a></p>
         </div>
      </div>
      <div class="col-sm-6 news-v2-hover sm-margin-bottom-30">
         <div class="news-v2-badge" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/images/article1.jpg');">
         </div>
         <p>
            <span>15 May 2017</span>
         </p>
         <div class="news-v2-desc">
            <h3><a href="#">Reading Some Books</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. <a href=#>Read More</a></p>
         </div>
      </div>
   </div>
   <div class="row margin-top-bottom-40">
      <div class="col-md-12 text-center">
         <a href="#" class="btn btn-brand-cta">VIEW MORE</a>
      </div>
   </div>
</div>
<!-- End Blog All Posts -->