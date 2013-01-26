<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<div class="container">
				<article id="post-0" class="post error404 no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'fakedarren' ); ?></h1>
					</header>

					<div class="entry-content">
						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'fakedarren' ); ?></p>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

	<div class="form-wrapper">
		<div class="container">
			<?php get_search_form(); ?>
		</div>
	</div>
<?php get_footer(); ?>