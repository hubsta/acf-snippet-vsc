<?php if ( get_field('+{1:field_name}') ) : $file = get_field('+{1:field_name}'); ?>
    <a href="<?php echo $file['url']; ?>"><?php echo $file['title']; ?></a>
<?php endif; ?>
