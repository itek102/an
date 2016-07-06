<div class="col-lg-6">
		<form id='form-ob' method="post" action="">
				<div class='row form-group'>
					<div class="col-lg-4">
			<select name='sale' class="form-control">
					<option value='0'>Продажа</option>
					<option value='1'>Аренда</option>
				</select>
				</div>
				<div class="col-lg-4">
				<select name='vid' class="form-control" >
					<option value='0'>Жилое</option>
					<option value='1'>Нежилое</option>
				</select>
			</div>
				<div class="col-lg-4">
				<select name='type' class="form-control" >
					<? foreach($type as $item):?>
					<option value='<?=$item['id']?>'><?=$item['title']?></option>
					<?endforeach;?>
				</select>

			</div>
			</div>
				<? foreach ($par as $item) {
					if ($item['en_par'] == 'agent') {
						echo '<div class="form-group"><label>'.$item['parametr'].'</label><select  class="form-control" name="'.$item['en_par'].'">';
						foreach ($agent as $ag) {
							echo '<option value="'.$ag['id'].'">'.$ag['name'].'</option>';
						}
					echo '</select></div>';
						 }else {
							if ($item['en_par'] == 'text') {
								echo " <div class=\"form-group\"><label>".$item['parametr']."</label><textarea class=\"form-control input-sm\" name='".$item['en_par']."'></textarea></div>";
							} else {
								echo "<div class=\"form-group\"><input class=\"form-control input-sm\" type='text' name='".$item['en_par']."' placeholder='".$item['parametr']."'></div>";
							}
						}
						
					
				}?>

<input type="submit" class="btn btn-success" name="add_ob" value="Добавить объявление">
		</form>
</div>


