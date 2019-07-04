<?php
if ( get_field('+{1:field_name}') ) :
    $attachment_id = get_field('+{1:field_name}');
    $url = wp_get_attachment_url( $attachment_id );
    $title = get_the_title( $attachment_id );
?>
    <a href="<?php echo $url; ?>" ><?php echo $title; ?></a>
<?php endif; ?>
