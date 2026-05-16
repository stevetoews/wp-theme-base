<?php

get_header();
?>

<main id="main-content" class="container mx-auto px-4 py-8">

	<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="mb-8">
				<h1 class="text-4xl font-bold"><?php the_title(); ?></h1>
			</header>

			<div class="prose max-w-none">
				<?php the_content(); ?>
			</div>

		</article>

	<?php endwhile; ?>

</main>

<?php
get_footer();
