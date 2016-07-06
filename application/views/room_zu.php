			<div id='main-content'>
<h3 id='page-title'><?=$room['adres']; ?></h3>


				<div id="rg-gallery" class="rg-gallery">
					<div class="rg-thumbs">
						<!-- Elastislide Carousel Thumbnail Viewer -->
						<div class="es-carousel-wrapper">
							<div class="es-nav">
								<span class="es-nav-prev">Previous</span>
								<span class="es-nav-next">Next</span>
							</div>
							<div class="es-carousel">
								<ul>
									<li><a href="#"><img src="<?=base_url();?>images/thumbs/1.jpg" data-large="<?=base_url();?>images/11.jpg" alt="image01" data-description="" /></a></li>
									<li><a href="#"><img src="<?=base_url();?>images/thumbs/2.jpg" data-large="<?=base_url();?>images/22.jpg" alt="image02" data-description="" /></a></li>
									<li><a href="#"><img src="<?=base_url();?>images/thumbs/3.jpg" data-large="<?=base_url();?>images/33.jpg" alt="image03" data-description="" /></a></li>
									<li><a href="#"><img src="<?=base_url();?>images/thumbs/4.jpg" data-large="<?=base_url();?>images/44.jpg" alt="image04" data-description="" /></a></li>
									<li><a href="#"><img src="<?=base_url();?>images/thumbs/5.jpg" data-large="<?=base_url();?>images/55.jpg" alt="image05" data-description="" /></a></li>
								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
	
<p class='ob-text'><span class='ob-text-title'>Адрес:          </span> <?=$room['adres']?></p>
<p class='ob-text'><span class='ob-text-title'>Цена:          </span> <?=$room['cena']?> руб.</p>
<p class='ob-text'><span class='ob-text-title'>Площадь:       </span> <?=$room['plos']?></p>
<p class='ob-text'><span class='ob-text-title'>Постройки:       </span> <?=$room['postr']?></p>
<p class='ob-text'><span class='ob-text-title'>Коммуникации:       </span> <?=$room['comunic']?></p>
<p class='ob-text'><span class='ob-text-title'>Ипотека:       </span> <?=$room['ipoteka']?></p>

<p class='ob-text2'><?=$room['text']?> </p>


	<fieldset id='agent-cont'>
		<legend>Контакты агента:</legend>
		<?=$room['agent']?></fieldset>

			</div>

		<script type="text/javascript" src="<?=base_url();?>js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?=base_url();?>js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="<?=base_url();?>js/gallery.js"></script>