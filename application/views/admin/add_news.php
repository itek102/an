	<div id='main-cont'>
<h3 id='form-zag'>Добавить новость</h3>
		<form id='admin-form' action="#"  enctype="multipart/form-data" method="POST">	
			<p><input id='news-date' name='news_date' type='date'></p>
			<p><input id='news-title' name='news_title' type='text' placeholder='Заголовок'></p>
			<textarea  id='news-text' name='news_text'></textarea>
<p class='abz-form'><label><input type="file" min="1" max="9999" name="file[]" multiple="false" /></label></p>
<p class='abz-form'><label><input class="but" type="submit" name="add_news" value="Добавить новость" /></label></p>

</form>
<p id='status-news'><?=$status_news;?></p>
	</div>
	<div style="clear:both;"></div>
</div>

<script type="text/javascript">
	setTimeout(function() { $('#status-news').fadeOut()},500);
</script>

<!-- TinyMCE -->
<script type="text/javascript" src="<?=base_url();?>js/tinymce.min.js"></script>
<script type="text/javascript">
tinyMCE.init({
mode : "textareas",
theme : "modern",
language : "ru_RU",
inline_styles: true,
convert_urls : false,
relative_urls : false,
remove_script_host : false,
cleanup: true,
extended_valid_elements:"noindex, strong/b, em/i, sup, sub, ul, ol, li, div[class | id | style | name | title | align | width | height], span[class | id | style | name | title], hr[class | id | style | name | title | align | width | height], img[class | id | style | name | title | src | align | alt | hspace | vspace | width | height | border=0], a[class | id | style | name | title | src | href | rel | target | ], iframe[class | id | style | name | title | src | align | width | height | marginwidth | marginheight | scrolling | frameborder | border | bordercolor], embed[class | id | style | name | title | align | width | height | hspace | vspace | type | pluginspage | src], object[class | id | style | name | title | align | width | height | hspace | vspace | type | classid | code | codebase | codetype | data]",

plugins : "pagebreak, layer, table, save, link, insertdatetime, preview, media, searchreplace, print, contextmenu, paste, directionality, fullscreen, noneditable, visualchars, nonbreaking, template, wordcount, advlist, autosave",
    default_link_target: "_blank",
// Theme options
theme_advanced_buttons1 : "undo, redo, |, bold, italic, underline, strikethrough, |, justifyleft, justifycenter, justifyright, justifyfull, styleselect, formatselect, fontselect, fontsizeselect, sub, sup, |, forecolor, backcolor",
theme_advanced_buttons2 : "cut, copy, paste, pastetext, pasteword, removeformat, cleanup, |, search, replace, |, bullist, numlist, |, outdent, indent, blockquote, |, link, unlink, image, |, insertdate, inserttime, hr, |, charmap, emotions, iespell",
theme_advanced_buttons3 : "tablecontrols, |, visualaid",
theme_advanced_buttons4 : "styleprops, |, cite, abbr, acronym, del, ins, |, visualchars, nonbreaking, |, print, preview, |, fullscreen",
theme_advanced_toolbar_location : "top",
theme_advanced_toolbar_align : "left",
theme_advanced_statusbar_location : "bottom",
theme_advanced_resizing : true,

});
</script>
<!-- /TinyMCE -->

