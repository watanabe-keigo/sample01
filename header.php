<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex, nofollow">
	<title>サンプル01</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/reset.css?<?php echo time(); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/common.css?<?php echo time(); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/header.css?<?php echo time(); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/common/css/footer.css?<?php echo time(); ?>">
	<?php wp_head(); ?>
</head>
<body>
	<!-- ヘッダー -->
	<header>
		<div class="header_container">
			<div class="header_inner content_width">
				<h1 class="header_logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/common/images/logo.png" alt="Cafe CSM">
					</a>
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
							<p>平日 8:00～20:00(ラストオーダー19:30)</p>
						</div>
					</div>
				</div>
				<button id="sp_menu_bar" class="sp_menu_bar"></button>
			</div>
		</div>
		<div class="header_menu">
			<ul class="menu_list content_width">
				<li>
					<a href="<?php echo home_url(); ?>">トップ</a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/information">お知らせ</a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/concept">コンセプト</a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/menu">メニュー</a>
				</li>
				<li>
					<a href="<?php echo home_url(); ?>/shop">店舗案内</a>
				</li>
			</ul>
		</div>
	</header>