<div {{ $attributes->merge(['class' => "alert alert-{$type} alert-dismissible fade show"]) }}>
    {{ $message ?: $slot }}

    @if($dismissible)
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    @endif
</div>
