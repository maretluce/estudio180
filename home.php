<?php 
/* Template Name: Home */ 
get_header(); 
?>
	
	<section class="container-fluid">
		<div class="c-banner-home">
			<img src="wp-content/themes/estudio180/public/images/home-bgppal.jpg" alt="home" class="w-100">
		</div>
	</section>

	<!--<main role="main">-->
		<!-- section -->
		<section class="container">

		<h1><?php the_title(); ?></h1>



		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	<!--</main>-->

<!--<?php //get_sidebar(); ?>-->

<?php get_footer(); ?>
