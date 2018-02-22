<?php
/**
 * Template Name: About style page
 *
 * @package EduPress
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="page">
			<div class="container">
				<div class="page-body">
					<?php
				// Start the loop.
					while ( have_posts() ) : the_post();

					// Include the page content template.
						get_template_part( 'template-parts/content-wo-title', 'page' );

					// End of the loop.
					endwhile;
					?>
				</div>
			</div>
		</div>
	</main>
</div><!-- .content-area -->

<script src="/wp-content/themes/twentysixteen/js/jquery.min.js"></script>
<script src="/wp-content/themes/twentysixteen/js/interface.min.js"></script>
<script src="/wp-content/themes/twentysixteen/js/forms.js"></script>
<?php wp_footer(); ?>
