<?php

class Architect {

	public function __construct() {

		add_shortcode('nd_gallery', 		array($this, 'nd_gallery'));

	}


	public function nd_gallery( $atts, $content ) {

		global $post, $thebakery;
		$ingredients = $thebakery->get_ingredients($post);

		if(empty($ingredients)) return '';

		$td = get_template_directory_uri();

		ob_start();

		echo '<ul class="nd-gallery" id="nd-gallery">';

		foreach($ingredients as $ing) {

			if($ing->type != 'image') continue;

			$img_medium = get_image_url($ing->media, 'medium');
			$img_full = get_image_url($ing->media, 'full');

			if(empty($img_medium) || empty($img_full)) continue;

			?><li>
				<a href="<?php echo $img_full; ?>" target="_blank">
					<img src="<?php echo $img_medium; ?>" />
				</a>
			</li><?php

		}

		?></ul>
		<style type="text/css">
			.nd-gallery { margin: 1rem 0; padding: 0; list-style: none outside; }
			.nd-gallery::after { clear: both; display: table; height: 0; }
			.nd-gallery li { float: left; box-sizing: border-box; width: 20%; padding: 0.5rem; }
			.nd-gallery li a { display: block; width: 100%; height: 10rem; position: relative; overflow: hidden; transition: opacity 0.2s ease; }
			.nd-gallery li a:hover { opacity: 0.7; }
			.nd-gallery li a img { position: absolute; top: 50%; left: 50%; transform: translateX(-50%) translateY(-50%); width: 100%; height: auto; }
			@media (max-width: 991px){ .nd-gallery li { width: 25%; } .nd-gallery li a { height: 9rem; } }
			@media (max-width: 599px){ .nd-gallery li { width: 33.333333%; } }
			@media (max-width: 359px){ .nd-gallery li { width: 50%; } }
		</style>
		<link rel="stylesheet" type="text/css" href="<?php echo $td; ?>/inc/magnific-popup.css" />
		<script type="text/javascript" src="<?php echo $td; ?>/inc/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript">(function($){ $(function() {
			nd_gallery = $('#nd-gallery');
			if(nd_gallery.length) {
				nd_gallery.magnificPopup({
					delegate: 'a',
					type: 'image',
					gallery: {
						enabled: true
					}
				});
			}
		}); })(jQuery);</script>
		<?php



		return ob_get_clean();

	}



}

new Architect();