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
			<a href="#" class="btn">バックナンバー</a>
		</section>
	
		<!-- メニュー -->
		<section class="menu">
			<h2 class="top_heading">メニュー</h2>
			<div class="menu_content content_width">
				<div class="item">
					<h3>コーヒー</h3>
					<a href="#">
						<div class="menu_image">
							<img src="<?php echo get_template_directory_uri(); ?>/common/images/menu_coffee.png" alt="コーヒー">
						</div>
					</a>
				</div>
				<div class="item">
					<h3>お食事</h3>
					<a href="#">
						<div class="menu_image">
							<img src="<?php echo get_template_directory_uri(); ?>/common/images/menu_meal.png" alt="お食事">
						</div>
					</a>
				</div>
				<div class="item">
					<h3>ドリンク</h3>
					<a href="#">
						<div class="menu_image">
							<img src="<?php echo get_template_directory_uri(); ?>/common/images/menu_drink.png" alt="ドリンク">
						</div>
					</a>
				</div>
				<div class="item">
					<h3>スイーツ</h3>
					<a href="#">
						<div class="menu_image">
							<img src="<?php echo get_template_directory_uri(); ?>/common/images/menu_sweet.png" alt="スイーツ">
						</div>
					</a>
				</div>
			</div>
			<a href="#" class="btn">メニューの一覧</a>
		</section>
	
		<!-- 店舗案内 -->
		<section class="shop">
			<h2 class="top_heading">店舗案内</h2>
			<div class="shop_content content_width">
				<div class="shop_image">
					<img src="<?php echo get_template_directory_uri(); ?>/common/images/shop.png" alt="店舗案内">
				</div>
				<div class="shop_inner">
					<div class="item">
						<div class="label">住所</div>
						<p>〒000-0000 ~~市~区~~1丁目1-12</p>
						<p>TEL：000-000-0000</p>
					</div>
					<div class="item">
						<div class="label">営業時間</div>
						<p>土日祝 7:00～20:00（ラストオーダー19:30）</p>
						<p>平日 8:00～20:00（ラストオーダー19:30）</p>
					</div>
					<div class="item">
						<div class="label">店舗設備</div>
						<p>コンセント（一部席）、Free Wi-fi、全席完全禁煙、駐車場(10台)</p>
					</div>
				</div>
			</div>
		</section>
	</div>

<?php get_footer(); ?>