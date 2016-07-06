		<div id='main-content'>
		<h3>Продажа земельных участков</h3>		
<?foreach ($rom as $room):?>
<div class='ob'>
					<img src="<?=base_url()?>images/11.jpg">
					<div class='ob-text-content'><h3 class='ob-title'>Земельный участок</h3>
<p class='ob-text'><span class='ob-text-title'>Адрес:          </span> <?=$room['adres']?></p>
<p class='ob-text'><span class='ob-text-title'>Цена:          </span> <?=$room['cena']?> руб.</p>
<p class='ob-text'><span class='ob-text-title'>Площадь:       </span> <?=$room['plos']?></p>
<p class='ob-text'><span class='ob-text-title'>Постройки:       </span> <?=$room['postr']?></p>
<p class='ob-text'><span class='ob-text-title'>Коммуникации:       </span> <?=$room['comunic']?></p>
<p class='ob-text'><span class='ob-text-title'>Ипотека:       </span> <?=$room['ipoteka']?></p>
<p class='ob-text'><span class='ob-text-title'>Агент:       </span> <?=$room['agent']?></p>
<div class='button-ob'><a href="<?=base_url()?>first/zu/<?=$room['id']?>">Подробнее</a></div>
</div>
</div>
				
			<? endforeach;?>
			</div>