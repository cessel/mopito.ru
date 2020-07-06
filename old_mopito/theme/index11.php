	<?php
 get_header();
global $page;
$filters_data = fields_counter('alco_15',false,$identifikator);

?>
<? $request_uri = explode('/',$_SERVER['REQUEST_URI']); ?>

<div class="container">
</div>

<div class="gap"></div>
<div class="container">
    <div class="cont-box">


	<div class="new-index-content">
		<div class="new-index-head">

			<div class="new-index-head-image" style="background-image: url(&quot;img/spb.jpg&quot;); z-index:2;"></div>

			<div class="new-index-head-glow">

				<h1 class="new-index-head-text">Нужен надежный поставщик в кафе-бары и магазины в Москве?</h1>

			</div>

		</div>
		<script>
		require(['jquery'], function($){
			var $image = $('.new-index-head-image');
			var headerHeight = 45;
			var offset = $image.height() + headerHeight;
			$(window).on('scroll.head', function(e){
				var scrollTop = $(window).scrollTop();
				if(scrollTop > offset) {
					$image.addClass('hide');
					return;
				}
				$image.css({ 'position': 'fixed', 'top': scrollTop/-2 + headerHeight }).removeClass('hide');
			});
		});
		</script>
		<div class="service-box-white clearfix">
			<div class="new-index-padd">
				<div class="new-index-title">Выберите нужного поставщика для бизнеса: </div>
			</div>
<div class="new-index-categories pull-left new-index-padd pt0">
   <div class="">
      <div class="categories-sort-top category-sort-toggle clearfix">
        <div class="pull-left category-places category-two-columns">
		  <div class="category-groups invisible-links">
		     <div class="category-group">
                <div class="title H3"><a href="/msk/alkogolnie/">Алкогольная продукция</a></div>
				<div class="category-group-list mt10">
                   <a class="link" href="/alkogolnie/krepkij_alkogol">Крепкий алкоголь</a>
                   <a class="link" href="/alkogolnie/vina_i_shampanskoe">Вина и шампанское</a>
                   <a class="link" href="/alkogolnie/pivo_i_pivnye_napitki">Пиво и пивные напитки</a>
                   <a class="link" href="/alkogolnie/razlivnoe_pivo">Разливное пиво</a>
                   <a class="link" href="/alkogolnie/butylochnoe_pivo">Бутылочное пиво</a>
                   <a class="link" href="/alkogolnie/pivo_optom">Пиво оптом</a>
                   <a class="link" href="/alkogolnie/oborudovanie">Оборудование</a>
                   <a class="link" href="/alkogolnie/pivnoj_katalog">Пивной каталог</a>
                   <a class="link" href="/alkogolnie/magaziny_piva">Магазины пива</a>
                   <a class="link" href="/alkogolnie/kupit_-_prodat_biznes">Купить - продать бизнес</a>
				</div>
		     </div>
		     <div class="category-group">
                <div class="title H3"><a href="/msk/bezalkogolnie/">Безалкогольные напитки</a></div>
				<div class="category-group-list mt10">
                   <a class="link" href="/bezalkogolnie/sok_i_voda">Сок и вода</a>
                   <a class="link" href="/bezalkogolnie/kvas_i_limonad">Квас и лимонад</a>
				</div>
			 </div>
		     <div class="category-group">
                <div class="title H3"><a href="/msk/zakuski_sneki/">Закуски и снеки</a></div>
				<div class="category-group-list mt10">
                   <a class="link" href="/zakuski_sneki/snekovaya_produkciya">Снековая продукция</a>
                   <a class="link" href="/zakuski_sneki/katalog_zakusok">Каталог закусок</a>
				</div>
			 </div>
			 <div class="category-group">
                <div class="title H3"><a href="/msk/chaj_i_kofe/">Чай и кофе</a></div>
				<div class="category-group-list mt10">
                   <a class="link" href="/chaj_i_kofe/chay_optom">Чай оптом</a>
                   <a class="link" href="/chaj_i_kofe/katalog_chaya">Каталог чая</a>
                   <a class="link" href="/chaj_i_kofe/chay_optom">Кофе оптом</a>
                   <a class="link" href="/chaj_i_kofe/katalog_kofe">Каталог кофе</a>
				</div>
			</div>
			<div class="category-group">
                <div class="title H3"><a href="/msk/produkty_pitaniya/">Продукты питания</a></div>
				<div class="category-group-list mt10">
                   <a class="link" href="/produkty_pitaniya/molochnye_produkty">Молочные продукты</a>
                   <a class="link" href="/produkty_pitaniya/frukty_i_ovoshchi">Фрукты и овощи</a>
                   <a class="link" href="/produkty_pitaniya/myaso_i_myasnaya_produkciya">Мясо и мясная продукция</a>
                   <a class="link" href="/produkty_pitaniya/ryba_i_moreprodukty">Рыба и морепродукты</a>
				 </div>
			 </div>
			 <div class="category-group">
                <div class="title H3"><a href="/msk/oborudovanie/">Оборудование</a></div>
				<div class="category-group-list mt10">
                   <a class="link" href="/oborudovanie/dlya_razlivnogo_piva">Для разливного пива</a>
                   <a class="link" href="/oborudovanie/xolodilnye_vitriny">Холодильные витрины</a>
                   <a class="link" href="/oborudovanie/vyezdnoe_i_ulichnoe">Выездное и уличное</a>
                   <a class="link" href="/oborudovanie/dlya_proizvodstva_napitkov">Для производства напитков</a>
                   <a class="link" href="/oborudovanie/komplektuyushchie_i_zapchasti">Комплектующие и запчасти</a>
				 </div>
			 </div>
			 <div class="category-group">
                <div class="title H3"><a href="/msk/dostavka/">Доставка</a></div>
				<div class="category-group-list mt10">
                   <a class="link" href="/dostavka/chaya_i_kofe">Чая и кофе</a>
                   <a class="link" href="/dostavka/vody,_sokov,_koncentratov">Воды, соков, концентратов</a>
                   <a class="link" href="/dostavka/dostavka">Доставка</a>
                   <a class="link" href="/dostavka/krepkij_alkogol_i_vino">Крепкий алкоголь и вино</a>
                   <a class="link" href="/dostavka/pivo_i_pivnye_napitki">Пиво и пивные напитки</a>
                   <a class="link" href="/dostavka/zakuski">Закуски</a>
                   <a class="link" href="/dostavka/produkty_pitaniya">Продукты питания</a>
				 </div>
			 </div>
			 <div class="category-group">
                <div class="title H3"><a href="/msk/vyezdnoe_obsluzhivanie/">Выездное обслуживание</a></div>
				<div class="category-group-list mt10">
                   <a class="link" href="/vyezdnoe_obsluzhivanie/bankety">Банкеты</a>
                   <a class="link" href="/vyezdnoe_obsluzhivanie/organizaciya_prazdnikov">Организация праздников</a>
				 </div>
			 </div>
			 <div class="category-group">
                <div class="title H3"><a href="/msk/montazh_torgovogo_otdela/">Монтаж торгового отдела</a></div>
				<div class="category-group-list mt10">
                   <a class="link" href="/montazh_torgovogo_otdela/pivnoj_prilavok">Пивной прилавок</a>
				 </div>
			 </div>
			 <div class="category-group">
                <div class="title H3"><a href="/msk/posuda_i_mebel/">Посуда и мебель</a></div>
				<div class="category-group-list mt10">
                   <a class="link" href="/posuda_i_mebel/posuda">Посуда</a>
                   <a class="link" href="/posuda_i_mebel/katalog_posudy">Каталог посуды</a>
                   <a class="link" href="/posuda_i_mebel/mebel">Мебель</a>
                   <a class="link" href="/posuda_i_mebel/katalog_mebeli">Каталог мебели</a>
				 </div>
			 </div>
			 <div class="category-group">
                <div class="title H3"><a href="/msk/ishchu_rabotu/">Ищу работу</a></div>
			 </div>
			 <div class="category-group">
                <div class="title H3"><a href="/msk/doska_obyavlenij/">Доска объявлений</a></div>
			 </div>
		  </div>
        </div>
     </div>
  </div>
