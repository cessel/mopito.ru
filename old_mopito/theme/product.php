<? get_header();
global $page;
?>
<div class="container">
	<? the_breadcrumbs($page); ?>
</div>
<div class="gap"></div>
<div id="deals" class="container">
	<a href="#back" class='back-link'>Назад</a>
  <div id="product-blocks-wrapper" data-page="1" class="col-md-12 col-sm-12">
<!-- начало блока1 -- (Этому блоку изначально присвоено значение "1_krepkie_msk" (из колонки alco_113). Все остальные значения этого блока будут вставляться исходя из поиска строки по этому значению, и вставке значения по указанной колонке "alco_..". Иначе если значение "1_krepkie_msk" не найдено, то все нижние блоки не показаны, и выводится текст "Ждем ваших предложений  <a href="/theme/regpay/reg.php" class="blockright"> Разместить </a>" ) -->
		<?
			if($page['id'])
				{
					echo get_block_html($page['product']['index_0'],get_request_uri());
					?>
					<div class="smehopolic1617"><?=$page['product']['alco_9']; ?></div>
					<div class="smehopolic1025"><p><?=$page['product']['alco_14']; ?></p></div>
					<div class='adress-show'><?=$page['product']['alco_98']; ?></div>
					<div id='map' style='width:998px;max-width:100%;height:400px;float:left;' data-adress='<?=str_replace('Воронеж1','Воронеж',$page['product']['alco_98']); ?>' data-sitename='<div class="left"><b><?=$page['product']['alco_15']; ?></b><br><img src="/i/user.png" align="top">&nbsp;<?=$page['product']['alco_3']; ?><br><img src="/i/house.png" align="top">&nbsp;<?=$page['product']['alco_14']; ?><br></div>'></div>
					<?
				}
			else
				{
					?>
						Ждем ваших предложений  <a href="/theme/regpay/reg.php" class="blockright">Разместить</a>
					<?
				}
		?>
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
			
<!-- <script src='script_advanser'></script> -->
</div>
<div class="col-xs-12">
   <div>
   </div>
<div class="gap-small"></div>
            </div>
        </div>
    </div>
<? get_footer(); ?>