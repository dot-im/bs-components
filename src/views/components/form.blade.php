<form {{ $attributes->merge(['method' => $method, 'action' => $action, 'enctype' => 'multipart/form-data']) }}>
    {!! csrf_field() !!}
    {!! $methodField !!}
    {{ $slot }}
</form>
