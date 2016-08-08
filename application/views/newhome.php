		<div id='main-content'>
		<h3>Объявления</h3>		
<?foreach ($rom as $room):?>
<?
					$this->db->where('parent',$room['id']);
					$this->db->limit('1');
					$a = $this->db->get('gallery');
					if ($a->num_rows() == 0) {
						$room['main_img'] = 'noimg.jpg';
					} else {
						$a = $a->row_array();
						$room['main_img'] = $a['img'];
					}
					$this->db->where('id',$room['agent']);
					$b = $this->db->get('agent');
					if ($b->num_rows()!=0) {
					$b = $b->row_array();
					$room['agent'] = $b['name'].': '.$b['tel'];
					} else {
						$room['agent'] = 'Наталья: 28-06-90';
					}

?>
				<div class='ob'>
					<img src="<?=base_url()?>images/ob/<?=$room['main_img']?>">
					<div class='ob-text-content'><h3 class='ob-title'><a class="title-ob-link" href="<?=base_url()?>first/fr/<?=$room['id']?>"><?=$room['title']?></a></h3>
<p class='ob-text'><span class='ob-text-title'>Цена:          </span> <?=$room['cena']?> руб.</p>
<p class='ob-text'><span class='ob-text-title'>Комнат:        </span> <?=$room['col_room']?></p>
<p class='ob-text'><span class='ob-text-title'>Площадь:       </span> <?=$room['plos']?> м<sup>2</sup>.</p>
<p class='ob-text'><span class='ob-text-title'>Сан. узел:     </span> <?=$room['su']?></p>
<p class='ob-text'><span class='ob-text-title'>Окна:     </span> <?=$room['okna']?></p>
<p class='ob-text'><span class='ob-text-title'>Этаж/этажность:</span> <?=$room['etaz']?>/<?=$room['etaznost']?></p>
<p class='ob-text'><span class='ob-text-title'>Тип дома:      </span> <?=$room['type_home']?></p>
<p class='ob-text'><span class='ob-text-title'>Мебель:        </span> <?=$room['mebel']?></p>
<p class='ob-text'><span class='ob-text-title'>Паркинг:       </span> <?=$room['parking']?></p>
<p class='ob-text'><span class='ob-text-title'>Ипотека:       </span> <?=$room['ipoteka']?></p>
<p class='ob-text'><span class='ob-text-title'>Агент:       </span> <?=$room['agent']?></p></div>
<div class='button-ob'><a href="<?=base_url()?>first/fr/<?=$room['id']?>">Подробнее</a></div>
</div>
				
			<? endforeach;?>
			</div>