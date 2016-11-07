Same setup as [smilledge/acf-sublime-snippets](https://github.com/smilledge/acf-sublime-snippets) but for VSC.

## Current Snippets

### Repeater Field

**`field:repeater` (HTML)**

Get and loop over a repeater field

```
<?php if ( have_rows('field_name') ) : ?>

  <?php while( have_rows('field_name') ) : the_row(); ?>

    <?php the_sub_field('sub_field_name'); ?>

  <?php endfor; ?>

<?php endif; ?>
```
### If Field

**`field:if` (HTML)**

Field conditional. Also used for true/false fields.

```
<?php if ( get_field('field_name')): ?>

<?php endif; ?>
```

**`field` (HTML)**

```
<?php if ( get_field('field_name')): ?>

  <?php echo get_field('{field_name}'); ?>
  
<?php endif; ?>
```

### If Sub Field

**`field:sub` (HTML)**

Field conditional. Also used for true/false fields.

```
<?php if ( get_sub_field('field_name')): ?>

  <?php echo get_sub_field('{field_name}'); ?>
  
<?php endif; ?>
```

### Flexible Content

**`field:flex` (HTML)**

```
<?php if( have_rows('flexible_content_field_name') ): ?>

    <?php while ( have_rows('flexible_content_field_name') ) : the_row(); ?>

        <?php if( get_row_layout() == 'paragraph' ): ?>

        	<?php the_sub_field('text'); ?>

        <?php elseif( get_row_layout() == 'download' ): ?>

        	<?php $file = get_sub_field('file'); ?>

        <?php endif; ?>

    <?php endwhile; ?>

<?php endif; ?>
```