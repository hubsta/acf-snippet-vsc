@if(have_rows('+{1:field_name}'))
    @while(have_rows('+{1:field_name}'))
        @php
            the_row();
        @endphp
        @if(get_row_layout() == '+{2:layout_field}')
            @if(have_rows('+{3:layout_rows}'))
                <ul>
                    @while(have_rows('+{3:layout_rows}'))
                        @php
                            the_row();
                            $image = get_sub_field('+{4:sub_field}')
                        @endphp
                        +{5:<li><img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}" /></li>}
                    @endwhile
                </ul>
            @endif
        @endif
    @endwhile
@endif