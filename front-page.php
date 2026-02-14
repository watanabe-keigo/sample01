<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex, nofollow">
	<title>サンプル01</title>
	<?php wp_head(); ?>
</head>
<body>
	<!-- ヘッダー -->
	<header>
		<div class="header_container">
			<h1 class="header_logo">
				<img src="<?php echo get_template_directory_uri(); ?>/common/images/logo.png" alt="Cafe CSM">
			</h1>
			<div class="header_information">
				<div class="information_content phone_number_content">
					<div class="icon">
						<img src="<?php echo get_template_directory_uri(); ?>/common/images/phone.svg" alt="電話番号">
					</div>
					<p>000-0000-0000</p>
				</div>
				<div class="information_content business_hours_content">
					<div class="icon">
						<img src="<?php echo get_template_directory_uri(); ?>/common/images/clock.svg" alt="営業時間">
					</div>
					<div class="business_hours">
						<p>土日祝 7:00～20:00(ラストオーダー19:30)</p>
						<p>平 日 8:00～20:00(ラストオーダー19:30)</p>
					</div>
				</div>
			</div>
		</div>
		<div class="header_menu">
			<ul class="menu_list">
				<li>
					<a href="#">トップ</a>
				</li>
				<li>
					<a href="#">お知らせ</a>
				</li>
				<li>
					<a href="#">コンセプト</a>
				</li>
				<li>
					<a href="#">メニュー</a>
				</li>
				<li>
					<a href="#">店舗案内</a>
				</li>
			</ul>
		</div>
	</header>

	<!-- ファーストビュー -->
	<section class="firstview">
		<img src="<?php echo get_template_directory_uri(); ?>/common/images/firstview.png" alt="ファーストビュー">
		<div class="catch_copy">一杯のコーヒーで世界を旅しよう。</div>
	</section>

	<div class="container">
		<!-- コンセプト -->
		<section class="concept">
			<h2 class="top_heading">CSMについて</h2>
			<div class="concept_content">
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
			<ul class="information_list">
				<li>
					<a href="#">
						<div class="information_image">
							<img src="<?php echo get_template_directory_uri(); ?>/common/images/information_01.png" alt="お知らせ">
						</div>
						<div class="information_item">
							<div class="label">
								<span class="date">2022.12.12</span>
								<span class="category">お知らせ</span>
							</div>
							<div class="title">タイトル</div>
							<p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="information_image">
							<img src="<?php echo get_template_directory_uri(); ?>/common/images/no_images.png" alt="お知らせ">
						</div>
						<div class="information_item">
							<div class="label">
								<span class="date">2022.12.12</span>
								<span class="category">お知らせ</span>
							</div>
							<div class="title">タイトル</div>
							<p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
					</a>
				</li>
				<li>
					<a href="#">
						<div class="information_image">
							<img src="<?php echo get_template_directory_uri(); ?>/common/images/information_02.png" alt="お知らせ">
						</div>
						<div class="information_item">
							<div class="label">
								<span class="date">2022.12.12</span>
								<span class="category">お知らせ</span>
							</div>
							<div class="title">タイトル</div>
							<p>テキストテキストテキストテキストテキストテキストテキストテキスト</p>
						</div>
					</a>
				</li>
			</ul>
			<a href="#" class="btn">バックナンバー</a>
		</section>
	
		<!-- メニュー -->
		<section class="menu">
			<h2 class="top_heading">メニュー</h2>
			<div class="menu_content">
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
			<div class="shop_content">
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

	<!-- フッター -->
	<footer>
		<div class="footer_container">
			<div class="footer_image">
				<img src="<?php echo get_template_directory_uri(); ?>/common/images/logo.png" alt="Cafe CSM">
			</div>
			<div class="address">
				<p>住所</p>
				<p>〒000-0000 ~~市~区~~1丁目1-12</p>
				<p>TEL：000-000-0000</p>
			</div>
			<div class="business_hours">
				<p>営業時間</p>
				<p>土日祝 7:00～20:00（ラストオーダー19:30）</p>
				<p>平日 8:00～20:00（ラストオーダー19:30）</p>
			</div>
			<p class="copyright">©︎2022 Cafe CSM</p>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>