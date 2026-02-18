<?php get_header(); ?>
<!-- css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/shop/css/style.css?<?php echo time(); ?>">

<!-- ファーストビュー -->
<?php include get_template_directory() . '/contents/firstview/firstview.php'; ?>

<div class="container">
	<?php include get_template_directory() . '/contents/breadcrumbs/breadcrumbs.php'; ?>
	<div class="shop content_width">
		<h2>店舗案内</h2>
		<p>店舗案内の概要が入ります。店舗案内の概要が入ります。店舗案内の概要が入ります。店舗案内の概要が入ります。店舗案内の概要が入ります。</p>
		<?php include get_template_directory() . '/contents/shop-content/shop-content.php'; ?>
		<h2>アクセスマップ</h2>
		<div class="access_map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d104994.83738862765!2d135.4036367269175!3d34.677711549912395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e6553406e2e1%3A0xc55bc16ee46a2fe7!2z5aSn6Ziq5bqc5aSn6Ziq5biC!5e0!3m2!1sja!2sjp!4v1771375075278!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>
</div>

<?php get_footer(); ?>