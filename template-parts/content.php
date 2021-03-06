<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package M3
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	
	<?php if (is_singular('post') and get_post_meta(get_the_ID(), "video_post", true) == "true") {
		echo '<div id=videoContainer><iframe width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/' . get_post_meta(get_the_ID(), "video_post_src", true) . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>'."<script>$.getJSON('https://www.youtube.com/oembed?url=https://www.youtube.com/watch?v=". get_post_meta(get_the_ID(), "video_post_src", true) . "&format=json', function(data){ var aspectratio = data.height / data.width; var padding = String(aspectratio * 100) + '%'; document.getElementById('videoContainer').style.paddingBottom = padding;});</script>";
	} else {m3_post_thumbnail();} ?>
	
	<?php if (is_singular('post')) {
		printf('<div class="entry-meta">');
		$categories_list = get_the_category_list( esc_html__( ', ', 'm3' ) );
		if ( $categories_list ) {
			/* translators: 1: list of categories. */
			printf( '<span class="cat-links">' . esc_html__( '%1$s', 'm3' ) . '</span> • ', $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
			}
		m3_posted_on(); printf(' • '); m3_posted_by();
		printf('</div>');
	}
	?>

		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			m3_posted_on(); printf(' • '); m3_posted_by();
		endif; ?>


	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'm3' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'm3' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php m3_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
