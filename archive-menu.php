<?php get_header(); ?>
<!-- css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/menu/css/style.css?<?php echo time(); ?>">

<!-- ファーストビュー -->
<?php include get_template_directory() . '/contents/firstview/firstview.php'; ?>

<div class="container">
	<?php include get_template_directory() . '/contents/breadcrumbs/breadcrumbs.php'; ?>

	<?php 
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = [
			'post_type'      => 'menu',
			'posts_per_page' => 12,
			'paged'          => $paged,
			'post_status'    => 'publish',
			'orderby'        => 'date',
			'order'          => 'DESC',
		];

		$query = new WP_Query($args);
	?>
	
	<div class="menu content_width">
		<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
			<div class="menu_item">
				<a href="<?php the_permalink(); ?>">
					<?php if (has_post_thumbnail()) : ?>
						<?php the_post_thumbnail('medium'); ?>
					<?php else : ?>
						<img src="<?php echo get_template_directory_uri(); ?>/common/images/no_image.png" alt="メニュー">
					<?php endif; ?>
				</a>
			</div>
		<?php endwhile; else : ?>
			メニューがありません。
		<?php endif; ?>
	</div>
	<?php include get_template_directory() . '/contents/pagination/pagination.php'; ?>
	<?php wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>