<?php 
/*-----------------------------------------
	ウィジェットの登録
-------------------------------------------*/
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => 'サイドバー', //ウィジェットの名前を入力
        'id' => 'sidebar', //ウィジェットに付けるid名を入力
    ) );
}
add_action( 'widgets_init', 'theme_slug_widgets_init' );
;?>