<?php
/**
 * Template Name: Home
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<div class="flex-centre">
		<div class="left">
			<?php if ( has_post_thumbnail() ) { 
				 the_post_thumbnail();
			} ?> 
		</div>

		<div class="right">
			<h1>Hello and welcome.</h1>
			<?php get_template_part('templates/content', 'page'); ?>
		</div>
	</div><!--flex-center-->
<?php endwhile; ?>

