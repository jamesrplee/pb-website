<?php
/**
 * Template Name: Workshops
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>


  <div class="row">
  	<div class="col-md-9 col-sm-8">
  		<?php get_template_part('templates/content', 'page'); ?>
			<h2>Workshop & Course Brochures</h2>
			<br>
			<?php if( have_rows('workshops') ): ?>
				<div class="workshop-cards">
					<?php while( have_rows('workshops') ): the_row(); 
						// vars
						$title = get_sub_field('title');
						$description = get_sub_field('description');
						$link = get_sub_field('brochure_pdf'); ?>

						<div class="brochure-download">
							<h3><?php echo $title ?></h3>
							<p><?php echo $description ?></p>

							<a href="<?php echo $link ?>"><i class="glyphicon glyphicon-download-alt"></i>Download</a>
						</div>

					<?php endwhile; ?>	
				</div><!--workshop-cards-->
			<?php endif; ?>

  	</div><!--col-md-8-->

  	<div class="col-md-3 col-sm-4"></div><!--col-md-4-->
  </div><!--row-->
<?php endwhile; ?>

