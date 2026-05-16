<?php

get_header();
?>

<main id="main-content" class="container mx-auto px-4 py-8">

	<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="mb-8">
				<h1 class="text-4xl font-bold mb-4"><?php the_title(); ?></h1>
				<p class="text-sm text-gray-500">
					<?php
					printf(
						/* translators: 1: date, 2: author */
						esc_html__( 'Published %1$s by %2$s', 'wp-theme-base' ),
						get_the_date(),
						get_the_author()
					);
					?>
				</p>
			</header>

			<div class="prose max-w-none">
				<?php the_content(); ?>
			</div>

		</article>

	<?php endwhile; ?>

</main>

<?php
get_footer();
