<?php if ( get_field('+{1:field_name}') ) : ?>

    <div class="+{3:item}s">
        <?php foreach ( array_chunk(get_field('+{1:field_name}'), +{2:2}) as $row): ?>

            <div class="row">
                <?php foreach ($row as ++{3:item}): ?>

                    <div class="+{3:item}">
                        <?php echo ++{3:item}['+{4:field_name}']; ?>+5
                    </div>

                <?php endforeach; ?>
            </div>

        <?php endforeach; ?>
    </div>

<?php endif; ?>
