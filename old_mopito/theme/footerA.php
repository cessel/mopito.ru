<?php
/**
 * Created by Cessel's WEBGate Studio.
 * User: Cessel
 * Date: 29.07.2019
 * Time: 12:21
 */
?>
</div>
<footer class="main sb-static">
	<div class="footer-top-area">
		<div class="container">
			<div class="row row-wrap">
				<div class="col-md-5 col-sm-5 col-mobsm-5">
					<p class="desc"><img src="<? the_theme_url(); ?>/img/logo_mopito_tauk.png"  width="100" alt="Мопито" title="Портал поставщиков МОПИТО.РУ" class="logo">Теперь у Вас есть возможность найти себе Партнеров по бизнесу для кафе-баров и магазинов на одном сайте mopito.ru - производителей, импортеров, поставщиков, сетевые торговые объекты, выездное обслуживание и др.</p>
                    <ul class="nav nav-pills fnav">																
                        <li><a href="<? the_theme_url(); ?>/regpay/reg.php">Подать объявление</a></li>
                        <li><a href="<? the_theme_url(); ?>/regpay/pay.php">Поднять объявление</a></li>
                        <li><a href="/theme/help/rules.php">Пользовательское соглашение</a></li>																
                        <li><a href="/theme/help/agreements.php">Политика обработки персональных данных</a></li>
                    </ul>
				</div>
                <div class="col-md-7 col-sm-7 col-mobsm-7">																
					<div class="partners"><span style="font-size: 12px;">Наши партнеры:</span></div>
                    <ul class="nav nav-pills flexnav" id="partner-list">
						<li><img src="/img/partner_group_sos.png" alt="Партнеры" title="НКО Союз Обогревающих Сил"></li>
                    </ul>																
				</div>
			    <p class="copy">Портал Мопито.ру, 2010 - <script src='/theme/js/data-w3.js'></script> &copy Все права защищены.</p>
			</div>
<!-- Yandex.Metrika informer --> <a href="https://metrika.yandex.ru/stat/?id=55016239&amp;from=informer" target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/55016239/1_0_868686FF_666666FF_1_pageviews" style="width:80px; height:15px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры)" /></a> <!-- /Yandex.Metrika informer --> <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(55016239, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript><div><img src="https://mc.yandex.ru/watch/55016239" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
		</div>
	</div>
</footer>
<!-- Yandex.Metrika counter -->
<!-- /Yandex.Metrika counter -->
</div>
<div id="city" class="city_overflow" data-keyboard="true">
	<div class="container">
		<div class="city_choose_block">
			<div id="city_close" class="city_overflow_close"></div>
			<div class="row">
				<div class="col-xs-12">
					<ul class="main_cities list-inline">
						<li><span class="blue1">Выберите нужный ГОРОД:</span></li><br><br>
<li><a href="/msk/alkogolnie/"><span class="orangtext">Москва</span></a></li>
<li><a href="/spb/alkogolnie/"><span class="orangtext">Санкт-Петербург</span></a></li><br>
					</ul>
					<p><span class="orangtext"> </span></p>
				</div>
			</div>
		</div>
	</div>
</div>
		<div id="category" class="city_overflow">
