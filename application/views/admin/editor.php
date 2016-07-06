	<div id='main-cont'>
		<h3 id='form-zag'>Шаг 1. Выберите объявление.</h3>
		<ul>
		<? foreach ($ob as $item):?>
			<li><a href="<?=base_url()?>page/edit_ob/<?=$item['id']?>"><?=$item['adres']?></a></li>		
		<? endforeach;?>
		</ul>
	</div>
	<div style="clear:both;"></div>
	</div>


