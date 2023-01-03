<?php
// Add Shortcode
function idx_carousel_shortcode_item_function( $atts , $content = null ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'slide_number' => '3',
			'fade' => 'false',
			'loop' => 'false',
		),
		$atts,
		'idx_carousel_item'
	);

	
ob_start();?>
<div class="swiper-slide">
    <div class="slide-container">
        <?php echo $content = do_shortcode( $content );?>

    </div>
</div>
<?php
// always return
return ob_get_clean();

}
add_shortcode( 'idx_carousel_item', 'idx_carousel_shortcode_item_function' );