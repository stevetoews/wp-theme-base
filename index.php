<?php

get_header();
?>

<main id="main-content" class="container mx-auto px-4 py-8">

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-8' ); ?>>
				<h2 class="text-2xl font-bold mb-2">
					<a href="<?php the_permalink(); ?>" class="hover:underline">
						<?php the_title(); ?>
					</a>
				</h2>
				<div class="prose max-w-none">
					<?php the_excerpt(); ?>
				</div>
			</article>
		<?php endwhile; ?>

		<?php the_posts_pagination(); ?>

	<?php else : ?>

		<p class="text-gray-500"><?php esc_html_e( 'No content found.', 'wp-theme-base' ); ?></p>

	<?php endif; ?>

</main>

<?php
get_footer();
