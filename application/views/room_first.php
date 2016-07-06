			<div id='main-content'>
<h3 id='page-title'><?=$room['title']; ?> <?=$room['adres']; ?></h3>
<? 

$this->db->where('parent',$room['id']);
$a = $this->db->get('gallery');
if($a->num_rows() ==0 ) {
	echo '<h3>Изображений нет</h3>';
} else {
	echo '<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<ul>';
	foreach ($a->result() as $item) {
		echo '<li><a href="#"><img src="'.base_url().'images/ob/'.$item->img.'" data-large="'.base_url().'images/ob/'.$item->img.'" alt="image01" data-description="" /></a></li>';
	}
	echo '</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->';
}
$this->db->where('id',$room['agent']);
$b = $this->db->get('agent');
$b = $b->row_array();
$room['agent'] = $b['name'].': '.$b['tel'];

?>

								
<div id='div-ob-text'>	
<p class='ob-text'><span class='ob-text-title'>Цена:          </span> <?=$room['cena']?> руб.</p>
<p class='ob-text'><span class='ob-text-title'>Комнат:        </span> <?=$room['col_room']?></p>
<p class='ob-text'><span class='ob-text-title'>Площадь:       </span> <?=$room['plos']?> м<sup>2</sup>.</p>
<p class='ob-text'><span class='ob-text-title'>Жилая площадь:       </span> <?=$room['zilaya']?> м<sup>2</sup>.</p>
<p class='ob-text'><span class='ob-text-title'>Кухня:       </span> <?=$room['kuhnya']?> м<sup>2</sup>.</p>
<p class='ob-text'><span class='ob-text-title'>Сан. узел:     </span> <?=$room['su']?> (<?=$room['plos_su']?>)</p>
<p class='ob-text'><span class='ob-text-title'>Балкон:     </span> <?=$room['balkon']?> (<?=$room['plos_balkon']?>)</p>
<p class='ob-text'><span class='ob-text-title'>Гардероб:     </span> <?=$room['garderob']?> (<?=$room['plos_garderob']?>)</p>
<p class='ob-text'><span class='ob-text-title'>Окна:     </span> <?=$room['okna']?></p>
<p class='ob-text'><span class='ob-text-title'>Этаж/этажность:</span> <?=$room['etaz']?>/<?=$room['etaznost']?></p>
<p class='ob-text'><span class='ob-text-title'>Тип дома:      </span> <?=$room['type_home']?></p>
<p class='ob-text'><span class='ob-text-title'>Мебель:        </span> <?=$room['mebel']?></p>
<p class='ob-text'><span class='ob-text-title'>Паркинг:       </span> <?=$room['parking']?></p>
<p class='ob-text'><span class='ob-text-title'>Ипотека:       </span> <?=$room['ipoteka']?></p>
</div>
<p class='ob-text2'><?=$room['text']?> </p>


	<fieldset id='agent-cont'>
		<legend>Контакты агента:</legend>
		<?=$room['agent']?></fieldset>

			</div>

		<script type="text/javascript" src="<?=base_url();?>js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?=base_url();?>js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="<?=base_url();?>js/gallery.js"></script>