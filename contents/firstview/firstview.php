<!-- css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/contents/firstview/css/style-firstview.css?<?php echo time(); ?>">

<section class="firstview<?php echo is_front_page() ? ' top' : ''; ?>">
	<img src="<?php echo get_template_directory_uri(); ?>/common/images/firstview.png" alt="ファーストビュー">
	<div class="catch_copy">
		<?php
			if (is_front_page()) {
				echo '一杯のコーヒーで世界を旅しよう。';
			} else if (is_archive()) {
				$path = parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH);
				$title = get_the_archive_title();
				$title = wp_strip_all_tags($title);
				$title = preg_replace('/^[^:]+: /', '', $title);

				if (preg_match('#/information/(\d{4})/(\d{2})/?$#', $path, $m)) {
					$year  = (int) $m[1];
					$month = (int) $m[2];
					$title = "お知らせ：" . $year . '年' . $month . '月';
				}
				echo $title;
			} else if (is_page()) {
				echo get_the_title();
			}
		?>
	</div>
</section>