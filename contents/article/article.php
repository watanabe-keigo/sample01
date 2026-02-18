<!-- css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/contents/article/css/style-article.css?<?php echo time(); ?>">

<div class="article content_width">
	<div class="article_element">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
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
			<div class="article_thumbnail">
				<?php if (has_post_thumbnail()) : ?>
					<?php the_post_thumbnail('large'); ?>
				<?php else : ?>
					<img src="<?php echo get_template_directory_uri(); ?>/common/images/no_image.png" alt="お知らせ">
				<?php endif; ?>
			</div>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>
	</div>
	<div class="sidebar">
		<div class="archives">
			<div class="title">過去のお知らせ</div>
			<ul class="archive_list">
				<li>
					<a href="#">2021年10月</a>
				</li>
				<li>
					<a href="#">2021年9月</a>
				</li>
			</ul>
		</div>
		<div class="categories">
			<div class="title">メニュー一覧</div>
			<ul class="category_list">
				<li>
					<a href="#">お食事</a>
				</li>
				<li>
					<a href="#">コーヒー</a>
				</li>
				<li>
					<a href="#">ドリンク</a>
				</li>
				<li>
					<a href="#">スイーツ</a>
				</li>
			</ul>
		</div>
	</div>
</div>