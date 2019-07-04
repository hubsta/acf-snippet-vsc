@if(have_rows( '+{1:field_name}' ))
    @while(have_rows('+{1:field_name}' ))
        @php
            the_row();
        @endphp
        @if(get_row_layout() == '+{3:layout_field}')
            <div class="+{4:class}">
                {{ the_sub_field( '+{5:field_name}' ) }}
            </div>
        @endif
    @endwhile
@endif