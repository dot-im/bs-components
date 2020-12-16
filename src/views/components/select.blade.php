<select {{ $attributes->merge(['class' => 'form-select']) }}>
    @if($options)
        @foreach($options as $text => $value)
            <option value="{{ $value }}" {{ $isSelected($value) }}>{{ $text }}</option>
        @endforeach
    @endif

    {{ $slot }}
</select>
