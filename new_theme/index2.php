<?php
include_once $_SERVER['DOCUMENT_ROOT']."/functions.php";

$identifikator = 'krepkie_msk';


$krepkie_count = fields_counter('alco_17',$identifikator)['count'];
$msk_count = fields_counter('alco_12','msk')['count'];
$alchg_msk = fields_counter('alco_33','alchg_msk')['count'];

$filter_counter = 'manufact_'.$identifikator;


if(isset(fields_counter('alco_23','pstvsch_'.$identifikator)['count']) && fields_counter('alco_23','pstvsch_'.$identifikator)['count'] != 0 && fields_counter('alco_23','pstvsch_'.$identifikator)['count'] != NULL)
	{
		$filter_counters[] = fields_counter('alco_23','pstvsch_'.$identifikator)['count'];
	}
if(isset(fields_counter('alco_23','manufact_'.$identifikator)['count']) && fields_counter('alco_23','manufact_'.$identifikator)['count'] != 0 && fields_counter('alco_23','manufact_'.$identifikator)['count'] != NULL)
	{
		$filter_counters[] = fields_counter('alco_23','manufact_'.$identifikator)['count'];
	}
if(isset(fields_counter('alco_23','spretail_'.$identifikator)['count']) && fields_counter('alco_23','spretail_'.$identifikator)['count'] != 0 && fields_counter('alco_23','spretail_'.$identifikator)['count'] != NULL)
	{
		$filter_counters[] = fields_counter('alco_23','spretail_'.$identifikator)['count'];
	}
?> <!-- <? var_dump($filter_counter); ?> --> <? 

$filters_data = fields_counter('alco_15',false,$identifikator);

?><!DOCTYPE html>
<html class="sb-init" lang="ru"><head>
   <meta name="twitter:widgets:csp" content="on">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
   <title>Водка, коньяк, вино, шампанское оптом</title>
   <meta name="description" content="Мы нашли для Вас <? echo $krepkie_count; ?> лучших Поставщиков водки, коньяка, вина, шампанских оптом. Mopito.ru - все поставщики в кафе, бары и магазины Москвы!">	
   <link rel="canonical" href="https://mopito.ru/msk/alkogolnie/vodka_konyak_vino_shampanskoe_optom">
   <link rel="icon" href="https://mopito.ru/favicon.png" type="image/png">	
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
   <link rel="stylesheet" href="/css/styles.css">
   <style>header.main .navbar-brand, header.main .login-register {margin-top: 0px!important;}</style>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.min.js"></script>
   
</head>
<body class="wide" data-pagetype='_<? echo $identifikator; ?>'><!--krepkie_msk-->
	<a class="" href="#" id="back-to-top" title="Вверх">↑</a>
    <div id="iOS_wrapper">
		<div>
            <div id="sb-site">
                <div class="global-wrap">
<div class="container">
<div id="header1">																
<div class="header-container1">																
   <div class="box-header1">															
      <div class="header-item1 header-dropdown1">															
         <span class="item categoryCurrent header-logo1"> MOPITO.RU </span>
	  </div>														
	  <div class="header-item1 header-dropdown1"><span id="category_current" class="categoryCurrent header-category1">Крепкий алкоголь</span>
	     <div id="menu_btn" class="sb-toggle-left1 navbar-left1 visible-xs1 visible-sm1">															
               <div class="navicon-line"></div>																
               <div class="navicon-line"></div>																
               <div class="navicon-line"></div>																
         </div>																
	  </div>														
	  <div class="header-item1 header-dropdown1 header-city1">														
	     <div class="current_location"><i class="pin_icon_white"></i><span class="hidden-xs prbl">Ваш город:</span><a href="#" id="current_location">Москва</a></div>
	  </div>			
      <div class="header-item1 header-dropdown1 header-city1">														
         <div class="current_location">
			<span id="allmenu_current" class="hidden-hs">
    <nav>
      <ul class="topmenu12">
        <li><a href="/theme/regpay/reg.php" class="submenu-link12">Разместить объявление</a>
          <ul class="submenu12">
			<li><a href="/help/arendatori">Хочу быть Первым!</a></li>
			<li><a href="/msk/regpay/reg">Разместить объявление</a></li>
			<li><a href="/help">Помощь</a></li>
          </ul>
        </li>
      </ul>
    </nav>
			</span>
	        <span class="visible-sm2">	
    <nav>
      <ul class="topmenumob">
        <li><a href="/help/arendatori" class="submenu-linkmob"> ? </a></li>
      </ul>
    </nav>
            </span>																
         </div>
	  </div>
   </div>															
