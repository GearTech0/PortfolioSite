<?php get_header(); ?>
<section id="main">
  <div class="container ptfio-body">
    <div class="row">
      <div class="col-md-8 front-spacer">
      <?php
        if (have_posts()) : while (have_posts()) : the_post(); ?>
          <div class="col-sm-12 ptfio-post">
            <h1>
              <?php
                the_title();
              ?>
            </h1>

            <hr/>

            <h4>Posted on
              <?php
                the_time('F jS, Y');
              ?>
            </h4>

            <p>
              <?php
                the_content(__('(more...)'));
              ?>
            </p>
        </div>

          <hr/>

          <?php
            endwhile;
            else:
          ?>

          <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
      </div>
      <div id="screen-based-feed" class="col-md-4 front-spacer">
        <a class="twitter-timeline" href="https://twitter.com/GearTech0">Tweets by GearTech0</a>
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
    </div>
  </div>
</section> <!-- End of Section #main -->
<div id="delimiter">
</div>
<?php get_footer(); ?>
