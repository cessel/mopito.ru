<?php
/**
 * Created by Cessel's WEBGate Studio.
 * User: Cessel
 * Date: 04.08.2019
 * Time: 16:53
 */
$request_uri = explode('/',$_SERVER['REQUEST_URI']);
$menu_array[] = ['menu_link'=>'/msk/alkogolnie/','menu_ancor'=>'Алкоголь оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики алкоголя'];

$menu_array[] = ['menu_link'=>'/msk/alkogolnie/vodka-optom/','menu_ancor'=>'Водка оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики водки'];

$menu_array[] = ['menu_link'=>'/msk/alkogolnie/konyak-optom/','menu_ancor'=>'Коньяк','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики коньяка'];

$menu_array[] = ['menu_link'=>'/msk/alkogolnie/vino-optom/','menu_ancor'=>'Вино оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики вина'];

$menu_array[] = ['menu_link'=>'/msk/alkogolnie/shampanskoe-optom/','menu_ancor'=>'Шампанское','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики шампанского'];

$menu_array[] = ['menu_link'=>'/msk/alkogolnie/pivo-optom/','menu_ancor'=>'Пиво оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики пива'];

$menu_array[] = ['menu_link'=>'/msk/alkogolnie/sidr-medovuha-optom/','menu_ancor'=>'Сидр','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики сидра, медовухи'];

$menu_array[] = ['menu_link'=>'/msk/bezalkogolnie/','menu_ancor'=>'Безалкоголь','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики безалкогольных напитков'];

$menu_array[] = ['menu_link'=>'/msk/bezalkogolnie/soki-optom/','menu_ancor'=>'Соки оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики соков'];

$menu_array[] = ['menu_link'=>'/msk/bezalkogolnie/voda-optom/','menu_ancor'=>'Вода','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики воды'];

$menu_array[] = ['menu_link'=>'/msk/bezalkogolnie/limonad-optom/','menu_ancor'=>'Лимонад','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики лимонада'];

$menu_array[] = ['menu_link'=>'/msk/bezalkogolnie/kvas-optom/','menu_ancor'=>'Квас оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики кваса'];

$menu_array[] = ['menu_link'=>'/msk/zakuski-sneki/zakuski-sneki-optom/','menu_ancor'=>'Закуски и снеки','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики закуски и снеки'];

$menu_array[] = ['menu_link'=>'/msk/kofe-chaj/chaj-optom/','menu_ancor'=>'Чай оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики чая'];

$menu_array[] = ['menu_link'=>'/msk/kofe-chaj/kofe-optom/','menu_ancor'=>'Кофе оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики кофе'];

$menu_array[] = ['menu_link'=>'/msk/produkty-pitaniya/','menu_ancor'=>'Продукты питания оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики продуктов питания'];

$menu_array[] = ['menu_link'=>'/msk/produkty-pitaniya/frukty-optom/','menu_ancor'=>'Фрукты оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики фруктов'];

$menu_array[] = ['menu_link'=>'/msk/produkty-pitaniya/ovoshchi-optom/','menu_ancor'=>'Овощи','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики овощей'];

$menu_array[] = ['menu_link'=>'/msk/produkty-pitaniya/myaso-optom/','menu_ancor'=>'Мясо оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики мяса'];

$menu_array[] = ['menu_link'=>'/msk/produkty-pitaniya/ryba-optom/','menu_ancor'=>'Рыба оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики рыбы'];

$menu_array[] = ['menu_link'=>'/msk/oborudovanie/','menu_ancor'=>'Оборудование для бизнеса','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики оборудования для бизнеса'];

$menu_array[] = ['menu_link'=>'/msk/oborudovanie/oborudovanie-dlya-piva/','menu_ancor'=>'Оборудование для пива','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Оборудование для пива'];

$menu_array[] = ['menu_link'=>'/msk/oborudovanie/xolodilnoe-oborudovanie/','menu_ancor'=>'Холодильное оборудование','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Холодильное оборудование'];

$menu_array[] = ['menu_link'=>'/msk/oborudovanie/torgovoe-oborudovanie/','menu_ancor'=>'Торговое оборудование','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Торговое оборудование'];

$menu_array[] = ['menu_link'=>'/msk/oborudovanie/dlya-fastfudov-i-ulichnoe/','menu_ancor'=>'Для фастфудов и уличное','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Оборудование для уличной торговли'];

$menu_array[] = ['menu_link'=>'/msk/oborudovanie/kofemashiny/','menu_ancor'=>'Кофемашины','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Кофемашины в аренду и на продажу'];

$menu_array[] = ['menu_link'=>'/msk/catering/','menu_ancor'=>'Кейтеринг','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики услуг по выездному обслуживанию'];

$menu_array[] = ['menu_link'=>'/msk/catering/vyezdnoe-obsluzhivanie/','menu_ancor'=>'Выездное обслуживание','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики услуг по выездному обслуживанию'];

$menu_array[] = ['menu_link'=>'/msk/catering/bankety/','menu_ancor'=>'Организация Банкетов','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики услуг по банкетам'];

$menu_array[] = ['menu_link'=>'/msk/catering/organizaciya-prazdnikov/','menu_ancor'=>'Организация праздников','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики услуг по организации праздников'];

$menu_array[] = ['menu_link'=>'/msk/uslugi/','menu_ancor'=>'Монтаж и отделка','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Услуги по монтажу оборудования, пивных и барных прилавков'];

$menu_array[] = ['menu_link'=>'/msk/uslugi/servis/','menu_ancor'=>'Обслуживание оборудования','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Услуги по обслуживанию оборудования'];
