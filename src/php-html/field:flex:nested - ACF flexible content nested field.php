<?php if( have_rows('+{1:field_name}') ): ?>
    <?php while ( have_rows('+{1:field_name}') ) : the_row(); ?>
        <?php if( get_row_layout() == '+{2:layout_field}' ): ?>
            <?php if( have_rows('+{3:layout_rows}') ): ?>
                <ul>
                    <?php while ( have_rows('+{3:layout_rows}') ) : the_row(); $image = get_sub_field('+{4:sub_field}'); ?>
                        +{5:<li><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></li>}
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
