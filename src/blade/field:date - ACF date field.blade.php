<?php if ( get_field('+{1:field_name}') ) : $date = DateTime::createFromFormat('+{2:Ymd}', get_field('+{1:field_name}')); ?>
    <?php echo $date->format('+{3:d-m-Y}'); ?>
<?php endif; ?>
