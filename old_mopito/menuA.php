<?php
/**
 * Created by Cessel's WEBGate Studio.
 * User: Cessel
 * Date: 04.08.2019
 * Time: 16:53
 */
$request_uri = explode('/',$_SERVER['REQUEST_URI']);
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/alkogolnie/','menu_ancor'=>'Алкоголь','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики алкоголя'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/alkogolnie/vodka_optom/','menu_ancor'=>'Водка','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики водки'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/alkogolnie/konyak_optom/','menu_ancor'=>'Коньяк','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики коньяка'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/alkogolnie/vino_optom/','menu_ancor'=>'Вино','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики вина'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/alkogolnie/shampanskoe_optom/','menu_ancor'=>'Шампанское','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики шампанского'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/alkogolnie/pivo_optom/','menu_ancor'=>'Пиво','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики пива'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/alkogolnie/sidr_medovuha_optom/','menu_ancor'=>'Сидр','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики сидра, медовухи'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bezalkogolnie/','menu_ancor'=>'Безалкоголь','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики безалкогольных напитков'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bezalkogolnie/soki_optom/','menu_ancor'=>'Соки','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики соков'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bezalkogolnie/voda_optom/','menu_ancor'=>'Вода','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики воды'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bezalkogolnie/limonad_optom/','menu_ancor'=>'Лимонад','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики лимонада'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bezalkogolnie/kvas_optom/','menu_ancor'=>'Квас','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики кваса'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/zakuski_sneki/zakuski_sneki_optom/','menu_ancor'=>'Закуски и снеки','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики закуски и снеки'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/kofe_chaj/chaj_optom/','menu_ancor'=>'Чай оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики чая'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/kofe_chaj/kofe_optom/','menu_ancor'=>'Кофе оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики кофе'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/produkty_pitaniya/','menu_ancor'=>'Продукты питания','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики продуктов питания'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/produkty_pitaniya/frukty_optom/','menu_ancor'=>'Фрукты','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики фруктов'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/produkty_pitaniya/ovoshchi_optom/','menu_ancor'=>'Овощи','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики овощей'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/produkty_pitaniya/myaso_optom/','menu_ancor'=>'Мясо оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики мяса'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/produkty_pitaniya/ryba_optom/','menu_ancor'=>'Рыба оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики рыбы'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/oborudovanie/','menu_ancor'=>'Оборудование для бизнеса','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики оборудования для бизнеса'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/oborudovanie/oborudovanie_dlya_piva/','menu_ancor'=>'Оборудование для пива','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Оборудование для пива'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/oborudovanie/xolodilnoe_oborudovanie/','menu_ancor'=>'Холодильное оборудование','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Холодильное оборудование'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/oborudovanie/torgovoe_oborudovanie/','menu_ancor'=>'Торговое оборудование','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Торговое оборудование'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/oborudovanie/dlya_fastfudov_i_ulichnoe/','menu_ancor'=>'Для фастфудов и уличное','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Оборудование для уличной торговли'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/oborudovanie/kofemashiny/','menu_ancor'=>'Кофемашины','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Кофемашины в аренду и на продажу'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/catering/','menu_ancor'=>'Кейтеринг','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики услуг по выездному обслуживанию'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/catering/vyezdnoe_obsluzhivanie/','menu_ancor'=>'Выездное обслуживание','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики услуг по выездному обслуживанию'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/catering/bankety/','menu_ancor'=>'Организация Банкетов','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики услуг по банкетам'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/catering/organizaciya_prazdnikov/','menu_ancor'=>'Организация праздников','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики услуг по организации праздников'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/uslugi/','menu_ancor'=>'Монтаж и отделка','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Услуги по монтажу оборудования, пивных и барных прилавков'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/uslugi/servis/','menu_ancor'=>'Обслуживание оборудования','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Услуги по обслуживанию оборудования'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/uslugi/otdelka_i_montazh/','menu_ancor'=>'Монтаж и отделка','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Услуги по монтажу помещений и барных стоек'];
