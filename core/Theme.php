<?php
/**
 * Created by Cessel's WEBGate Studio.
 * User: Cessel
 * Date: 09.07.2020
 * Time: 0:54
 */

class Theme extends Core {
	public $theme_dir;
	public $theme_uri;

	public function __construct() {
		$this->set_theme_uri();
		$this->set_theme_dir();
	}

	public function get_header() {
		include_once $_SERVER["DOCUMENT_ROOT"] . '/' . $this->get_theme_dir_name() . '/header.php';
	}

	public function get_footer() {
		include_once $_SERVER["DOCUMENT_ROOT"] . '/' . $this->get_theme_dir_name() . '/footer.php';

	}
	public function set_theme_dir() {
		$this->theme_dir = ACTIVE_THEME;
	}
	public function get_theme_dir_name() {
		return $this->theme_dir;
	}
	public function set_theme_uri() {
		$this->theme_uri = $_SERVER["DOCUMENT_ROOT"] . '/' . $this->get_theme_dir_name() . '';
	}
	public function get_theme_uri() {
		return $this->theme_uri;
	}
	public function theme_url( $echo = true ) {
		if ( $echo ) {
			echo '/' . $this->get_theme_dir_name() . '';
		} else {
			return '/' . $this->get_theme_dir_name() . '';
		}
	}

	public function mopito_head() {
		$styles[] = '<link rel="stylesheet" href="' . $this->theme_url( false ) . '/css/libs/libs.min.css">';
		$styles[] = '<link rel="stylesheet" href="' . $this->theme_url( false ) . '/css/styles.css">';
		$styles[] = '<style>header.main .navbar-brand, header.main .login-register {margin-top: 0px!important;}</style>';

		foreach ( $styles as $style ) {
			echo $style;
		}

		$scripts[] = '';

		foreach ( $scripts as $script ) {
			echo $script;
		}

		$functions[] = '';
		foreach ( $functions as $function ) {
			call_user_func( $function );
		}

	}

	public function mopito_footer() {
		$styles[] = '';

		foreach ( $styles as $style ) {
			echo $style;
		}

		//$scripts[] = '<!-- Yandex.Metrika informer --> <a href="https://metrika.yandex.ru/stat/?id=55016239&amp;from=informer" target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/55016239/1_0_868686FF_666666FF_1_pageviews" style="width:80px; height:15px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры)" /></a> <!-- /Yandex.Metrika informer --> <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(55016239, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/55016239" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->';
		$scripts[] = '<script src="' . $this->theme_url( false ) . '/js/libs/libs.min.js"></script>';
		$scripts[] = '<script src="' . $this->theme_url( false ) . '/js/modalall.js"></script>';
		$scripts[] = '<script src="' . $this->theme_url( false ) . '/js/ajax.js"></script>';
		$scripts[] = '<script src="' . $this->theme_url( false ) . '/js/misc.js"></script>';


		foreach ( $scripts as $script ) {
			echo $script;
		}

		$functions[] = '';
		foreach ( $functions as $function ) {
			call_user_func( $function );
		}

	}
}