<select name="lang_links" class="select_lang">
	@foreach($links as $link)
        @if($link['hreflang'] == Config::get('app.locale'))
            <option selected value="{{ $link['hreflang'] }}">{{ $link['data-label'] }}</option>
        @else
            <option value="{{ $link['hreflang'] }}">{{ $link['data-label'] }}</option>
        @endif
    @endforeach
</select>