</div>															
</div>																
</div>
</div>
<!--    TEST FOR LOGO and SEACH -->
<!--    END TEST FOR LOGO and SEACH -->
<div class="container">
    <ul class="breadcrumb">
       <li typeof="v:Breadcrumb">
          <a href="/msk/" rel="v:url" property="v:title" title="Перейти на «Главная»">Главная (<? echo $msk_count; ?>)</a>
       </li>
       <li typeof="v:Breadcrumb">
          <a href="/msk/alkogolnie/" rel="v:url" property="v:title" title="Перейти в категорию «Алкогольные напитки»">Алкогольные напитки (<? echo $alchg_msk; ?>)</a>
       </li>
       <li class="active" typeof="v:Breadcrumb"></li>
       <li class="active" typeof="v:Breadcrumb">
          <span property="v:title"><h1>Поставщики алкоголя оптом - водка, коньяк, вино, шампанское</h1></span>
       </li>
    </ul>
</div>
<div class="gap"></div>
<div class="container">
   <div class="">
      <div><p>Мы нашли для Вас поставщиков крепкого алкоголя в Москве и Московской области. Мопито.ру предлагает найти алкоголь виноводочных изделий, пиво, сидр и др. для бизнеса и в розницу</p> 
<span class="hidden-xs">Чтобы купить алкоголь в Москве, а так же узнать цену, условия доставки, выберите нужного поставщика по доставке алкоголя через меню или фильтр поиска. Так же здесь имеются разделы крепкого и слабоалкогольных напитков. 
Мы надеемся, что вы найдете для себя нужного партнера как в Москве, так и в других регионах России.</span>
      </div>																
   <div class="gap-small"></div>																
   </div>                        																
<div class="row ">
  <div style="height: 100%;" class="col-md-3 col-sm-3 hidden-xs hidden-sm stick_height_js">
    <aside class="sidebar-left" id="sidebar-left">																
        <div class="menu-hamburger visible-xs-block"><i></i>Меню</div>
        <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left hidden-xs-block">
            <div class="chr_ball chr_ball-1"></div>
            <div class="chr_ball chr_ball-2"></div>
            <div class="chr_ball chr_ball-3"></div>
               <li class="active"><a href="/msk/alkogolnie/" title="поставщики алкоголя"><i class="fa"><img src="/img/favi-a.png" class="qwert"></i>Алкоголь</a></li>
               <li class="fa roadmach"><a href="/msk/bezalkogolnie/soki_voda_kvas_limonad_optom" title="Соки, воды, квас, лимонад оптом"><i class="fa"></i>Безалкоголь</a></li>
               <li class="fa roadmach"><a href="/msk/zakuski_sneki/zakuski_sneki_optom" title="поставщики закуски и снеки оптом"><i class="fa"></i>Закуски и снеки</a></li>
			   <li class="fa roadmach"><a href="/msk/chaj_kofe/chaj_kofe_optom" title="поставщики чай и кофе оптом"><i class="fa"></i>Чай и кофе</a></li>
               <li class="fa roadmach"><a href="/msk/produkty_pitaniya/" title="поставщики продукты питания оптом"><i class="fa"></i>Продукты питания</a></li>
               <li class="fa roadmach"><a href="/msk/oborudovanie/" title="поставщики оборудования для бизнеса"><i class="fa"></i>Оборудование</a></li>
			   <li class="fa roadmach"><a href="/msk/catering/vyezdnoe_obsluzhivanie_bankety_organizaciya_prazdnikov" title="Организация выездного обслуживания, банкеты, организация праздников"><i class="fa"></i>Выездное обслуживание</a></li>
			   <li class="fa roadmach"><a href="/msk/uslugi/otdelka_i_montazh" title="услуги по монтажу и отделке"><i class="fa"></i>Монтаж и отделка</a></li>
        </ul>
    </aside>																
    <aside class="sidebar-left-help" id="sidebar-left-help">																
        <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left hidden-xs-block">
               <li class="fa roadmach"><a href="/help/kafe_baram_magazinam" title="Как найти поставщика"><i class="fa"></i>Как найти поставщика</a></li>
               <li class="fa roadmach"><a href="/help/arendatori" title="Как разместить объявление"><i class="fa"></i>Как разместить объявление</a></li>
               <li class="fa roadmach"><a href="/help" title="Помощь"><i class="fa"></i>Помощь</a></li>			
        </ul>																
    </aside>																
 <div object-in-parent-offset="938" style="position: relative; top: 3.56665px;" class="left_banners side_banners sticky_column sticked">																
    <div style="cursor: grab;" class="swiper-container swiper-container-horizontal" id="side_banners_slider">
       <div style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;" class="swiper-wrapper">
          <div style="width: 263px; margin-right: 30px;" class="swiper-slide swiper-slide-active">
             <div class="banner_st"><a href="/msk/produkty_pitaniya/"><img src="/img_adv/produkty_pitaniya.jpg" title="Поставщики Продуктов питания"></a></div>
          </div>
	   </div>
    </div>
 </div>           
