<?php
/**
 * Created by Cessel's WEBGate Studio.
 * User: Cessel
 * Date: 04.08.2019
 * Time: 16:53
 */

$request_uri = get_request_uri();
array_unshift($request_uri,'');
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/alkogolnie/','menu_ancor'=>'Алкоголь оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики алкоголя'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/alkogolnie/vodka-optom/','menu_ancor'=>'Водка оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики водки'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/alkogolnie/konyak-optom/','menu_ancor'=>'Коньяк оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики коньяка'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/alkogolnie/vino-optom/','menu_ancor'=>'Вино оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики вина'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/alkogolnie/shampanskoe-optom/','menu_ancor'=>'Шампанское оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики шампанского'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/alkogolnie/liker-balzam-nastojka-optom/','menu_ancor'=>'Ликер, Бальзам, Настойка оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики ликера, бальзама, настойки'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/alkogolnie/viski-rom-optom/','menu_ancor'=>'Виски, Ром оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики виски, рома'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/alkogolnie/pivo-optom/','menu_ancor'=>'Пиво оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики пива'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/alkogolnie/sidr-medovuha-optom/','menu_ancor'=>'Сидр, Медовуха оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики сидра, медовухи'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/alkogolnie/energetiki-koktejli-optom/','menu_ancor'=>'Энергетики, Коктейли оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики энергетика, коктейлей'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bakaleya/','menu_ancor'=>'Бакалея оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики бакалеи'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bakaleya/muka-optom/','menu_ancor'=>'Мука оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики муки'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bakaleya/makarony-optom/','menu_ancor'=>'Макароны оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики макарон'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bakaleya/muchnye-izdeliya-optom/','menu_ancor'=>'Мучные изделия оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики мучных изделий'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bakaleya/sahar-optom/','menu_ancor'=>'Сахар оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики сахара'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bakaleya/shokolad-kakao-optom/','menu_ancor'=>'Шоколад, Какао оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики шоколада, какао'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bakaleya/konfety-optom/','menu_ancor'=>'Конфеты оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики конфет'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bakaleya/kofe-optom/','menu_ancor'=>'Кофе оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики кофе'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bakaleya/chaj-optom/','menu_ancor'=>'Чай оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики чая'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bakaleya/konservy-konservaciya-optom/','menu_ancor'=>'Консервы, Консервация оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики консерв, консерваций'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bakaleya/varene-siropy-dzhemy-optom/','menu_ancor'=>'Варенье, Сиропы, Джемы оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики варенья, сиропов, джемов'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bakaleya/med-optom/','menu_ancor'=>'Мед оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики меда'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bakaleya/sol-specii-uksus-optom/','menu_ancor'=>'Соль, Специи, Уксус оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики соли, специй, уксуса'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bakaleya/yajco-optom/','menu_ancor'=>'Яйцо оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики яиц'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bezalkogolnie/','menu_ancor'=>'Безалкоголь оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики безалкоголя'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bezalkogolnie/soki-voda-mors-optom/','menu_ancor'=>'Соки, Вода, Морс оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики соков, воды, морса'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/bezalkogolnie/kvas-limonad-optom/','menu_ancor'=>'Квас, Лимонад оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики кваса, лимонада'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/zakuski-sneki/','menu_ancor'=>'Закуски оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики закусок'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/zakuski-sneki/zakuski-sneki-optom/','menu_ancor'=>'Снеки оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики снеков'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/moloko-cheese-maslo/','menu_ancor'=>'Молоко-Сыр-Масло оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики молока-сыра-масла'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/moloko-cheese-maslo/moloko-optom/','menu_ancor'=>'Молоко оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики молока'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/moloko-cheese-maslo/syr-optom/','menu_ancor'=>'Сыр оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики сыра'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/moloko-cheese-maslo/molochnye-produkty-optom/','menu_ancor'=>'Молочные продукты оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики молочных продуктов'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/moloko-cheese-maslo/maslo-optom/','menu_ancor'=>'Масло оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики масла'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/myaso-optom/','menu_ancor'=>'Мясо оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики мяса'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/myaso-optom/baranina-optom/','menu_ancor'=>'Баранина оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики баранины'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/myaso-optom/svinina-optom/','menu_ancor'=>'Свинина оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики свинины'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/myaso-optom/govyadina-optom/','menu_ancor'=>'Говядина оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики говядины'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/myaso-optom/ptica-optom/','menu_ancor'=>'Птица оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики птицы'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/myaso-optom/oborudovanie-dlya-gotovki/','menu_ancor'=>'Оборудование для готовки оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики оборудования для готовки'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/myaso-optom/kurica-optom/','menu_ancor'=>'Курица оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики курицы'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/myaso-optom/indejka-optom/','menu_ancor'=>'Индейка оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики индейки'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/myaso-optom/utka-optom/','menu_ancor'=>'Утка оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики утки'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/myaso-optom/telyatina-optom/','menu_ancor'=>'Телятина оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики телятины'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/myaso-optom/krolik-optom/','menu_ancor'=>'Кролик оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики кролика'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/myaso-optom/konina-optom/','menu_ancor'=>'Конина оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики конины'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/myaso-optom/kolbasa-optom/','menu_ancor'=>'Колбасы оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики колбас'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/produkty-pitaniya/','menu_ancor'=>'Продукты питания оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики продуктов питания'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/produkty-pitaniya/frukty-optom/','menu_ancor'=>'Фрукты оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики фруктов'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/produkty-pitaniya/ovoshchi-optom/','menu_ancor'=>'Овощи оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики овощей'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/produkty-pitaniya/yagody-griby-zelen-optom/','menu_ancor'=>'Ягоды, Грибы, Зелень оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики ягод, грибов, зелени'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/produkty-pitaniya/konditerskie-izdeliya-optom/','menu_ancor'=>'Кондитерские изделия оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики кондитерских изделий'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/rybnaya-produkciya/','menu_ancor'=>'Рыбная продукция оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики рыбной продукции'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/rybnaya-produkciya/ryba-optom/','menu_ancor'=>'Рыба оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики рыбы'];
$menu_array[] = ['menu_link'=>'/'.$request_uri[1].'/rybnaya-produkciya/moreprodukty-optom/','menu_ancor'=>'Морепродукты оптом','menu_icon_name'=>'','menu_icon_image_url'=>'','menu_title'=>'Поставщики морепродуктов'];