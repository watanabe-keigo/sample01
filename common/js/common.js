$(function() {
	// メニューの表示
	$("body").on("click", "#sp_menu_bar", () => {
		$("header").toggleClass("sp_on");
	});

	// ページトップへスクロール
	$("body").on("click", ".page_top_btn", () => {
		$('html, body').animate({scrollTop: 0},　500,　'swing');
		return false;
	});
});