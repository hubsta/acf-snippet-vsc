<?php if ( get_field('+{1:field_name}') ) :
    $location = get_field('+{1:field_name}'); ?>
    <?php echo $location['address']; ?>
<?php endif; ?>
