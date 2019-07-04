<?php if ( get_field('+{1:field_name}') ) {
    $form = get_field('+{1:field_name}');
    gravity_form_enqueue_scripts($form->id, true);
    gravity_form($form->id, +{2:display_title}, +{3:display_description}, false, +{4:field_values}, +{5:enable_ajax}, 1);
} ?>
