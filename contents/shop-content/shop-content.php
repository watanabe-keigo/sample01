<!-- css -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/contents/shop-content/css/style-shop-content.css?<?php echo time(); ?>">

<div class="shop_content<?php echo is_front_page() ? ' top' : '' ?>">
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
		<?php if (is_page('shop')) : ?>
			<div class="item">
				<div class="label">席数</div>
				<p>個室（6名様向け）2室、テーブル4人掛け、6人掛け、1人カウンター5席　合計96席</p>
			</div>
			<div class="item">
				<div class="label">最寄駅</div>
				<p>JR〜〜線　XX駅（徒歩O分）</p>
			</div>
		<?php endif; ?>
	</div>
</div>