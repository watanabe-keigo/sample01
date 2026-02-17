<?php get_header(); ?>
<!-- css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/information/css/style.css?<?php echo time(); ?>">

<div class="container">
	<?php include get_template_directory() . '/contents/breadcrumbs/breadcrumbs.php'; ?>

	<div class="information_article content_width">
		<div class="article_element">
			<h1>マラゴッジ豆を入荷しました</h1>
			<div class="label">
				<span class="date">2021.10.21</span>
				<span class="category">お知らせ</span>
			</div>
			<div class="article_thumbnail">
				<img src="<?php echo get_template_directory_uri(); ?>/common/images/information_01.png" alt="">
			</div>
			<p>記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。</p>
			<h2>記事の見出しが入ります</h2>
			<p>記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。</p>
			<h3>記事の見出しが入ります</h3>
			<p>記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。記事の本文が入ります。</p>
		</div>
		<div class="sidebar">
			<div class="archives">
				<div class="title">過去のお知らせ</div>
				<ul class="archive_list">
					<li>
						<a href="#">2021年10月</a>
					</li>
					<li>
						<a href="#">2021年9月</a>
					</li>
				</ul>
			</div>
			<div class="categories">
				<div class="title">メニュー一覧</div>
				<ul class="category_list">
					<li>
						<a href="#">お食事</a>
					</li>
					<li>
						<a href="#">コーヒー</a>
					</li>
					<li>
						<a href="#">ドリンク</a>
					</li>
					<li>
						<a href="#">スイーツ</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>