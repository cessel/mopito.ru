<?php
include_once $_SERVER['DOCUMENT_ROOT']."/functions.php";

$identifikator = 'vodka_konyak_vino_shampanskoe_msk';


$krepkie_count = fields_counter('alco_17',$identifikator)['count'];
$msk_count = fields_counter('alco_12','msk')['count'];
$alchg_msk = fields_counter('alco_33','alkogolnie_msk')['count'];

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
   <title>Водка, коньяк, вино, шампанское</title>
   <meta name="description" content="Мы нашли для Вас <? echo $krepkie_count; ?> видов водки, коньяка, вина, шампанских. mopito.ru - онлайн витрина дл доставки алкоголя">	
   <link rel="canonical" href="http://mopito.ru/msk/alkogolnie/vodka_konyak_vino_shampanskoe">
   <link rel="shortcut icon" href="http://mopito.ru/img/favicon.png">	
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
   <link rel="stylesheet" href="/css/styles.css">
   <style>header.main .navbar-brand, header.main .login-register {margin-top: 0px!important;}</style>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.min.js"></script>
   
</head>
<body class="wide" data-pagetype='_<? echo $identifikator; ?>'><!--vodka_konyak_vino_shampanskoe_msk-->
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
         <span class="item categoryCurrent header-logo1"> mopito.ru </span>
	  </div>														
	  <div class="header-item1 header-dropdown1"><span id="category_current" class="categoryCurrent header-category1">Крепкий алкоголь</span>
	     <div id="menu_btn" class="sb-toggle-left1 navbar-left1 visible-xs1 visible-sm1">															
               <div class="navicon-line"></div>																
               <div class="navicon-line"></div>																
               <div class="navicon-line"></div>																
         </div>																
	  </div>
<!-- Шахяр	   
	  <div class="header-item1 header-dropdown1 header-city1">														
	     <div class="current_location"><i class="pin_icon_white"></i><span class="hidden-xs prbl">Ваш город:</span><a href="#" id="current_location">Воронеж</a></div>
	  </div>	
-->
<!-- булышу 	   
	   
      <div class="header-item1 header-dropdown1 header-city1">														
         <div class="current_location">
			<span id="allmenu_current" class="hidden-hs">
    <nav>
      <ul class="topmenu12">
        <li><a href="/help/" class="submenu-link12"></a>
          <ul class="submenu12">
          </ul>
        </li>
      </ul>
    </nav>
			</span>
	        <span class="visible-sm2">	
    <nav>
      <ul class="topmenumob">
      </ul>
    </nav>
            </span>																
         </div>
	  </div>
	   
-->
	   
	   
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
          <span property="v:title"><h1>водка, коньяк, вино, шампанское</h1></span>
       </li>
    </ul>
</div>
<div class="gap"></div>
<div class="container">
   <div class="">
      <div><p>В нашей витрине бла бла бла... </p> 
<span class="hidden-xs">Чтобы купить алкоголь, а так же узнать цену, условия доставки, позвоните нам в ближайший к вам магазин</span>
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
               <li class="active"><a href="/msk/alkogolnie/vodka_konyak_vino_shampanskoe" title="поставщики алкоголя"><i class="fa"><img src="/img/favi-a.png" class="qwert"></i>Водка, коньяк</a></li>
               <li class="fa roadmach"><a href="/msk/alkogolnie/pivo_sidr_medovuha" title="Пиво, сидр, медовуха"><i class="fa"></i>Пиво, сидр</a></li>
               <li class="fa roadmach"><a href="/msk/bezalkogolnie/soki_voda_kvas_limonad" title="Соки, воды, квас, лимонад"><i class="fa"></i>Безалкоголь</a></li>
               <li class="fa roadmach"><a href="/msk/zakuski_sneki/zakuski_sneki" title="поставщики закуски и снеки"><i class="fa"></i>Закуски и снеки</a></li>
        </ul>
    </aside>																
 <div object-in-parent-offset="938" style="position: relative; top: 3.56665px;" class="left_banners side_banners sticky_column sticked">																
    <div style="cursor: grab;" class="swiper-container swiper-container-horizontal" id="side_banners_slider">
       <div style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;" class="swiper-wrapper">
          <div style="width: 263px; margin-right: 30px;" class="swiper-slide swiper-slide-active">
             <div class="banner_st"><a href="/msk/produkty_pitaniya/"><img src="/img_adv/produkty_pitaniya.jpg" title="Продуктов питания"></a></div>
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
<h2>Алкоголь в Воронеже</h2>
<p>	На нашей онлайн витрине бла бла бла...</p>
<h2>	Алкоголь доставка		</h2>													
<p>	Мы предлагаем Вам найти себе любой на вкус алкоголь бла бла бла ...</p>
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
<p class="desc"><img src="/img/logo_mopito_tauk.png"  width="100" alt="" title="Магазин алкотоваров" class="logo">Теперь у Вас есть возможность найти себе любимый напиток бла бла бла </p>
                    <ul class="nav nav-pills fnav">																
                    </ul>
                </div>																
                <div class="col-md-7 col-sm-7 col-mobsm-7">																
					<div class="partners"><span style="font-size: 12px;">Наши партнеры:</span></div>
                    <ul class="nav nav-pills flexnav" id="partner-list">
                    </ul>																
				</div>
			    <p class="copy">Онлан алкотовары, 2018 - <script src='/js/data-w3.js'></script> &copy Все права защищены.</p>
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
                                   <p><span class="orangtext">Уважаемые посетители, для покупки заполните пожалуйста заявку на partner@mopito.ru. Ждем Ваших заявок! </span></p>
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
							</div>
                        </div>
                    </div>
                </div>
            </div>
                            <script src="/js/modalall.js"></script>
				            <script type="text/javascript" src="/js/front_27.js"></script>
				            <script type="text/javascript" src="/js/ajax.js"></script>
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