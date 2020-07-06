<?include_once $_SERVER['DOCUMENT_ROOT']."/functions.php";

$id = (isset($_GET['id'])) ? $_GET['id'] : false;

$row = get_block_row($id);

$identifikator = 'vodka_konyak_vino_shampanskoe_msk';



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

   <title>Крафт-бир</title>

   <meta name="description" content="Мы нашли для Вас <? echo $krepkie_count; ?> лучших новинок. mopito.ru - пиво, водки">	

   <link rel="canonical" href="http://mopito.ru/msk/alkogolnie/vodka_konyak_vino_shampanskoe_optom">

   <link rel="shortcut icon" href="http://mopito.ru/img/favicon.png">	

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

   <link rel="stylesheet" href="/css/styles.css">

   <style>header.main .navbar-brand, header.main .login-register {margin-top: 0px!important;}</style>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.min.js"></script>

       <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>



</head>

<body class="wide" data-pagetype='product'>

	<a class="" href="#" id="back-to-top" title="Вверх">↑</a>

    <div id="iOS_wrapper">

		<div>

            <div id="sb-site">

				<div class="global-wrap">

<div id="header1">

<div class="header-container1">

   <div class="box-header1">

      <div class="header-item1 header-dropdown1 prbleft">

         <span class="item categoryCurrent header-logo1">mopito.ru</span>

	  </div>

	  <div class="header-item1 header-dropdown1 prbleft"><span id="category_current" class="categoryCurrent header-category1">Крепкое пиво</span>

	     <div id="menu_btn" class="sb-toggle-left1 navbar-left1 visible-xs1 visible-sm1">

               <div class="navicon-line"></div>

               <div class="navicon-line"></div>

               <div class="navicon-line"></div>

         </div>

	  </div>

	  <div class="header-item1 header-dropdown1 header-city1">

	     <div class="current_location"><i class="pin_icon_white"></i><span class="hidden-xs prbl">Ваш город:</span><a href="#" id="current_location">Воронеж</a></div>

	  </div>

      <div class="header-item1 header-dropdown1 header-city1">

         <div class="current_location">

			<span id="allmenu_current" class="hidden-hs">

               <nav>

	              <ul class="topmenu">

		             <li><a href="javascript:;" title="Информация" class="submenu-link">Информация</a>

		           	   <ul class="submenu">

	    		       </ul>

		             </li>

	              </ul>

               </nav>

            </span>

	        <div id="menu_all_btn" class="sb-toggle-left1 allmenu-right1 visible-sm2">

               <div>Инфо</div>

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

       <li typeof="v:Breadcrumb">

          <a href="/msk/alkogolnie/vodka_konyak_vino_shampanskoe" rel="v:url" property="v:title" title="Перейти в категорию «Крепкие алкогольные напитки»">Крепкие алкогольные напитки (<? echo $krepkie_count; ?>)</a>

       </li>

       <li class="active" typeof="v:Breadcrumb">

          <span property="v:title"><h1><? echo $row['alco_3']."_".$row['alco_70'];?></h1></span>

       </li>

    </ul>

</div>

<div class="gap"></div>

<div class="container">

	<a href="#back" class='back-link'>Назад</a>

  <div id="product-blocks-wrapper" data-page="1" class="col-md-12 col-sm-12">

<!-- начало блока1 -- (Этому блоку изначально присвоено значение "1_krepkie_msk" (из колонки alco_113). Все остальные значения этого блока будут вставляться исходя из поиска строки по этому значению, и вставке значения по указанной колонке "alco_..". Иначе если значение "1_krepkie_msk" не найдено, то все нижние блоки не показаны, и выводится текст "Ждем ваших предложений  <a href="/msk/regpay/reg" class="blockright"> Разместить </a>" ) -->

		

		<?

			if($id)

				{

					echo get_block_html($id);

					?>

					

					<div class="smehopolic1617"><? echo $row['alco_9']; ?></div>

					<div class="smehopolic1025"><p><? echo $row['alco_14']; ?></p></div>

					

					<div class='adress-show'><? echo $row['alco_98']; ?></div>

					

					<div id='map' style='width:998px;max-width:100%;height:400px;float:left;' data-adress='<? echo str_replace('Воронеж1','Воронеж',$row['alco_98']); ?>' data-sitename='<div class="left"><b><?echo $row['alco_15']; ?></b><br><img src="/i/user.png" align="top">&nbsp;<?echo $row['alco_3']; ?><br><img src="/i/house.png" align="top">&nbsp;<?echo $row['alco_14']; ?><br></div>'></div>

					<?

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

                <div class="col-md-5 col-sm-5">

<p class="desc"><img src="/img/logo_mopito_tauk.png"  width="100" alt="Крафт-бир" title="Портал Крафт-бир" class="logo">Теперь у Вас есть возможность найти себе бла бла бла текст</p>

<!--		

                  <div class="soc_group">

                      <span class="kg_text">Следуйте<br> за нами:</span>

                          <ul class="list-inline kg_links">

                             <li>

                                <a target="_blank" rel="noopener" href="#" class="vk_icon kg_icon"></a>

                             </li>

                          </ul>

                          <div class="clearfix"></div>

                   </div>

 -->

                   <ul class="nav nav-pills fnav">

                        <li>

                            <a href="/msk/regpay/reg">Подать заявку</a>

                        </li>

                        <li>

                            <a href="/msk/about/">О магазине</a>

                        </li>

                        <li>

                            <a href="/msk/news/">Новости</a>

                        </li>

                    </ul>

                    <p class="copy">Крафт-бир, 2010 - <script src='/js/data-w3.js'></script> &copy Все права защищены.</p>

                </div>

                <div class="col-md-7 col-sm-7">

                    <div class="partners"><span style="font-size: 12px;">Наши партнеры:</span></div>

                    <ul class="nav nav-pills flexnav" id="partner-list">

                       <li><a href="#" title=""><img src="/*.png"></a></li>

                       <li><a href="#" title=""><img src="/*.png"></a></li>

                       <li><a href="#" title=""><img src="/*.png"></a></li>

                    </ul>

                </div>

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

                                    <li><a href="/msk/"><span>Воронеж</span></a></li>

                                </ul>

                                   <p><span class="orangtext">Уважаемые покупатели, бла бла текст</span></p>

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

                                   <li><a href="/msk/alkogolnie/"><span class="orangtext">Алкоголь</span></a></li>

                               </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

			<div id="allmenu" class="city_overflow">

                <div class="container">

                    <div class="city_choose_block">

                        <div id="allmenu_close" class="city_overflow_close"></div>

                        <div class="row">

                            <div class="col-xs-12">

                                <ul class="main_cities list-inline">

                                   <li><a href="/msk/alkogolnie/"><span class="orangtext">Покупателям</span></a></li>

								</ul>

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