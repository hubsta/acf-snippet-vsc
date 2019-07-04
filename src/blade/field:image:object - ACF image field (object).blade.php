<?php if ( get_field('+{1:field_name}') ) : $image = get_field('+{1:field_name}'); ?>

    <!-- Full size image -->
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>

    <!-- Thumbnail image -->
    <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>"/>

<?php endif; ?>
