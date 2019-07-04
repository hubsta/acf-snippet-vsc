<?php if ( get_field('+{1:field_name}') ) : ?>
    <img src="<?php the_field('+{1:field_name}'); ?>" alt="+{2:<?php the_field(''); ?>}">
<?php endif; ?>
