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
	<button class="page_top_btn"></button>
</footer>

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-4.0.0.js" integrity="sha256-9fsHeVnKBvqh3FB2HYu7g2xseAZ5MlN6Kz/qnkASV8U=" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/common/js/common.js?<?php echo time(); ?>"></script>
</body>
</html>