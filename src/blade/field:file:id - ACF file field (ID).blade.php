@if(get_field('+{1:field_name}'))
    @php
        $attachment_id = get_field('+{1:field_name}');
        $url = wp_get_attachment_url( $attachment_id );
        $title = get_the_title( $attachment_id );
    @endphp
    <a href="{{ $url }}">{{ $title }}</a>
@endif