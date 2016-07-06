<html>
	<head>
		<title>Агентство недвижимости "Кррост"</title>
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/style.css" />
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/orbit.css" />
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/elastislide.css" />
		<script type="text/javascript" src="<?=base_url()?>js/query.js"></script>
		<script type="text/javascript" src="<?=base_url()?>js/jquery.orbit.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
				$('#inform-slide').orbit({
					'bullets': true,
					'timer' : true,
				});
			});
		</script>
        <noscript>
			<style>
				.es-carousel ul{
					display:block;
				}
			</style>
		</noscript>
		<script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">	
			<div class="rg-image-wrapper">
				{{if itemsCount > 1}}
					<div class="rg-image-nav">
						<a href="#" class="rg-image-nav-prev">Previous Image</a>
						<a href="#" class="rg-image-nav-next">Next Image</a>
					</div>
				{{/if}}
				<div class="rg-image"></div>
				<div class="rg-loading"></div>
				<div class="rg-caption-wrapper">
					<div class="rg-caption" style="display:none;">
						<p></p>
					</div>
				</div>
			</div>
		</script>
	</head>
	<body>
	<div id='wrapper'>
		<div id='top'></div>
		<div id='nav'>
			<div id='logo'><img src="<?=base_url()?>images/logo.png"></div>
			<div id='slogan'>
				<? foreach ($slogan as $item):?>
				<div id="text_slide<?=$item['id']?>" class='slogan'><?=$item['text']?></div>
			<? endforeach;?>
			</div>
			<div id='contact'>
				<p id='conttact-adres'><img class='contact-img' src="<?=base_url()?>images/home.png">460052, г. Оренбург, проезд Северный, д. 10/1</p>
				<p id='contact-tel'><img class='contact-img' src="<?=base_url()?>images/tel.png">28-06-90</p>
				<p id='contact-mail'><img class='contact-img' src="<?=base_url()?>images/mail.png">krrost56@mail.ru</p>
			</div>
		</div>
		<div id='menu'>
			<div id='soc-block'>
				<a href='http://ok.ru/group/52575969673281' target='blank'><img class='soc-block-img' src="<?=base_url()?>images/icons/ok.png"></a>
				<a href='https://vk.com/club114722027' target='blank'><img class='soc-block-img' src="<?=base_url()?>images/icons/vk.png"></a>
			</div>
			<ul id='main-menu'>
				<li class='home-link'><a href='<?=base_url()?>'><img class='contact-img' src="<?=base_url()?>images/home-white.png"></a></li>
				<? foreach ($nav as $item):?>
				<li class='menu-item'><a href='<?=base_url()?>first/pages/<?=$item['link']?>'><?=$item['title']?></a></li>
			<? endforeach;?>
			</ul>
			
		</div>
		<div id='content'>
			<div id='infrom'>
				<div id='inform-slide'>
					<? foreach ($slide as $item): ?>
					<img src="<?=base_url()?>images/slide/<?=$item['img']?>" alt="" rel='ts<?=$item['id']?>' />
				<? endforeach; ?>
				</div>
				<? foreach ($slide as $item): ?>
					<span class="orbit-caption" id="ts<?=$item['id']?>">
						<?=$item['text']?>
				<p class='inform-text'>Контактные телефоны агентов: <br>
					<? if ($item['agent']==0) {
						$this->db->order_by('id','random');
						$a= $this->db->get('agent');
						foreach ($a->result() as $item2) {
							echo $item2->name.": ".$item2->tel."</br>";
						}
					} else {
						$this->db->where('id',$item['agent']);
						$a= $this->db->get('agent');
						$a = $a->row_array();
						echo $a['name'].': '.$a['tel'];
					}?></p>
					</span>
					<? endforeach; ?>
			</div>

			<div id='search'>
				<select id='sale-home' class='search-home'>
					<option value='0'>Купить</option>
					<option value='1'>Арендовать</option>
				</select>
				<select id='vid-home' class='search-home'>
					<option value='0'>Жилое помещение</option>
					<option value='1'>Нежилое помещение</option>
				</select>
				<select id='type-home' class='search-home'>
					<?

						$t = $this->db->get('type');
						foreach ($t->result() as $item) {
							echo '<option value="'.$item->id.'">'.$item->title.'</option>';
						}

					?>
				</select>
				<button id='search-home'>Подобрать</button>
			</div>
			<div id='l-sidebar'>
				<ul id='l-menu'>
			<? foreach ($l_menu as $item){
				$this->db->where('type', $item['id']);
				$a = $this->db->get('newhome');
				if ($a->num_rows() != 0) {
					echo "<li class='l-menu-item' data-parent='".$item['id']."'><a href='".base_url()."first/room/".$item['id']."'>".$item['title']."</a></li>";
				}
			}?>
				
				</ul>
				<div id='l-banner'>
					<a href='http://reestr.grmonp.ru/'><img src='<?=base_url()?>images/banner/1.gif' style='width:300px'></a>
				</div>
			</div>

			<script type="text/javascript">  
var text_slide_cur=0;
var base_url = '<?=base_url()?>';
function showtext_slide(){
    $('#text_slide'+(text_slide_cur+1)).css({opacity: 0}).animate({opacity: 1.0}, 1000);
    setTimeout(hidetext_slide, 5000);
}
function hidetext_slide(){
    $('#text_slide'+(text_slide_cur+1)).css({opacity: 1}).animate({opacity: 0}, 1000,function(){showtext_slide();});
    text_slide_cur=(text_slide_cur+1)%<? $sl=$this->db->get('slogan'); echo $sl->num_rows(); ?>;
}
$(document).ready(function() {
    showtext_slide();

    $('#search-home').click(function() {
    	site = '<?=base_url()?>';
    window.location.replace(site+"first/search/"+$('#sale-home').val()+'/'+$('#vid-home').val()+'/'+$('#type-home').val());
    })
})
</script> 