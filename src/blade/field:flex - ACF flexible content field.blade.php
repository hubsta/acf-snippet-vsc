<?php if ( have_rows( '+{1:field_name}' ) ) : ?>
    <?php while ( have_rows('+{1:field_name}' ) ) : the_row(); ?>
        <?php if ( get_row_layout() == '+{3:layout_field}' ) : ?>
            <div class="+{4:class}">
                <?php the_sub_field( '+{5:field_name}' ); ?>
            </div>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
