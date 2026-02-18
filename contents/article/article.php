<!-- css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/contents/article/css/style-article.css?<?php echo time(); ?>">

<div class="article content_width">
	<div class="article_element">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<div class="label">
				<span class="date"><?php echo get_the_date('Y.m.d'); ?></span>
				<?php
					$post_type = get_post_type();
					if ($post_type === "information") {
						$post_type = "information_category";
					} else if ($post_type === "menu") {
						$post_type = "menu_category";
					}
					
					$terms = get_the_terms(get_the_ID(), $post_type);
					if ($terms && ! is_wp_error($terms)) {
						foreach ( $terms as $term ) {
							echo '<span class="category '. $term->slug .'">' . esc_html($term->name) . '</span>';
						}
					}
				?>
			</div>
			<?php if (has_post_thumbnail()) : ?>
				<div class="article_thumbnail">
					<?php the_post_thumbnail('large'); ?>
				</div>
			<?php endif; ?>
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