<?php
/**
 * The location section partial for the Page Builder
 *
 * @package FlatBook
 */

$location = get_sub_field('map_location');
$marker   = get_sub_field('map_marker'); ?>

<?php if( $location ) : ?>

	<div class="google-map">

		<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>

	</div>

<?php endif; ?>

<?php wp_enqueue_script( 'flatbook_googlemap_script' ); ?>
<script type="text/javascript">
	(function($) {

		function render_map( $el ) {
			var $markers = $el.find('.marker');
			var args = {
				zoom		: 16,
				center		: new google.maps.LatLng(0, 0),
				mapTypeId	: google.maps.MapTypeId.ROADMAP
			};
			var map = new google.maps.Map( $el[0], args);
			map.markers = [];
			$markers.each(function(){
		    	add_marker( $(this), map );

			});
			center_map( map );
		}

		function add_marker( $marker, map ) {
			var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
			var image = "<?php if( $marker ) { echo $marker; } else { echo get_template_directory_uri().'/assets/img/marker.png'; } ?>";
			var marker = new google.maps.Marker({
				position	: latlng,
				map			: map,
				icon		: image
			});
			map.markers.push( marker );
			if( $marker.html() )
			{
				var infowindow = new google.maps.InfoWindow({
					content		: $marker.html()
				});
				google.maps.event.addListener(marker, 'click', function() {
					infowindow.open( map, marker );
				});
			}
		}

		function center_map( map ) {
			var bounds = new google.maps.LatLngBounds();
			$.each( map.markers, function( i, marker ){
				var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
				bounds.extend( latlng );
			});
			if( map.markers.length == 1 )
			{
			    map.setCenter( bounds.getCenter() );
			    map.setZoom( 16 );
			}
			else
			{
				map.fitBounds( bounds );
			}

		}

		$(document).ready(function(){
			$('.google-map').each(function(){
				render_map( $(this) );
			});
		});

	})(jQuery);
</script>