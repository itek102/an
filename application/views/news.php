		<div id='main-content'>
<h3>Новости</h3>
			<?foreach ($news as $room):?>
				<div class='ob'>
					<img class='ob-img' src="<?=base_url()?>images/news/<?=$room['img']?>">
					<div class='ob-text-content'><h3 class='ob-title'><?=$room['title']?></h3>
<p class='ob-text2'><?=$room['text']?></p>
</div>
</div>
				
			<? endforeach;?>
				
			</div>