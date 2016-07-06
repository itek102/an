	<div id='main-cont'>
<h3 id='form-zag'>Шаг 2. Добавление фото к объявлению.</h3>
		<form id='admin-form' action="#"  enctype="multipart/form-data" method="POST">	
			<input type='text' style='display: none' name='parent' value="<?=$id_ob?>"> 
<p class='abz-form'><label><input type="file" min="1" max="9999" name="file[]" multiple="true" /></label></p>
<p class='abz-form'><label><input class="but" type="submit" name="load_files" value="Загрузить фото" /></label></p>
</form>
	</div>
	<div style="clear:both;"></div>
</div>


