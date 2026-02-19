<!-- css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/contents/information-list/css/style-information-list.css?<?php echo time(); ?>">

<?php 
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = [
  'post_type'      => 'information',
  'posts_per_page' => 3,
  'paged'          => $paged,
  'post_status'    => 'publish',
  'orderby'        => 'date',
  'order'          => 'DESC',
];

$year     = (int) get_query_var('year');
$month = (int) get_query_var('monthnum');

if ($year && $monthnum) {
	$args['year']     = $year;
	$args['monthnum'] = $monthnum;
}

$query = new WP_Query($args);
?>
<?php if ($query->have_posts()) : ?>
	<ul class="information_list content_width">
		<?php while ($query->have_posts()) : $query->the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>">
					<div class="information_image">
						<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('large'); ?>
						<?php else : ?>
							<img src="<?php echo get_template_directory_uri(); ?>/common/images/no_image.png" alt="お知らせ">
						<?php endif; ?>
					</div>
					<div class="information_item">
						<div class="label">
							<span class="date"><?php echo get_the_date('Y.m.d'); ?></span>
							<?php
								$terms = get_the_terms(get_the_ID(), 'information_category');
								if ($terms && ! is_wp_error($terms)) {
									foreach ( $terms as $term ) {
										echo '<span class="category '. $term->slug .'">' . esc_html($term->name) . '</span>';
									}
								}
							?>
						</div>
						<div class="title"><?php the_title(); ?></div>
						<p><?php the_excerpt(); ?></p>
					</div>
				</a>
			</li>
		<?php endwhile; ?>
	</ul>
<?php else : ?>
	<div class="content_width">お知らせがありません。</div>
<?php endif; ?>