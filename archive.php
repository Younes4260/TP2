<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */

get_header();
?>
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<section class="galerie">
			<?php
			/* Start the Loop */
			$nombre = 0;
			while ( have_posts() ) :
				$nombre = $nombre + 1;
				the_post();?>
				<div class="flip-card">
				<div class="flip-card-inner">
				<div class="flip-card-front">
				<?php the_post_thumbnail( 'thumbnail' ); ?>
			</div>
			<div class="flip-card-back">
				<a id="aprojet" href="<?php echo get_permalink(); ?>">Projet #<?php echo($nombre)?></a>
			</div>
			</div>
			</div>

			<?php endwhile; ?>
			</section>

		<?php endif; ?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();


