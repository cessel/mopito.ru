<!DOCTYPE HTML>

<html><head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <title>Регистрация объявлений</title>
	<meta name="description" content="Помощь как выбрать товар, услугу - на моспивторг ру">
	<link rel="icon" href="https://mopito.ru/favicon.png" type="image/png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" href="/theme/css/styles.css">
	<style>header.main .navbar-brand, header.main .login-register {margin-top: 0px!important;}</style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.4.1/jquery-migrate.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.min.js"></script>
	
    <script src="script.js"></script>
    <script src="jquery.min.js"></script>
	<script src="jquery.maskedinput.js"></script>
    <script type="text/javascript">jQuery(function($) {$('#phone').mask('+9(999)999-99-99');});</script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

<style>
    #form{ width:100%;}
    #form form{ margin:auto; display:block; }
    #form legend, #form input, #form textarea, #form b, #dsl1, #dsl2, #dsl3{ display:block; margin:3px auto;}
    #form legend, #form b{ text-align:center;}
    #form legend{    border-radius: 30px; background:#39F; color:#000; }
    #form input[type="text"], #form input[type="tel"], #form input[type="email"]{ width: 100%; border-radius:30px; border:#000 solid 1px; font-size:15px;padding:10px;} 
    #form textarea{ width: 100%; border-radius:10px; height:100px;font-size:15px;padding:10px;}
    #form b{ border-radius:30px; background:#39F; border:#00C solid 1px; padding:5px 10px; cursor:pointer;}
    #dsl1, #dsl2, #dsl3{ padding:0; }
    #dsl1 label, #dsl2 label, #dsl3 label{ display: inline-block; padding: 8px 7px; border: solid #000 1px; border-radius: 30px 0 0 30px;}
    #form select{float: right; padding: 10px; border-radius: 0 30px 30px 0;vertical-align: middle; }
    #dsl4{ width: 100%; text-align: center;margin: 0;}
    #dsl4 fieldset{ border: none; padding: 5px 0; display: block; margin: auto;}
    #dsl4 fieldset big { width: 100%; font-size: 15px;}
    #dsl4 fieldset big span{ width: 100%; margin-left: 5px; display: block; font-weight: 600;font-size: 16px; border-radius: 30px; background: #E19700; color: #000;}
    #dsl4 fieldset big div{ margin-left: 12px; display: block;font-size: 16px; }
    #form input[type="checkbox"] { display:inline-block; width: auto; margin: 5px 13px;}
    #dsl5{ text-align: left;}
    #dsl5 b{ cursor:no-drop; background:#999;}
		#recaptcha{ min-width: 300px; margin:auto;}
</style>

	</head>
<body class="wide" data-pagetype=''>
<!--<pre>Array
(
    [0] => msk
)
</pre>-->
<div id="iOS_wrapper">
	<div>
		<div id="sb-site">
			<div class="global-wrap">
				<div class="container">
					<div id="header1">
						<div class="header-container1">

   <div class="box-header1">															
      <div class="header-item1 header-dropdown1">															
         <span class="item categoryCurrent header-logo1"><a href="/">mopito.ru</a></span>
	  </div>														
	  <div class="header-item1 header-dropdown1"><span id="category_current" class="categoryCurrent header-category1">Выберите категорию</span>
	     <div id="menu_btn" class="sb-toggle-left1 navbar-left1 visible-xs1 visible-sm1">															
               <div class="navicon-line"></div>																
               <div class="navicon-line"></div>																
               <div class="navicon-line"></div>																
         </div>																
	  </div>														
	  <div class="header-item1 header-dropdown1 header-city1">														
	     <div class="current_location"><i class="pin_icon_white"></i><span class="hidden-xs prbl">Ваш город:</span><a href="#" id="current_location">
			 Выберите город			 
			 </a></div>
	  </div>			
      <div class="header-item1 header-dropdown1 header-city1">														
         <div class="current_location">
	<nav>
	 <div id="allmenu_current" class="hidden-hs">
      <ul class="topmenu12">
        <li><a href="/theme/regpay/reg.php" class="submenu-link12">Разместить объявление</a>
          <ul class="submenu12">
			<li><a href="/theme/help/postavshchikam/prioritety.php">Хочу быть Первым!</a></li>
			<li><a href="/theme/regpay/reg.php">Разместить объявление</a></li>
			<li><a href="/theme/help/index.php">Помощь</a></li>
          </ul>
        </li>
      </ul>
	 </div>
    </nav>
	<nav>
       <div class="visible-sm2">	
          <ul class="topmenumob">
             <li><a href="/theme/regpay/reg.php" class="submenu-linkmob"> Рег-я </a></li>
          </ul>
       </div>	
    </nav>
         </div>
	  </div>
   </div>															

							
						</div>
					</div>
				</div>
			</div>

