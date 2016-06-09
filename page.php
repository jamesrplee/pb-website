

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>


  <div class="row">
  	<div class="col-md-9 col-sm-8">
  	<?php get_template_part('templates/content', 'page'); ?>
  	</div><!--col-md-8-->

  	<div class="col-md-3 col-sm-4">
    <?php if( get_field('brochure_pdf') ): ?>
  		<div class="brochure-download">
  			<h3><?php the_field('title'); ?></h3>
  			<p><?php the_field('description'); ?></p>
  			<a href="<?php the_field('brochure_pdf'); ?>"><i class="glyphicon glyphicon-download-alt"></i>Download the brochure</a>
  		</div>
    <?php endif; ?>
  	</div><!--col-md-4-->
  </div><!--row-->
<?php endwhile; ?>

