	<?php
/**
 * Created by Cessel's WEBGate Studio.
 * User: Cessel
 * Date: 29.07.2019
 * Time: 14:15
 */
 get_header();
global $page;
$filters_data = fields_counter('alco_15',false,$identifikator);

?>
<? $request_uri = explode('/',$_SERVER['REQUEST_URI']); ?>

<div class="container">
	<? the_breadcrumbs($page); ?>
</div>

<div class="gap"></div>
<div class="container">
    <div class="cont-box">
        <h1><?=$page['page']['title']; ?></h1>
        <? if ($request_uri[1] == 'smw' && $request_uri[2] == 'alkogolnie') : ?>
            <div><p>Мы нашли для Вас <span><?=$page['page']['count_products']; ?> <? echo getNumEnding($page['page']['count_products'], array('поставщик','поставщика','поставщиков')); ?></span> по <?=$page['product']['alco_36']; ?> <?=$page['product']['alco_24']; ?> в <?=$page['product']['alco_141']; ?> и <?=$page['product']['alco_142']; ?> по оптовой цене. Мопито.ру предлагает <?=$page['product']['alco_73']; ?>	<?=$page['product']['alco_144']; ?> для разных секторов бизнеса и услуг по городу <?=$page['product']['alco_11']; ?>.
<br><br>
				<span class="">Чтобы найти поставщика и <?=$page['product']['alco_73']; ?> <?=$page['product']['alco_28']; ?> <?=$page['product']['alco_29']; ?>, а так же узнать цену, условия поставки, свяжитесь 📞 с ним прямо с объявления.</span>
            </div>
        <? elseif ($request_uri[2] == 'alkogolnie') : ?>
            <div><p>Мы нашли для Вас <span><?=$page['page']['count_products']; ?> <? echo getNumEnding($page['page']['count_products'], array('поставщик','поставщика','поставщиков')); ?></span> по <?=$page['product']['alco_36']; ?> <?=$page['product']['alco_24']; ?> в <?=$page['product']['alco_141']; ?> и <?=$page['product']['alco_142']; ?> по оптовой цене. Мопито.ру предлагает <?=$page['product']['alco_73']; ?>	<?=$page['product']['alco_144']; ?> для разных секторов бизнеса и услуг по городу <?=$page['product']['alco_11']; ?>.
<br><br>
				<span class="">Чтобы найти поставщика и <?=$page['product']['alco_73']; ?> <?=$page['product']['alco_28']; ?> <?=$page['product']['alco_29']; ?>, а так же узнать цену, условия поставки, свяжитесь 📞 с ним прямо с объявления.</span>
            </div>
        <? elseif($request_uri[1] == 'msk') : ?>
            <div><p>Мы нашли для Вас <span><?=$page['page']['count_products']; ?> <? echo getNumEnding($page['page']['count_products'], array('поставщик','поставщика','поставщиков')); ?></span> по <?=$page['product']['alco_36']; ?> <?=$page['product']['alco_24']; ?> в <?=$page['product']['alco_141']; ?> и <?=$page['product']['alco_142']; ?> по оптовой цене. Мопито.ру предлагает <?=$page['product']['alco_73']; ?>	<?=$page['product']['alco_144']; ?> для разных секторов бизнеса и услуг по городу <?=$page['product']['alco_11']; ?>.
<br><br>
				<span class="">Чтобы найти поставщика и <?=$page['product']['alco_73']; ?> <?=$page['product']['alco_28']; ?> <?=$page['product']['alco_29']; ?>, а так же узнать цену, условия поставки, свяжитесь 📞 с ним прямо с объявления.</span>
            </div>
        <? elseif ($request_uri[1] == 'spb') : ?>
            <div><p>Мы нашли для Вас <span><?=$page['page']['count_products']; ?> <? echo getNumEnding($page['page']['count_products'], array('поставщик','поставщика','поставщиков')); ?></span> по <?=$page['product']['alco_36']; ?> <?=$page['product']['alco_24']; ?> в <?=$page['product']['alco_141']; ?> и <?=$page['product']['alco_142']; ?> по оптовой цене. Мопито.ру предлагает <?=$page['product']['alco_73']; ?>	<?=$page['product']['alco_144']; ?> для разных секторов бизнеса и услуг по городу <?=$page['product']['alco_11']; ?>.
<br><br>
				<span class="">Чтобы найти поставщика и <?=$page['product']['alco_73']; ?> <?=$page['product']['alco_28']; ?> <?=$page['product']['alco_29']; ?>, а так же узнать цену, условия поставки, свяжитесь 📞 с ним прямо с объявления.</span>
            </div>
        <? else : ?>
            <div><p>Мы нашли для Вас <span><?=$page['page']['count_products']; ?> <? echo getNumEnding($page['page']['count_products'], array('поставщик','поставщика','поставщиков')); ?></span> по <?=$page['product']['alco_36']; ?> <?=$page['product']['alco_24']; ?> в <?=$page['product']['alco_141']; ?> и <?=$page['product']['alco_142']; ?> по оптовой цене. Мопито.ру предлагает <?=$page['product']['alco_73']; ?>	<?=$page['product']['alco_144']; ?> для разных секторов бизнеса и услуг по городу <?=$page['product']['alco_11']; ?>.