<div class="gap"></div>
<div class="container">
    <div class="cont-regbox">
	  <div class="regp-md-3 regp-sm-3 modal-regcontent" >

<div id="form">
<form id="form1"><legend>Шаг 1: Укажите профиль компании</legend>
    <input type="text" id="" name="company" placeholder="Наименование компании" onBlur="Pattern(false, this, /^[A-Za-zА-Яа-яЁё0-9-.,- ]{3,100}$/)">
    <input type="text" id="" name="city" placeholder="Из какого города" onBlur="Pattern(false, this, /^[A-Za-zА-Яа-яЁё0-9-.,- ]{3,50}$/)">
    <input type="text" id="" name="adress" placeholder="...и адрес (при желании)" onBlur="Pattern(false, this, /^[A-Za-zА-Яа-яЁё0-9-.,- ]{3,100}$/)">
    <input type="text" id="" name="name" placeholder="Ваше имя" onBlur="Pattern(false, this, /^[A-Za-zА-Яа-яЁё0-9 ]{3,100}$/)">
    <input type="tel" id="phone" name="phone" placeholder="Моб.">
    <input type="email" id="" name="email" placeholder="Email">
    <textarea name="message" placeholder="Напишите комментарии. Если у Вас уже есть профиль, то укажите только ваш логин (он же емаил)" onBlur="Pattern(false, this, /^[A-Za-zА-Яа-яЁё0-9-.,- ]{3,200}$/)"></textarea>
    <b onClick="further()">Далее</b>
</form>
  <form id="form2" style="display:none;"><legend>Шаг 2: Разместите объявление</legend>
    <input type="text" id="" name="showCity" placeholder="Город показа" onFocus="Focus('dsl1', 'sl1')" onBlur="Blur('dsl1', 'sl1', this)">
    <input type="text" id="" name="shouAdres" placeholder=".. и адрес показа (для точки продаж)" onBlur="Pattern(false, this, /^[A-Za-zА-Яа-яЁё0-9-.,- ]{3,50}$/)">
      <div id="dsl1" style="display:none;"><label class="dsl123block">Тип поставщика: </label><select class="dsl123block-sel" id="sl1" onChange="selectl1('dsl2', 'sl2', this); this.getElementsByTagName('option')[0].innerHTML = '';" onClick="delOption(this)"></select>
	  </div>
	  <div id="dsl2" style="display:none;"><label class="dsl123block">Категория: </label><select class="dsl123block-sel" id="sl2" onChange="selectl2('dsl3', 'sl3', this); this.getElementsByTagName('option')[0].innerHTML = '';" onClick="delOption(this)"></select>
	  </div>
	  <div id="dsl3" style="display:none;"><label class="dsl123block">Подкатегория: </label><select class="dsl123block-sel" id="sl3" onChange="selectl3('dsl4', this); this.getElementsByTagName('option')[0].innerHTML = '';" onClick="delOption(this)"></select>
	  </div>
	  <div id="dsl4" style="display:none;">
	  </div>
	  <div id="dsl5" style="display:none;"> 
		  <div id="recaptcha" /*style="display:none;"*/>
	  </div>
	  <div class="g-recaptcha" data-sitekey="6Lc8yCgUAAAAADPYnEeqQd65crK6KU8A4XpkxRYX"></div>
      <label><input id="checkboxbig" type="checkbox" onChange="regulations(this)">Я согласен на обработку <a href="/help/agreements/" target="_blank">персональных данных</a> и принимаю условия <a href="/help/rules/" target="_blank">пользовательского соглашения</a></label>
      <b id="Click"><a class="grey2" href="#top">Отправить на модерацию</a></b>
  </form>
