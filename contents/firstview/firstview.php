<!-- css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/contents/firstview/css/style-firstview.css?<?php echo time(); ?>">

<section class="firstview<?php echo is_front_page() ? ' top' : ''; ?>">
	<img src="<?php echo get_template_directory_uri(); ?>/common/images/firstview.png" alt="ファーストビュー">
	<div class="catch_copy">
		<?php
			if (is_front_page()) {
				echo '一杯のコーヒーで世界を旅しよう。';
			} else if (is_archive()) {
				$title = get_the_archive_title();
				$title = wp_strip_all_tags($title);
				$title = preg_replace('/^[^:]+: /', '', $title);
				echo $title;
			} else if (is_page()) {
				echo get_the_title();
			}
		?>
	</div>
</section>