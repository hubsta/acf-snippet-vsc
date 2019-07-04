<?php
if ( get_field('+{1:field_name}') ) {
    $attachment_id = get_field('+{1:field_name}');
    $size = "+{2:full}"; // (thumbnail, medium, large, full or custom size)
    wp_get_attachment_image( $attachment_id, $size );
}
?>
