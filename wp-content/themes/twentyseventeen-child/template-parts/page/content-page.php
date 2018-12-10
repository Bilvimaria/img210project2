<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php 
		// the_title( '<h1 class="entry-title">', '</h1>' );
		 ?>
		<?php 
		get_sidebar(); 
		// twentyseventeen_edit_link( get_the_ID() );
		 ?>
			<!-- my edits -->
		<?php 
		// get_sidebar(); 
		?>
			<!-- my edits ends -->
	</header><!-- .entry-header -->
	
	<div class="entry-content">
		<?php
			the_content();
		
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'  => '</div>',
			) );
			
		?>

		<?php 
		if ( function_exists( 'rl_gallery' ) ) { rl_gallery( '107' ); }
		// get_sidebar(); 
		?>

		
	</div><!-- .entry-content -->

</article><!-- #post-## -->
