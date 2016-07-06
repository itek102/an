
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Responsive Image Gallery</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
        <meta name="description" content="Responsive Image Gallery with jQuery" />
        <meta name="keywords" content="jquery, carousel, image gallery, slider, responsive, flexible, fluid, resize, css3" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">  
		<script type="text/javascript" src="<?=base_url()?>js/query.js"></script>
		<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/elastislide.css" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' />
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
									<li><a href="#"><img src="<?=base_url();?>images/thumbs/1.jpg" data-large="<?=base_url();?>images/1.jpg" alt="image01" data-description="" /></a></li>
									<li><a href="#"><img src="<?=base_url();?>images/thumbs/2.jpg" data-large="<?=base_url();?>images/2.jpg" alt="image02" data-description="" /></a></li>
									<li><a href="#"><img src="<?=base_url();?>images/thumbs/3.jpg" data-large="<?=base_url();?>images/3.jpg" alt="image03" data-description="" /></a></li>
									<li><a href="#"><img src="<?=base_url();?>images/thumbs/4.jpg" data-large="<?=base_url();?>images/4.jpg" alt="image04" data-description="" /></a></li>
									<li><a href="#"><img src="<?=base_url();?>images/thumbs/5.jpg" data-large="<?=base_url();?>images/5.jpg" alt="image05" data-description="" /></a></li>
								</ul>
							</div>
						</div>
						<!-- End Elastislide Carousel Thumbnail Viewer -->
					</div><!-- rg-thumbs -->
				</div><!-- rg-gallery -->
					<script type="text/javascript" src="<?=base_url();?>js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="<?=base_url();?>js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="<?=base_url();?>js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="<?=base_url();?>js/gallery.js"></script>

		</body>
</html>