</div>
<div id="bb8-widget-container"></div>
<!-- начало блоков подкатегорий -->
<div style="height: 100%;" class="col-md-9 col-sm-12 stick_height_js">
   <div class="nav-tabs nav-stacked nav-coupon-category inbluetext">
      <span>Найдено <? echo $krepkie_count; ?> <? echo getNumEnding($krepkie_count, array('сорт','сорта','сортов')); ?></span>
   </div>
    <div class="row">
        <div id="filters" class="col-xs-12 visible-xs">
            <div id="filter_btn" class="btn black_btn_style mb15" data-show="filters"><span id="filter_mes">Показать фильтры</span></div>
        </div>
 <div class="col-md-3 col-sm-3"></div>
 <div class="col-md-6 col-sm-5">
            <div class="sidebar-box">
                <ul class="checkbox-list">
				<?
				$n = 0;
				while($fd = mysqli_fetch_array($filters_data)) 
					{
						?>
							<li class="checkbox">
								<label class="filter">
									<div class="i-check"></div>
									<a data-filter='<? echo $fd['alco_15']; ?>'>
										<? echo $fd['alco_15']; ?> (<? echo $filter_counters[$n++]; ?>)
									</a>
								</label>
							</li>
						<?
					}
				?>
				</ul>
            </div>
        </div>      
     </div>
     <div class="row row-wrap" id="deals">
  <div id="blocks-wrapper" data-page="1" class="col-md-12 col-sm-12">
<!-- начало блока1 -- (Этому блоку изначально присвоено значение "1_krepkie_msk" (из колонки alco_113). Все остальные значения этого блока будут вставляться исходя из поиска строки по этому значению, и вставке значения по указанной колонке "alco_..". Иначе если значение "1_krepkie_msk" не найдено, то все нижние блоки не показаны, и выводится текст "Ждем ваших предложений  <a href="/msk/regpay/reg" class="blockright"> Разместить </a>" ) -->
		<? $ids = array(); ?>
		<? $ids = get_block_ids()['ids']; ?>
		<?
			if(count($ids) > 0)
				{
					foreach($ids as $id)
						{
							echo get_block_html($id);
						}
				}
			else
				{
					?>
						Ждем ваших предложений  <a href="/msk/regpay/reg" class="blockright"> Разместить </a>
					<?
				}
		?>
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
<h2>Алкоголь оптом в Москве</h2>
<p>	На нашем портале размещены - поставщики алкогольных напитков оптом и в розницу, а так же оптовые базы алкоголя. Так же можно найти поставщика чтобы купить как дешевый алкоголь, так и элитный оптом, мелким оптом или в розницу, на свадьбу, где цена от недорого оптового до рознично элитного в подарок, в том числе с доставкой по городу Москва и Московской области. Чтобы купить оптовый алкоголь, можно воспользоваться удобным сервисом по подбору необходимых алкогольных напитков - водки, рома, виски, джина, текилы и др. После выбора нужного поставщика по продаже алкоголя с доставкой или самовывозом, можно с ними связаться по указанным в объявлении телефонам или написать письмо по форме обратной связи прямо с сайта.</p>
<h2>	Поставщики алкоголя		</h2>													
<p>	Мы предлагаем Вам найти себе надежного Партнера по бизнесу, выбирайте нужные объявления и созванивайтесь по указанным контактам, обменивайтесь визитками или напишите письмо если вы не дозвонились. Купить алкоголь с доставкой по Москве или Московской области не составит труда, так как на портале размещены только те поставщики алкоголя оптом, которые заявили о себе на портале Мопито.ру. В условиях конкуренции рождается комфорт, и в первую очередь для качественного, выгодного и удобного взаимоотношения Заказчика и Продавца. Чтобы купить алкоголь у поставщика, воспользуйтесь нашим онлайн сервисом и свяжитесь с ним по указанным на сайте контактам.</p>
   </div>																
   <div class="gap-small"></div>
            </div>
        </div>
    </div>
</div>
<footer class="main sb-static">																
    <div class="footer-top-area">																
        <div class="container">																
            <div class="row row-wrap">																
                <div class="col-md-5 col-sm-5 col-mobsm-5">																