</div>
            <div class="nav-tabs nav-stacked nav-coupon-category ingreytext">
                <span>*Укажите реальный email для Вашего логина и дальнейших уведомлений</span>
            </div>
        </div>
      </div>
	  <div class="col-xs-12">
            <div>
                <h3>Дальнейшие действия после регистрации</h3>
                <p>	После заполнения данных фирмы, а так же его товарах и услуг, объявление поступит на модерацию. После проверки данных по указанному в заявке телефону с Вами свяжется техническая поддержка портала Мопито.ру для публикации объявления.</p>
                <h3 class="red1">ЕСЛИ НЕ НАШЛИ СВОЕЙ РУБРИКИ ИЛИ КАТЕГОРИИ ТОВАРОВ/УСЛУГ:</h3>
                <p class="blue1">	Пишите нам на почту: partner@mopito.ru </a></p>
                <h3>Вам может быть интересно:</h3>
                <p>	Информация для арендаторов - <a href="/theme/help/postavshchikam/prioritety.php">как стать первым в списке объявлений</a></p>
            </div>
            <div class="gap-small"></div>
	  </div>
    </div>
</div>

</div>

<a class="" href="#" id="back-to-top" title="Вверх">↑</a>
	
<footer class="main sb-static">
	<div class="footer-top-area">
		<div class="container">
			<div class="row row-wrap">
				<div class="col-md-5 col-sm-5 col-mobsm-5">
					<p class="desc"><img src="/theme/img/logo_mopito_tauk.png"  width="100" alt="Мопито" title="Портал поставщиков МОПИТО.РУ" class="logo">Теперь у Вас есть возможность найти себе Партнеров по бизнесу для кафе-баров и магазинов на одном сайте mopito.ru - производителей, импортеров, поставщиков, сетевые торговые объекты, выездное обслуживание и др.</p>
                    <ul class="nav nav-pills fnav">																
                        <li><a href="/theme/regpay/reg.php">Подать объявление</a></li>
                        <li><a href="/theme/help/rules.php">Пользовательское соглашение</a></li>																
                        <li><a href="/theme/help/agreements.php">Политика обработки персональных данных</a></li>
                    </ul>
				</div>
                <div class="col-md-7 col-sm-7 col-mobsm-7">																
					<div class="partners"><span style="font-size: 12px;">Наши партнеры:</span></div>
                    <ul class="nav nav-pills flexnav" id="partner-list">
						<li><a href="/theme/seo/seo.php" target="_blank"><img src="/img/partner_group_sos.png" alt="СЕО-продвижение сайта" title="SEO-продвижение сайта"></a></li>
                    </ul>																
				</div>
			    <p class="copy">Портал Мопито.ру, 2010 - <script src='/theme/js/data-w3.js'></script> &copy Все права защищены.</p>
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
				<div class="col-xs-12"><span class="blue1">Выберите нужный ГОРОД:</span>
					<ul class="main_cities list-inline">
