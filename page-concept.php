<?php get_header(); ?>

<!-- ファーストビュー -->
<?php include get_template_directory() . '/contents/firstview/firstview.php'; ?>

<div class="container">
	<?php include get_template_directory() . '/contents/breadcrumbs/breadcrumbs.php'; ?>
	<?php include get_template_directory() . '/contents/article/article.php'; ?>
</div>

<?php get_footer(); ?>