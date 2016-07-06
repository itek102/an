	<div id='main-cont'>
		<h3 id='form-zag'>Шаг 2. Выберите изображение, которое хотите удалить или загузите новые.</h3>
			<form id='admin-form' action="#"  enctype="multipart/form-data" method="POST">	
<p class='abz-form'><label><input type="file" min="1" max="9999" name="file[]" multiple="true" /></label></p>
<p class='abz-form'><label><input class="but" type="submit" name="add_photo" value="Загрузить фото" /></label></p>
</form>
		<ul>
		<? foreach ($img as $item):?>
			<li class='item-img' data-img='<?=$item['id']?>'><span class='img-krest'>&#215;</span><img class='img-edit' data-img='<?=$item['id']?>' src='<?=base_url()?>images/ob/<?=$item['img']?>'></li>		
		<? endforeach;?>
		</ul>
	</div>
	<div style="clear:both;"></div>
	</div>
	<script type="text/javascript">
$('.item-img').click(function(){
	var html = $.ajax({
			type: "POST",
			url: "../del_img",
			data: ({
            'id': $(this).data('img'), 
        }),
            dataType: "json",
            async: false,
        }).responseText;
	location.reload();
})
	</script>