<br><br>
				<span class="">Чтобы найти поставщика и <?=$page['product']['alco_73']; ?> <?=$page['product']['alco_28']; ?> <?=$page['product']['alco_29']; ?>, а так же узнать цену, условия поставки, свяжитесь 📞 с ним прямо с объявления.</span>
            </div>
        <? endif;?>
        <div class="gap-small"></div>
    </div>
      <div class="gap-small"></div>
      <div style="height: 100%;" class="col-md-3 col-sm-3 hidden-xs hidden-sm stick_height_js">
		    <aside class="sidebar-left" id="sidebar-left">
                <div class="menu-hamburger visible-xs-block"><i></i>Меню</div>
	            <? the_menu('/menu.php'); ?>
<!-- /menu_'.$request_uri[1].'.пхп' -->
            </aside>
		    <aside class="sidebar-left-help" id="sidebar-left-help">																
              <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left hidden-xs-block">
                 <li class="fa roadmach"><a href="/theme/help/pokupatelyam.php" title="Как найти поставщика"><i class="fa"></i>Как найти поставщика</a></li>
                 <li class="fa roadmach"><a href="/theme/help/postavshchikam.php" title="Как разместить объявление"><i class="fa"></i>Как разместить объявление</a></li>
                 <li class="fa roadmach"><a href="/theme/help/index.php" title="Помощь"><i class="fa"></i>Помощь</a></li>			
              </ul>																
		    </aside>		  
            <div object-in-parent-offset="938" style="position: relative; top: 3.56665px;" class="left_banners side_banners sticky_column sticked">
                <div class="swiper-container swiper-container-horizontal" id="side_banners_slider">
                    <div style="transform: translate3d(0px, 0px, 0px); transition-duration: 300ms;" class="swiper-wrapper">
                        <div style="margin-right: 30px;" class="swiper-slide swiper-slide-active">
                            <div class="banner_st"><a href="<?='/'.$request_uri[1]."" ?>/produkty_pitaniya/"><img class="advbanleft" src="/img/dostavka_produkty_pitaniya.png" title="Продуктов питания"></a></div>
                        </div>
                    </div>
                </div>
            </div>
      </div>
        <div id="bb8-widget-container"></div>
        <!-- начало блоков подкатегорий -->
        <div style="height: 100%;" class="col-md-9 col-sm-12 stick_height_js">
            <div class="nav-tabs nav-stacked nav-coupon-category inbluetext">
                <span>Найдено <?=$page['page']['count_products']; ?> <? echo getNumEnding($page['page']['count_products'], array('поставщик','поставщика','поставщиков')); ?></span>
            </div>
            <div class="row">
                <div id="filters" class="col-xs-12 visible-xs">
                    <div id="filter_btn" class="btn black_btn_style mb15" data-show="filters"><span id="filter_mes">Показать фильтры</span></div>
                </div>
                <div class="col-md-3 col-sm-3"></div>
                <div class="col-md-6 col-sm-5">
                  <!-- прилипалка id="scroladv" -->
                   <div class="sidebar-box">
                       <ul class="checkbox-list">
							<?
							$n = 0;
							$request_uri_arr = get_request_uri();
							$request_uri_str = implode(',',$request_uri_arr);
							while($fd = mysqli_fetch_array($filters_data))
							{
								$where = get_conditions($request_uri_arr,$fd['alco_15']);
								$sql = "SELECT COUNT(*) AS count FROM `alco_base_new` WHERE ".$where." ORDER BY `index_0` ".$limit;
								$result = sql( $sql );
								$row = mysqli_fetch_array( $result );
								?>
                                <li class="checkbox">
                                    <label class="filter">
                                        <div class="i-check"></div>
                                        <a data-filter='<?=$fd['alco_15']; ?>'>
											<?=$fd['alco_15']; ?> (<?=$row['count']; ?>)
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
                <div id="blocks-wrapper" data-page="1" data-request_uri="<?=$request_uri_str; ?>" class="col-md-12 col-sm-12">
                </div>
            </div>
            <div class="gap gap-small"></div>            
	        <div class="nav-tabs nav-stacked nav-coupon-category ingreytext">
                <span>Информация для поставщиков:</span>
            </div>
 
<!-- begin adv ban-->
			
				<div class="advert kalife-wrapper kalife-wrapper-search">
			<div class="allrow">
				<div class="raz-dl-3 raz-sr-3 raz-mal-4">
					<span class="kalife-icon-circle text-center">
						<span class="text-muted">₽</span>
					</span>
				</div>
				<div class="raz-big-17 raz-mid-17 raz-mal-15">
					<p class="primary-title">
						Дарим по 3000 баллов за регистрацию объявления!*
					</p>
					<p class="text-base text-muted">
						* - Данные баллы можно обменять только на поднятие объявлений!
					</p>				
				</div>
				<div class="raz-big-4 raz-mid-4 raz-mal-5">
					<a href="/theme/regpay/reg.php" target="_blank" class="btn btn-secondary">Подать объявление
					</a>
				</div>
			</div>
		</div>
 <!-- end adv ban-->
			
<!-- <script src='/msk/js-echo/alkogolnie_line.js'></script> -->
        </div>
        <div class="col-xs-12">
            <!-- <div></div> -->
            <div class="gap-small"></div>
        </div>
    </div>
</div>

<? get_footer(); ?>