</div>
		</div>
	</div>
		
				
		
		
		<div class="gap-small"></div>
    </div>
      <div class="gap-small"></div>
        <div id="bb8-widget-container"></div>
        <!-- начало блоков подкатегорий -->
        <div style="height: 100%;" class="col-md-9 col-sm-12 stick_height_js">
            <div class="row">
                <div class="col-md-3 col-sm-3"></div>
                <div class="col-md-6 col-sm-5">
                  <!-- прилипалка id="scroladv" -->
                   <div class="sidebar-box">
					   
					   
                    </div>
                </div>
            </div>
            <div class="row row-wrap" id="deals">
                <div id="blocks-wrapper" data-page="1" data-request_uri="<?=$request_uri_str; ?>" class="col-md-12 col-sm-12">
                </div>
            </div>
            <div class="gap gap-small"></div>
            <div class="nav-tabs nav-stacked nav-coupon-category ingreytext">
                <span>Смотрите также:</span>
            </div>
            <script src='/msk/js-echo/alkogolnie_line.js'></script>
        </div>
        <div class="col-xs-12">
            <div>
                <h2>Алкоголь в Воронеже</h2>
                <p>	На нашей онлайн витрине бла бла бла...</p>
                <h2>	Алкоголь доставка		</h2>
                <p>	Мы предлагаем Вам найти себе любой на вкус алкоголь бла бла бла ...</p>
            </div>
            <div class="gap-small"></div>
        </div>
    </div>
</div>

<? get_footer(); ?>
