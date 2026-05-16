<?php

/**
 * Template part for displaying post content in archive/loop views.
 *
 * @package WP_Theme_Base
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'mb-8' ); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="mb-4">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'medium_large', [ 'class' => 'w-full h-48 object-cover rounded' ] ); ?>
			</a>
		</div>
	<?php endif; ?>

	<header class="mb-3">
		<h2 class="text-xl font-bold">
			<a href="<?php the_permalink(); ?>" class="hover:underline">
				<?php the_title(); ?>
			</a>
		</h2>
		<p class="text-sm text-gray-500 mt-1">
			<?php echo esc_html( get_the_date() ); ?>
		</p>
	</header>

	<div class="prose max-w-none text-gray-700">
		<?php the_excerpt(); ?>
	</div>

</article>