<p class="desc"><img src="/img/logo_mopito_tauk.png"  width="100" alt="Мопито" title="Портал поставщиков МОПИТО.РУ" class="logo">Теперь у Вас есть возможность найти себе Партнеров по бизнесу для кафе-баров и магазинов на одном сайте mopito.ru - производителей, импортеров, поставщиков, сетевые торговые объекты, выездное обслуживание и др.</p>
                    <ul class="nav nav-pills fnav">																
                        <li><a href="/msk/regpay/reg">Подать объявление</a></li>																
                        <li><a href="/help/rules">Пользовательское соглашение</a></li>																
                        <li><a href="/help/agreements">Политика обработки персональных данных</a></li>
                    </ul>
                </div>																
                <div class="col-md-7 col-sm-7 col-mobsm-7">																
					<div class="partners"><span style="font-size: 12px;">Наши партнеры:</span></div>
                    <ul class="nav nav-pills flexnav" id="partner-list">
						<li><img src="/img/partner_group_sos.png" width="100px" alt="Партнеры" title="НКО Союз Обогревающих Сил"></li>
                    </ul>																
				</div>
			    <p class="copy">Портал Мопито.ру, 2010 - <script src='/js/data-w3.js'></script> &copy Все права защищены.</p>
            </div>
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
                                    <li><a href="/msk/"><span>Москва</span></a></li>
                                </ul>
                                   <p><span class="orangtext">Уважаемые посетители, для размещения объявления в своем городе, заполните пожалуйста заявку <a href="/msk/regpay/reg.php" target="_blank">ПОДАТЬ ОБЪЯВЛЕНИЕ</a> или напишите на partner@mopito.ru. Ждем Ваших заявок! </span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<div id="category" class="city_overflow">
                <div class="container">
                    <div class="city_choose_block">
                        <div id="category_close" class="city_overflow_close"></div>
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="main_cities list-inline">
                                   <li><span class="blue1">Выберите нужного ПОСТАВЩИКА:</span></li><br><br>
                                   <li><a href="/msk/alkogolnie/"><span class="orangtext">Алкоголь</span></a></li>
                                   <li><a href="/msk/alkogolnie/vodka_konyak_vino_shampanskoe_optom"><span>Водка, коньяк, вино, шампанское</span></a></li>
                                   <li><a href="/msk/alkogolnie/pivo_sidr_medovuha_optom"><span>Пиво, сидр, медовуха</span></a></li><br>
                                   <li><a href="/msk/bezalkogolnie/soki_voda_kvas_limonad_optom"><span class="orangtext">Безалкоголь</span></a></li><br>
                                   <li><a href="/msk/zakuski_sneki/zakuski_sneki_optom"><span class="orangtext">Закуски и снеки</span></a></li><br>
                                   <li><a href="/msk/chaj_kofe/chaj_kofe_optom/"><span class="orangtext">Чай и кофе</span></a></li><br>
                                   <li><a href="/msk/produkty_pitaniya/"><span class="orangtext">Продукты питания</span></a></li>
                                   <li><a href="/msk/produkty_pitaniya/frukty_ovoshchi_optom"><span>Фрукты и овощи</span></a></li>
                                   <li><a href="/msk/produkty_pitaniya/myaso_myasnaya_produkciya_optom"><span>Мясо и мясная продукция</span></a></li>
                                   <li><a href="/msk/produkty_pitaniya/ryba_moreprodukty_optom"><span>Рыба и морепродукты</span></a></li><br>
                                   <li><a href="/msk/oborudovanie/"><span class="orangtext">Оборудование</span></a></li>
                                   <li><a href="/msk/oborudovanie/oborudovanie_dlya_piva"><span>Оборудование для пива</span></a></li>
                                   <li><a href="/msk/oborudovanie/xolodilnoe_oborudovanie"><span>Холодильное оборудование</span></a></li>
                                   <li><a href="/msk/oborudovanie/torgovoe_oborudovanie"><span>Торговое оборудование</span></a></li>
                                   <li><a href="/msk/oborudovanie/dlya_fastfudov_i_ulichnoe"><span>Для фастфудов и уличное</span></a></li>
                                   <li><a href="/msk/oborudovanie/kofemashiny"><span>Кофемашины</span></a></li><br>
                                   <li><a href="/msk/catering/vyezdnoe_obsluzhivanie_bankety_organizaciya_prazdnikov"><span class="orangtext">Выездное обслуживание, Банкеты, Организация праздников</span></a></li><br>
                                   <li><a href="/msk/uslugi/otdelka_i_montazh"><span class="orangtext">Монтаж и отделка</span></a></li><br>
                               </ul>
							</div>
                        </div>
                    </div>
                </div>
            </div>
                            <script src="/js/modalall.js"></script>
				            <script src="/js/front_27.js"></script>
				            <script src="/js/ajax.js"></script>
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
	</body></html>