<li><a href="/"><span class="orangtext">Москва</span></a></li>
<li><a href="/spb/alkogolnie/"><span class="orangtext">Санкт-Петербург</span></a></li>
					</ul>
					<p><span class="orangtext"> </span></p>
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
<div class="col-xs-12"><span class="blue1">Выберите нужного ПОСТАВЩИКА:</span>				
	<div class="footer-rubricator">			
		<a href="/alkogolnie/"><span class="orangtext">Алкоголь</span></a>		
	</div>			
	<ul class="main_cities list-inline">			
		<li><a href="/alkogolnie/vodka-optom/"><span>Водка оптом</span></a></li>		
		<li><a href="/alkogolnie/konyak-optom/"><span>Коньяк оптом</span></a></li>		
		<li><a href="/alkogolnie/vino-optom/"><span>Вино оптом</span></a></li>		
		<li><a href="/alkogolnie/shampanskoe-optom/"><span>Шампанское оптом</span></a></li>		
		<li><a href="/alkogolnie/liker-balzam-nastojka-optom/"><span>Ликер, Бальзам, Настойка оптом</span></a></li>		
		<li><a href="/alkogolnie/viski-rom-optom/"><span>Виски, Ром оптом</span></a></li>		
		<li><a href="/alkogolnie/pivo-optom/"><span>Пиво оптом</span></a></li>		
		<li><a href="/alkogolnie/sidr-medovuha-optom/"><span>Сидр, Медовуха оптом</span></a></li>		
		<li class="menu-li-bottm"><a href="/alkogolnie/energetiki-koktejli-optom/"><span>Энергетики, Коктейли оптом</span></a></li>		
	</ul>			
	<div class="footer-rubricator">			
		<a href="/bakaleya/"><span class="orangtext">Бакалея оптом</span></a>		
	</div>			
	<ul class="main_cities list-inline">			
		<li><a href="/bakaleya/muka-optom/"><span>Мука оптом</span></a></li>		
		<li><a href="/bakaleya/makarony-optom/"><span>Макароны оптом</span></a></li>		
		<li><a href="/bakaleya/muchnye-izdeliya-optom/"><span>Мучные изделия оптом</span></a></li>		
		<li><a href="/bakaleya/sahar-optom/"><span>Сахар оптом</span></a></li>		
		<li><a href="/bakaleya/shokolad-kakao-optom/"><span>Шоколад, Какао оптом</span></a></li>		
		<li><a href="/bakaleya/konfety-optom/"><span>Конфеты оптом</span></a></li>		
		<li><a href="/bakaleya/kofe-optom/"><span>Кофе оптом</span></a></li>		
		<li><a href="/bakaleya/chaj-optom/"><span>Чай оптом</span></a></li>		
		<li><a href="/bakaleya/konservy-konservaciya-optom/"><span>Консервы, Консервация оптом</span></a></li>		
		<li><a href="/bakaleya/varene-siropy-dzhemy-optom/"><span>Варенье, Сиропы, Джемы оптом</span></a></li>		
		<li><a href="/bakaleya/med-optom/"><span>Мед оптом</span></a></li>		
		<li><a href="/bakaleya/sol-specii-uksus-optom/"><span>Соль, Специи, Уксус оптом</span></a></li>		
		<li class="menu-li-bottm"><a href="/bakaleya/yajco-optom/"><span>Яйцо оптом</span></a></li>		
	</ul>			
	<div class="footer-rubricator">			
		<a href="/bezalkogolnie/"><span class="orangtext">Безалкоголь оптом</span></a>		
	</div>			
	<ul class="main_cities list-inline">			
		<li><a href="/bezalkogolnie/soki-voda-mors-optom/"><span>Соки, Вода, Морс оптом</span></a></li>		
		<li class="menu-li-bottm"><a href="/bezalkogolnie/kvas-limonad-optom/"><span>Квас, Лимонад оптом</span></a></li>		
	</ul>			
	<div class="footer-rubricator">			
		<a href="/zakuski-sneki/"><span class="orangtext">		
	</div>			
	<ul class="main_cities list-inline">			
		<li class="menu-li-bottm"><a href="/zakuski-sneki/zakuski-sneki-optom/"><span>Снеки оптом</span></a></li>		
	</ul>			
	<div class="footer-rubricator">			
		0		
	</div>			
	<ul class="main_cities list-inline">			
		<li><a href="/moloko-cheese-maslo/moloko-optom/"><span>Молоко оптом</span></a></li>		
		<li><a href="/moloko-cheese-maslo/syr-optom/"><span>Сыр оптом</span></a></li>		
		<li><a href="/moloko-cheese-maslo/molochnye-produkty-optom/"><span>Молочные продукты оптом</span></a></li>		
		<li class="menu-li-bottm"><a href="/moloko-cheese-maslo/maslo-optom/"><span>Масло оптом</span></a></li>		
	</ul>			
	<div class="footer-rubricator">			
		<a href="/myaso-optom/"><span class="orangtext">		
	</div>			
	<ul class="main_cities list-inline">			
		<li><a href="/myaso-optom/baranina-optom/"><span>Баранина оптом</span></a></li>		
		<li><a href="/myaso-optom/svinina-optom/"><span>Свинина оптом</span></a></li>		
		<li><a href="/myaso-optom/govyadina-optom/"><span>Говядина оптом</span></a></li>		
		<li><a href="/myaso-optom/ptica-optom/"><span>Птица оптом</span></a></li>		
		<li><a href="/myaso-optom/oborudovanie-dlya-gotovki/"><span>Оборудование для готовки оптом</span></a></li>		
		<li><a href="/myaso-optom/kurica-optom/"><span>Курица оптом</span></a></li>		
		<li><a href="/myaso-optom/indejka-optom/"><span>Индейка оптом</span></a></li>		
		<li><a href="/myaso-optom/utka-optom/"><span>Утка оптом</span></a></li>		
		<li><a href="/myaso-optom/telyatina-optom/"><span>Телятина оптом</span></a></li>		
		<li><a href="/myaso-optom/krolik-optom/"><span>Кролик оптом</span></a></li>		
		<li><a href="/myaso-optom/konina-optom/"><span>Конина оптом</span></a></li>		
		<li class="menu-li-bottm"><a href="/myaso-optom/kolbasa-optom/"><span>Колбасы оптом</span></a></li>		
	</ul>			
	<div class="footer-rubricator">			
		<a href="/produkty-pitaniya/"><span class="orangtext">		
	</div>			
	<ul class="main_cities list-inline">			
		<li><a href="/produkty-pitaniya/frukty-optom/"><span>Фрукты оптом</span></a></li>		
		<li><a href="/produkty-pitaniya/ovoshchi-optom/"><span>Овощи оптом</span></a></li>		
		<li><a href="/produkty-pitaniya/yagody-griby-zelen-optom/"><span>Ягоды, Грибы, Зелень оптом</span></a></li>		
		<li class="menu-li-bottm"><a href="/produkty-pitaniya/konditerskie-izdeliya-optom/"><span>Кондитерские изделия оптом</span></a></li>		
	</ul>			
	<div class="footer-rubricator">			
		<a href="/rybnaya-produkciya/"><span class="orangtext">		
	</div>			
	<ul class="main_cities list-inline">			
		<li><a href="/rybnaya-produkciya/ryba-optom/"><span>Рыба оптом</span></a></li>		
		<li class="menu-li-bottm"><a href="/rybnaya-produkciya/moreprodukty-optom/"><span>Морепродукты оптом</span></a></li>		
	</ul>			
</div>				
						
						</div>
                    </div>
                </div>
            </div>

<script src="/theme/js/modalall.js"></script>
<script src="/theme/js/front_27.js"></script>
<script src="/theme/js/ajax.js"></script>
</div>
<!-- Yandex.Metrika informer --> <a href="https://metrika.yandex.ru/stat/?id=55016239&amp;from=informer" target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/55016239/3_0_868686FF_666666FF_1_pageviews" style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" /></a> <!-- /Yandex.Metrika informer --> <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)}; m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)}) (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym"); ym(55016239, "init", { clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); </script> <noscript>
	<div><img src="https://mc.yandex.ru/watch/55016239" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
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