<?php $request_uri = explode('/',$_SERVER['REQUEST_URI']); ?>
                <div class="container">
                    <div class="city_choose_block">
                        <div id="category_close" class="city_overflow_close"></div>
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="main_cities list-inline">
                                   <li><span class="blue1">Выберите нужного ПОСТАВЩИКА:</span></li><br><br>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/alkogolnie/"><span class="orangtext">Алкоголь</span></a></li>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/alkogolnie/vodka_optom/"><span>Водка</span></a></li>
								   <li><a href="<?='/'.$request_uri[1]."" ?>/alkogolnie/konyak_optom/"><span>Коньяк</span></a></li>
								   <li><a href="<?='/'.$request_uri[1]."" ?>/alkogolnie/vino_optom/"><span>Вино</span></a></li>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/alkogolnie/shampanskoe_optom/"><span>Шампанское</span></a></li>
								   <li><a href="<?='/'.$request_uri[1]."" ?>/alkogolnie/pivo_optom/"><span>Пиво</span></a></li>
								   <li><a href="<?='/'.$request_uri[1]."" ?>/alkogolnie/sidr_medovuha_optom/"><span>Сидр, медовуха</span></a></li><br>
								   <li><a href="<?='/'.$request_uri[1]."" ?>/bezalkogolnie/"><span class="orangtext">Безалкоголь</span></a></li>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/bezalkogolnie/soki_optom/"><span>Соки</span></a></li>
								   <li><a href="<?='/'.$request_uri[1]."" ?>/bezalkogolnie/voda_optom/"><span>Вода</span></a></li>
								   <li><a href="<?='/'.$request_uri[1]."" ?>/bezalkogolnie/limonad_optom/"><span>Лимонад</span></a></li>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/bezalkogolnie/kvas_optom/"><span>Квас</span></a></li><br>
								   <li><a href="<?='/'.$request_uri[1]."" ?>/zakuski_sneki/zakuski_sneki_optom/"><span class="orangtext">Закуски и снеки</span></a></li><br>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/kofe_chaj/"><span class="orangtext">Чай и кофе</span></a></li>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/kofe_chaj/chaj_optom/"><span>Чай оптом</span></a></li>
								   <li><a href="<?='/'.$request_uri[1]."" ?>/kofe_chaj/kofe_optom/"><span>Кофе оптом</span></a></li><br>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/produkty_pitaniya/"><span class="orangtext">Продукты питания</span></a></li>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/produkty_pitaniya/frukty_optom/"><span>Фрукты</span></a></li>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/produkty_pitaniya/ovoshchi_optom/"><span>Овощи</span></a></li>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/produkty_pitaniya/myaso_optom/"><span>Мясо</span></a></li>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/produkty_pitaniya/ryba_optom/"><span>Рыба</span></a></li><br>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/oborudovanie/"><span class="orangtext">Оборудование для торговли</span></a></li>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/oborudovanie/oborudovanie_dlya_piva/"><span>Оборудование для пива</span></a></li>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/oborudovanie/xolodilnoe_oborudovanie/"><span>Холодильное оборудование</span></a></li>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/oborudovanie/torgovoe_oborudovanie/"><span>Торговое оборудование</span></a></li>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/oborudovanie/dlya_fastfudov_i_ulichnoe/"><span>Для фастфудов и уличное</span></a></li>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/oborudovanie/kofemashiny/"><span>Кофемашины</span></a></li><br>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/catering/"><span class="orangtext">Услуги Кейтеринга</span></a></li>
									<li><a href="<?='/'.$request_uri[1]."" ?>/catering/vyezdnoe_obsluzhivanie/"><span>Выездное обслуживание</span></a></li>
									<li><a href="<?='/'.$request_uri[1]."" ?>/catering/bankety/"><span>Банкеты</span></a></li>
									<li><a href="<?='/'.$request_uri[1]."" ?>/catering/organizaciya_prazdnikov/"><span>Организация праздников</span></a></li><br>
                                   <li><a href="<?='/'.$request_uri[1]."" ?>/uslugi/"><span class="orangtext">Услуги, сервис</span></a></li>
									<li><a href="<?='/'.$request_uri[1]."" ?>/uslugi/servis/"><span>Обслуживание оборудования</span></a></li>
									<li><a href="<?='/'.$request_uri[1]."" ?>/uslugi/otdelka_i_montazh/"><span>Монтаж и отделка</span></a></li><br>
                               </ul>
							</div>
                        </div>
                    </div>
                </div>
            </div>

<script src="<? the_theme_url(); ?>/js/modalall.js"></script>
<script src="<? the_theme_url(); ?>/js/front_27.js"></script>
<script src="<? the_theme_url(); ?>/js/ajax.js"></script>
</div>
<noindex>
	<div class='age-modal hidden'>
		<div class='age-modal-inner'>
			<div class='age-modal-inner-line'>
				<div class='eightteen-digits'>
					<p>18+</p>
				</div>
			</div>
			<div class='age-modal-inner-line'>
				<div class='age-modal-confirm-text'>
					<p>Вам исполнилось 18 лет?</p>
				</div>
			</div>
			<div class='age-modal-inner-line'>
				<div class='age-modal-btn-wrapper'>
					<a href='#confirm' class='age-modal-btn age-modalbtn-confirm'>
						Да
					</a>
					<a href='#decline' class='age-modal-btn age-modalbtn-decline' data-decline_show="0">
						Нет
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class='age-modal-overlay hidden'></div>
</noindex>
</body>
</html>
