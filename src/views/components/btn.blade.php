@if($href)
    <a {{ $attributes->merge(['class' => "btn btn-{$type}", 'href' => $href]) }}>
        {{ $text ?: $slot }}
    </a>
@else
    <button {{ $attributes->merge(['class' => "btn btn-{$type}"]) }}>
        {{ $text ?: $slot }}
    </button>
@endif
