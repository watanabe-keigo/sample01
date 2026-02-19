$(function() {
	/**
	 * スマホ：メニューの開閉
	 */
	$("body").on("click", "#sp_menu_bar", () => {
		$("header").toggleClass("sp_on");
	});

	/**
	 * トップへスクロール
	 */
	$("body").on("click", ".page_top_btn", () => {
		$('html, body').animate({scrollTop: 0}, 500, 'swing');
		return false;
	});

	/**
	 * 閲覧制限
	 */
	if (sessionStorage.getItem("auth") === "ok") {
		$("body").removeClass("locked");
		return;
	} else {
		const correctId = "demo";
		const correctPass = "demo";

		// ID入力
		const inputId = prompt("IDを入力してください");

		if (inputId === null) {
			// キャンセル
			location.href = "about:blank";
			return;
		}

		// パスワード入力
		const inputPass = prompt("パスワードを入力してください");

		if (inputPass === null) {
			location.href = "about:blank";
			return;
		}

		// 判定
		if (inputId === correctId && inputPass === correctPass) {
			// 認証成功 → 表示
			sessionStorage.setItem("auth", "ok");
			$("body").removeClass("locked");
		} else {
			alert("認証に失敗しました");
			location.href = "about:blank";
		}
	}
});