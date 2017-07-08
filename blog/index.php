<?php 
/* Short and sweet */
define('WP_USE_THEMES', false);
require('./wp-blog-header.php');
?>

<?php
error_reporting(E_ALL & ~E_NOTICE);
require_once dirname(__FILE__) . '/header.php';
require_once dirname(__FILE__) . '/footer.php';
?>

<?php
require('./wp-blog-header.php');
?>



<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage nickagarcia
 * @since nickagarcia 1.0
 */

 ?>

<div class="container" id="blog">
	<div class="row">
		<div class="col-lg-12">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>



			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			/*the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'nickagarcia' ),
				'next_text'          => __( 'Next page', 'nickagarcia' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'nickagarcia' ) . ' </span>',
			) );*/

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

</div>
</div>
</div>
