<?php

$args = array(
    'numberposts' => 10,
    'post_type' => 'post',
    'meta_key' => '+{1:field_name}',
    'meta_value' => '+{2:field_value}'
);

$query = new WP_Query( $args );

?>

<?php if( $query->have_posts() ) : ?>
    <ul>
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>

<?php wp_reset_query(); ?>
