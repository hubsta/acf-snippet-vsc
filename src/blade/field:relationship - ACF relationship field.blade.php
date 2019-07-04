<?php $posts = get_field('+{1:field_name}'); ?>
<?php if ( $posts ): ?>
    <ul>
        <?php foreach ( $posts as $post ) : setup_postdata( $post ); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php endforeach; wp_reset_postdata(); ?>
    </ul>
<?php endif; ?>
