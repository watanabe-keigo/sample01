<?php get_header(); ?>
<!-- css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/top/css/style.css?<?php echo time(); ?>">

	<!-- ファーストビュー -->
	<?php include get_template_directory() . '/contents/firstview/firstview.php'; ?>

	<div class="container">
		<!-- コンセプト -->
		<section class="concept">
			<h2 class="top_heading">CSMについて</h2>
			<div class="concept_content content_width">
				<div class="concept_image">
					<img src="<?php echo get_template_directory_uri(); ?>/common/images/concept.png" alt="コンセプト">
				</div>
				<div class="concept_description">
					<p>当店は世界各国の厳選されたコーヒー豆をご用意しています。あなたの好みに合わせて、深煎りから浅煎りまで、様々な味わいをお楽しみいただけます。</p>
					<p>当店では、コーヒー豆の品質と鮮度にこだわり、自家焙煎し、その場で挽いて淹れます。</p>
					<p>コーヒー豆の香ばしさと甘みを最大限に引き出した、絶品のコーヒーをお届けします。コーヒー豆の専門家があなたにぴったりの一杯をおすすめします。</p>
				</div>
			</div>
		</section>
	
		<!-- お知らせ -->
		<section class="information">
			<h2 class="top_heading">お知らせ</h2>
			<?php include get_template_directory() . '/contents/information-list/information-list.php'; ?>
			<a href="<?php echo esc_url(get_post_type_archive_link('information')); ?>" class="btn">バックナンバー</a>
		</section>
	
		<!-- メニュー -->
		<section class="menu">
			<h2 class="top_heading">メニュー</h2>
			<div class="menu_content content_width">
				<?php
					// メニューカテゴリ
					$menu_categories = get_terms([
						'taxonomy'   => 'menu_category',
						'hide_empty' => true
					]);

					usort($menu_categories, function($a, $b) {
						$a_order = (int) get_field('sort_order', $a);
						$b_order = (int) get_field('sort_order', $b);
						return $a_order <=> $b_order;
					});

					foreach ($menu_categories as $menu_category) :
						$img_id = get_field("image", $menu_category);
						$term_link = get_term_link($menu_category);
				?>
					<div class="item">
						<h3><?php echo $menu_category->name; ?></h3>
						<a href="<?php echo esc_url($term_link); ?>">
							<div class="menu_image">
								<?php echo wp_get_attachment_image($img_id, 'large', false, ['class' => 'category-img']); ?>
							</div>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
			<a href="<?php echo esc_url(get_post_type_archive_link('menu')); ?>" class="btn">メニューの一覧</a>
		</section>
	
		<!-- 店舗案内 -->
		<section class="shop">
			<h2 class="top_heading">店舗案内</h2>
			<div class="content_width">
				<?php include get_template_directory() . '/contents/shop-content/shop-content.php'; ?>
			</div>
		</section>
	</div>

<?php get_footer(); ?>