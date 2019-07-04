<?php if ( have_rows('+{1:field_name}') ) : ?>

    <?php while( have_rows('+{1:field_name}') ) : the_row(); ?>

        <?php the_sub_field('+{3:sub_field_name}'); ?>+4

    <?php endwhile; ?>

<?php endif; ?>
