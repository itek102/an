		<div id='main-content'>
		<h3>Продажа вторичного жилья</h3>		
<?foreach ($rom as $room):?>
				<div class='ob'>
					<img src="<?=base_url()?>images/11.jpg">
					<div class='ob-text-content'><h3 class='ob-title'>Продается квартира</h3>
<p class='ob-text'><span class='ob-text-title'>Цена:          </span> <?=$room['cena']?> руб.</p>
<p class='ob-text'><span class='ob-text-title'>Площадь общая/жилая/кухня/СУ:          </span> <?=$room['plos']?>/<?=$room['zilaya']?>/<?=$room['kuhnya']?>/<?=$room['plos_su']?></p>
<p class='ob-text'><span class='ob-text-title'>Комнат:        </span> <?=$room['col_room']?></p>
<p class='ob-text'><span class='ob-text-title'>Площадь:       </span> <?=$room['plos']?> м<sup>2</sup>.</p>
<p class='ob-text'><span class='ob-text-title'>Сан. узел:     </span> <?=$room['su']?></p>
<p class='ob-text'><span class='ob-text-title'>Окна:     </span> <?=$room['okna']?></p>
<p class='ob-text'><span class='ob-text-title'>Этаж/этажность:</span> <?=$room['etaz']?>/<?=$room['etaznost']?></p>
<p class='ob-text'><span class='ob-text-title'>Тип дома:      </span> <?=$room['type_home']?></p>
<p class='ob-text'><span class='ob-text-title'>Мебель:        </span> <?=$room['mebel']?></p>
<p class='ob-text'><span class='ob-text-title'>Паркинг:       </span> <?=$room['parking']?></p>
<p class='ob-text'><span class='ob-text-title'>Ипотека:       </span> <?=$room['ipoteka']?></p></div>
<p class='ob-text'><span class='ob-text-title'>Агент:       </span> <?=$room['agent']?></p>
<div class='button-ob'><a href="<?=base_url()?>first/s_room/<?=$room['id']?>">Подробнее</a></div>
</div>
				
			<? endforeach;?>
			</div>