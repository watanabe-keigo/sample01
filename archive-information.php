<?php get_header(); ?>
<!-- css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/information/css/style.css?<?php echo time(); ?>">

<!-- ファーストビュー -->
<?php include get_template_directory() . '/contents/firstview/firstview.php'; ?>

<div class="container">
	<?php include get_template_directory() . '/contents/breadcrumbs/breadcrumbs.php'; ?>
	<?php include get_template_directory() . '/contents/information-list/information-list.php'; ?>
</div>

<?php get_footer(); ?>