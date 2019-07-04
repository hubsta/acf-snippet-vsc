@if(get_field('+{1:field_name}'))
    @php
        $file = get_field('+{1:field_name}');
    @endphp
    <a href="{{ $file['url'] }}">{{ $file['title'] }}</a>
@endif