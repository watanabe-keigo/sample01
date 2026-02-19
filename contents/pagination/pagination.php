<!-- css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/contents/pagination/css/style-pagination.css?<?php echo time(); ?>">

<div class="pagination content_width">
<?php
	// 前へ
	$prev = get_previous_posts_link('前へ', $query->max_num_pages);
	if (!$prev) {
		echo '<span class="prev disabled"></span>';
	}

	// ページ番号
	echo paginate_links([
		'total'   => $query->max_num_pages,
		'current' => $paged,
	]);

	// 次へ
	$next = get_next_posts_link('次へ', $query->max_num_pages);
	if (!$next) {
		echo '<span class="next disabled"></span>';
	}
?>
</div>