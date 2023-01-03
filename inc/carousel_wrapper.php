<?php
// Add Shortcode
function idx_carousel_shortcode_wrapper_function( $atts , $content = null ) {

	// Attributes
	$atts = shortcode_atts(
		array(
			'slide_number' => '3',
			'fade' => false,
			'loop' => false,
			'pagination'=>false,
			'navigation' =>false
		),
		$atts,
		'idx_carousel_wrapper'
	);
	'slide_number';
			$fade =$atts['fade'];
			$loop = $atts['loop'];
			$pagination=$atts['pagination'];
			$navigation =$atts['navigation'];
	ob_start();?>
    <div class="idx-carousel-wrapper">
<div class="carousel"
data-slidenumber=""
data-fade=""
data-loop=""
>
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
   
 
<?php echo $content = do_shortcode( $content );?>
</div>
  <!-- If we need pagination -->
  <div class="idx-new-pagination"></div>

  <!-- If we need navigation buttons -->
  

</div>
<div class="idx-new-button-prev"></div>
<div class="idx-new-button-next"></div>
</div>
<?php
return ob_get_clean();

}
add_shortcode( 'idx_carousel_wrapper', 'idx_carousel_shortcode_wrapper_function' );