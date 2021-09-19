<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package M3
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<img id="footer_arrows" src='<?php bloginfo("stylesheet_directory"); ?>/inc/arrows.png'/>
			<p>iosef.org © 2017 — <?php echo(date("Y")); ?> Joseph Mann</p>
			<p><a href="<?php bloginfo('rss2_url')?>">RSS Feed</a></p>
			<p class="footer_fineprint">By using iosef.org, you agree to the use of tracking cookies by third-parties to serve advertisements and to the <a href="https://iosef.org/terms.html">Terms of Use</a>, including the <a href="https://iosef.org/terms.html#privacy">privacy policy</a>. This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
