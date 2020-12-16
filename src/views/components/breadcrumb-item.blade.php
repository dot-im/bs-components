@if($active)
    <li {{ $attributes->merge(['class' => 'breadcrumb-item']) }} aria-current="page">
        {{ $text ?: $slot }}
    </li>
@else
    <li {{ $attributes->merge(['class' => 'breadcrumb-item']) }}>
        <a href="{{ $href }}">
            {{ $text ?: $slot }}
        </a>
    </li>
@endif
