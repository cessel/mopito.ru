<?php
/**
 * Created by Cessel's WEBGate Studio.
 * User: Cessel
 * Date: 04.08.2019
 * Time: 16:53
 */
$request_uri = explode('/',$_SERVER['REQUEST_URI']);
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/alkogolnie/vodka_konyak_vino_shampanskoe_optom/','menu_ancor'=>'Водка, коньяк','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики крепкого алкоголя'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/alkogolnie/pivo_sidr_medovuha_optom/','menu_ancor'=>'Пиво, сидр','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики пиво, сидр, медовуха'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bezalkogolnie/soki_voda_kvas_limonad_optom/','menu_ancor'=>'Безалкоголь','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики соков, воды, кваса, лимонада'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/zakuski_sneki/zakuski_sneki_optom/','menu_ancor'=>'Закуски и снеки','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики закуски и снеки'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/kofe_chaj/chaj_kofe_optom/','menu_ancor'=>'Чай-Кофе','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики чая и кофе'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/produkty_pitaniya/','menu_ancor'=>'Продукты питания','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики продуктов питания'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/oborudovanie/','menu_ancor'=>'Оборудование для бизнеса','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики оборудования для бизнеса'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/catering/vyezdnoe_obsluzhivanie_bankety_organizaciya_prazdnikov/','menu_ancor'=>'Кейтеринг','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики услуг по выездному обслуживанию'];

$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/uslugi/otdelka_i_montazh/','menu_ancor'=>'Монтаж и отделка','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Монтаж и отделка прилавков, холодильных камер, барных стоек, фальшстен'];
