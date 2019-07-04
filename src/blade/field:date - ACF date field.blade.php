@if(get_field('+{1:field_name}'))
    {{ DateTime::createFromFormat('+{2:Ymd}', get_field('+{1:field_name}')->format('+{3:d-m-Y}') }}
@endif