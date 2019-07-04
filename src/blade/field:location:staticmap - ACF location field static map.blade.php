<?php if ( get_field('+{1:field_name}') ) :
    $location = get_field('+{1:field_name}');
    $coordinates = isset( $location['coordinates'] ) ? $location['coordinates'] : $location ; ?>
    <img src="http://maps.google.com/maps/api/staticmap?markers=<?php echo $coordinates; ?>&size=+{2:500x300}&sensor=false" alt="+3">
<?php endif; ?>
